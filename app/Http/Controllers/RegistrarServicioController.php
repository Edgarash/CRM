<?php

namespace App\Http\Controllers;
use App\Servicio;
use Illuminate\Http\Request;

class RegistrarServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Registrarservicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $servi = new Servicio;
        $servi->servicio = $request->servicio;
        $servi->save();
        return redirect()->route('Servicios');

    }

    public function editar($id){
        $servi = Servicio::find($id);
        return view('servicios.Modificarservicio')->with(compact('servi'));

    }

    public function modificar(Request $request, $id){

        $servi = Servicio::find($id);
        $servi->servicio = $request->servicio;
        $servi->save();
        return redirect()->route('Servicios');

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
