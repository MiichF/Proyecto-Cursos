<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    Public function contacto($codigo = null){
         
        if ($codigo == "1234"){
    
            $nombre ='Paulina_Figueroa';
            $correo= 'miichfn@gmail.com';    

        }else{
            $nombre = "";
            $correo = "";
        
        }
    
    return view('contacto', compact('nombre','correo'));
    }

 Public function LandingPage()
 {
    return view('LandingPage');
 }   


 Public function recibirFormContacto(Request $request){
    //recibir info
    //validar

    
    $request -> validate([
        'nombre' =>'required|max:255|min:3',
        'correo' =>'required|email',
        'mensaje'=>'required',
    ]);
    //insertar a BD
    
    DB::table('usuarios')->insert([
        'nombre' => $request -> nombre,
        'correo' => $request -> correo,
        'mensaje' => $request -> mensaje,
        'created_at' => now(),
        'updated_at' => now(),
        
        
    ]);

    return redirect('/contacto');

    echo("funciona");

 }



}
