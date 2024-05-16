<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\InfluentialWomen;
use Illuminate\Http\Request;

class InfluentialWomenController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['influentialWomens'] = InfluentialWomen::get();
        //Logger
        $this->Logger->log('info', 'Listou as Mulheres Influentes');
        return view('admin.influentialWomen.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em cadastrar Mulher Influente');
        return view('admin.influentialWomen.create.index');
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
            'name' => 'required|min:5|max:255|string',
            'function' => 'required|min:2|max:255|string',
            'description' => 'required|string',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('photo')->store('influentialWomens');
        $influentialWomen = InfluentialWomen::create([
            'photo' => $file,
            'name' => $request->name,
            'function' => $request->function,
            'description' => $request->description
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma mulher influente ' . $influentialWomen->name);

        return redirect()->route("admin.influentialWomen.show",$influentialWomen->id)->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['influentialWomen'] = InfluentialWomen::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar uma Mulher Influente com o identificador ' . $id);
        return view('admin.influentialWomen.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['influentialWomen'] = InfluentialWomen::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Mulher Influente com o identificador ' . $id);
        return view('admin.influentialWomen.edit.index', $response);
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
            'name' => 'required|min:5|max:255|string',
            'function' => 'required|min:2|max:255|string',
            'description' => 'required|string',
            'photo' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('photo')) {
            $file = $file->store('influentialWomens');
        } else {
            $file = InfluentialWomen::find($id)->photo;
        }
        InfluentialWomen::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'function' => $request->function,
            'description' => $request->description
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma Mulher Influente com o identificador ' . $id);
        return redirect()->route("admin.influentialWomen.show",$id)->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma Mulher Influente com o identificador ' . $id);
        InfluentialWomen::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
