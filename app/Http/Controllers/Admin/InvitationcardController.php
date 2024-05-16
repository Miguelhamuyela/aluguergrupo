<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Invitationcard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Invitation as MailInvitation;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;

class InvitationcardController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function list()
    {
        $response['invitationcards'] = Invitationcard::get();
        //Logger
        $this->Logger->log('info', 'Listou as Marcações de Presença');
        return view('admin.invitationcard.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['invitationcard'] = Invitationcard::find($id);

        //Logger
        $this->Logger->log(
            'info',
            'Visualizar uma marcação de presença com o identificador ' . $id
        );
        return view('admin.invitationcard.details.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'status' => 'required|string',
        ]);

        Invitationcard::find($id)->update([
            'status' => $request->status,
        ]);

        //Logger
        $this->Logger->log(
            'info',
            'Editou uma marcação de presença com o identificador ' . $id
        );
        if($request->status == 'Autorizado'){

            try {
                $this->Logger->log(
                    'info',
                    'Enviou um ticket de presença com o identificador ' . $id
                );
                $invitation = Invitationcard::find($id);
                Mail::to($invitation->email)->send(new MailInvitation($invitation));
    
                return redirect()
                    ->route('admin.invitationcard.show', $id)
                    ->with('send', '1');
            } catch (\Throwable $th) {
                return redirect()
                    ->back()
                    ->with('error', '1');
            }
        }else{

            return redirect()->back()->with('edit', '1');
        }
    }

    

    //Criação do ticket de presença
    public function create($code)
    {
        $response['qrcode'] = QrCode::Color(5, 32, 32)
            ->size(80)
            ->generate(route('site.invitationcard.show', $code));
        $response['invitation'] = Invitationcard::where('code', $code)->first();
        $pdf = PDF::loadView('pdf/invitation/index', $response);

        return $pdf->stream('Convite-' . $code . '.pdf');
    }
}
