<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        //
        $response['about'] = About::first();
        //Logger
        $this->Logger->log('info', 'Visualizou o sobre nós');
        return view('admin.about.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $response['about'] = About::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar o sobre nós');

        return view('admin.about.edit.index',  $response);
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
        $request->validate([
            'title' => 'required|min:10|max:255',
            'information' => 'required|min:20',

        ]);
        About::find($id)->update($request->all());

        //Logger
        $this->Logger->log('info', 'Editou o sobre nós');
        return redirect()->route('admin.about.show')->with('edit', '1');
    }
}
