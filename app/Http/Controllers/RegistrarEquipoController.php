<?php

namespace App\Http\Controllers;
use App\Equipo;
use Illuminate\Http\Request;

class RegistrarEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Registrarequipo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $eq = new Equipo;

        $eq->cliente = $request->cliente;
        $eq->marca = $request->marca;
        $eq->modelo = $request->modelo;
        $eq->descripcion = $request->descripcion;
        $eq->serie = $request->serie;
        $eq->garantia = "2018/12/12";
        $eq->save();
        return redirect()
        ->route('/');
    }

    public function editar($id){
        $equipo = Equipo::find($id);
        return view('equipos.Modificarequipo')->with(compact('equipo'));

    }

    public function modificar(Request $request, $id){

        $eq = Equipo::find($id);
        $eq->cliente = $request->cliente;
        $eq->marca = $request->marca;
        $eq->modelo = $request->modelo;
        $eq->descripcion = $request->descripcion;
        $eq->serie = $request->serie;
        $eq->garantia = "2018/12/12";
        $eq->save();
        return redirect()
        ->route('Equipos');
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
    }
}
