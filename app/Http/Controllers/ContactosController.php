<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Rules\TelefonoValidacion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();

        return view('home', compact('contactos'));
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
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'estado_civil' => 'required',
            'sexo' => 'required',
            'fecha_de_nacimiento' => 'required'
        ]);

        $contacto = new Contacto();

        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->correo = $request->correo;
        $contacto->estado_civil = $request->estado_civil;
        $contacto->sexo = $request->sexo;
        $contacto->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $contacto->created_at = Carbon::now()->timestamp;
        $contacto->updated_at = Carbon::now()->timestamp;

        $contacto->save();

        return redirect()->route('contactos.index');

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
        $contacto = Contacto::find($id);

        return view('editar', compact('contacto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {  
        $request->validate([
            'nombre' => 'required|max:20|alpha',
            'apellido' => 'required|max:20|alpha',
            'telefono' => 'required|max:12|',
            'correo' => 'required|max:50|email',
            'estado_civil' => 'required|max:2|alpha',
            'sexo' => 'required|max:1|alpha',
            'fecha_de_nacimiento' => 'required|date',
            'telefono' => [
                new TelefonoValidacion()
            ]
        ]);

        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->correo = $request->correo;
        $contacto->estado_civil = $request->estado_civil;
        $contacto->sexo = $request->sexo;
        $contacto->fecha_de_nacimiento = $request->fecha_de_nacimiento;

        $contacto->save();

        return redirect()->route('contactos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $id)
    {
        $id->delete();

        return redirect()->back();
    }
}
