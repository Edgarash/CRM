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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(Request $request)
    {
        $usuario = new User;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->empleado = 1;
        $usuario->admin = false;
        $usuario->clientuser_id = false;
        $usuario->activo = true;
        
        $emp = new Empleado;
        $emp->nombre = $request->nombres;
        $emp->apellidos = $request->apellidos;
        $emp->email = $request->email;
        $emp->sucursal = $request->sucursal;
        $usuario->save();
        $emp->save();


        /*
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'empleado' => 1,
            'admin' => false,
            'clientuser_id' => false,
            'activo' => true,*/

        /*return Empleado::create([
            'email' => $data['email'],
            'nombre' => $data['password'],
            'apellidos' =>$data['apellidos'],
            'Sucursal' => $data['sucursal'],
        ]);*/
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
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }
    //protected $redirectTo = '/home';

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
