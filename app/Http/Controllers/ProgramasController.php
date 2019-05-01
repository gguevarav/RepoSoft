<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Programas;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programa=Programas::orderBy('idPrograma','DESC')->paginate(3);
        return view('Programas.index',compact('programa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Programas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['NombrePrograma'=>'required',
                                  'UsuarioPrograma'=>'required',
                                  'ClavePrograma'=>'required',
                                  'PlataformaPrograma'=>'required',
                                  'VersionPrograma'=>'required',
                                  'LinkDescargaPrograma'=>'required']);
        Programas::create($request->all());
        return redirect()->route('Programas.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $programa=Programas::find($id);
        return  view('programas.show',compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $programas=programas::find($id);
        return view('programas.edit',compact('programas'));
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
        //
        $this->validate($request,['NombrePrograma'=>'required',
                                  'UsuarioPrograma'=>'required',
                                  'ClavePrograma'=>'required',
                                  'PlataformaPrograma'=>'required',
                                  'VersionPrograma'=>'required',
                                  'LinkDescargaPrograma'=>'required']);
 
        programas::find($id)->update($request->all());
        return redirect()->route('programas.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Programas::find($id)->delete();
        return redirect()->route('programas.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
