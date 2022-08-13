<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lugares.index', ["lugares"=>Lugar::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'descripcion' => 'required',
            'recomendaciones' => 'required',
            'horario' => 'required',

            ]);

        $lugar = new Lugar;
        $lugar->nombre = $request->nombre;
        $lugar->descripcion = $request->descripcion;
        $lugar->como_llegar =$request->como_llegar;
        $lugar->recomendaciones = $request->recomendaciones;
        $lugar->horario = $request->horario;
        $lugar->restricciones = $request->restricciones;
        $lugar->costo = $request->costo;
        $lugar->video = $request->video;
        $lugar->imagen_principal = $request->imagen_principal;
        $lugar->imagen_extra = $request->imagen_extra;
        $lugar->categoria = $request->categoria;
        $lugar->save();
        return redirect()->route('lugares.index')->with(["mensaje" => "lugar creado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show(Lugar $lugar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit(Lugar $lugar)
    {
        return view("lugares.edit", ["lugar" => $lugar,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
    
        $lugar->nombre = $request->nombre;
        $lugar->descripcion = $request->descripcion;
        $lugar->como_llegar =$request->como_llegar;
        $lugar->recomendaciones = $request->recomendaciones;
        $lugar->horario = $request->horario;
        $lugar->restricciones = $request->restricciones;
        $lugar->costo = $request->costo;
        $lugar->video = $request->video;
        $lugar->imagen_principal = $request->imagen_principal;
        $lugar->imagen_extra = $request->imagen_extra;
        $lugar->categoria = $request->categoria;
        $lugar->save();

        return redirect()->route("lugares.index")->with(["mensaje" => "Nivel actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
    return redirect()->route("lugares.index")->with(["mensaje" => "Nivel eliminado",
    ]);
    }
}
