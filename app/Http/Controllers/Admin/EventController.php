<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['events'] = Event::get();
        //Logger
        $this->Logger->log('info', 'Listou os Eventos');
        return view('admin.event.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar um evento');
        return view('admin.event.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'activity' => 'required|string',
            'apresentation' => 'required|string',
            'date' => 'required|date',
            'place' => 'required|string'
        ]);
        $event = Event::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou um evento com o identificador ' . $event->id);

        return redirect("admin/event/show/$event->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['event'] = Event::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um evento com o identificador ' . $id);
        return view('admin.event.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['event'] = Event::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um evento com o identificador ' . $id);
        return view('admin.event.edit.index', $response);
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
            'activity' => 'required|string',
            'apresentation' => 'required|string',
            'date' => 'required|date',
            'place' => 'required|string',

        ]);

        Event::find($id)->update($request->all());

        //Logger
        $this->Logger->log('info', 'Editou um evento com o identificador ' . $id);
        return redirect("admin/event/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um evento com o identificador ' . $id);
        Event::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
