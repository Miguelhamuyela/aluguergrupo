<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Invitationcard;
use Illuminate\Http\Request;

class InvitationcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.invitationcard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'position' => 'required|string|max:255',
        ]);

        Invitationcard::create([
            'name' => $request->name,
            'code' => 'minttics' . '-' . rand() . '-' . date('Y'),
            'email' => $request->email,
            'position' => $request->position,
        ]);
        return redirect()
            ->back()
            ->with('presence', '1');
    }

    public function show($code)
    {
        $response['invitation'] = Invitationcard::where('code', $code)->first();
        return view('site.invitationcard.verify.index', $response);
    }
}
