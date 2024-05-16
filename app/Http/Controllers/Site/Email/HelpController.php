<?php

namespace App\Http\Controllers\Site\Email;

use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
{
    /**
     * Show the form for sending a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required|String|max:60',
            'email' => 'required',
            'subject' => 'required|String|max:255',
            'msg' => 'required|string',
        ]);

        Mail::to('info@cne.ao')->send(new MailContact($request->all()));
        return redirect()->back()->with('helpCreate', '1');
    }
}
