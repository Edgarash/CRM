<?php

namespace App\Http\Controllers;
use App\User;
use App\Empleado;
use Illuminate\Http\Request;

class RegistrarEmpleadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RegistrarEmpleado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuario = new User;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->empleado = 1;
        $usuario->admin = false;
        $usuario->clientuser_id = false;
        $usuario->activo = true;
        
        $emp = new Empleado;
        $emp->nombre = $request->nombres;
        $emp->apellidos = $request->apellidos;
        $emp->email = $request->email;
        $emp->sucursal = $request->sucursal;
        $emp->tecnico = 1;
        $usuario->save();
        $emp->save();
        return redirect()
        ->route('/');
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

    public function editar($id){
        
        $empleado = Empleado::find($id);
        return view('empleados.Modificarempleado')->with(compact('empleado'));

    }

    public function modificar(Request $request,$id){
        $usuario = User::find($id);
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->empleado = 1;
        $usuario->admin = false;
        $usuario->clientuser_id = false;
        $usuario->activo = true;
        
        $emp = Empleado::find($id);
        $emp->nombre = $request->nombres;
        $emp->apellidos = $request->apellidos;
        $emp->email = $request->email;
        $emp->sucursal = $request->sucursal;
        $emp->tecnico = 1;
        $usuario->save();
        $emp->save();
        return redirect()
        ->route('Empleados');
        
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
