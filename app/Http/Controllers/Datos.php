<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Datos extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }

    public function index()
    {
        $titulo = 'Inicio';
        $items = Dato::all();
        $totalGanancias = 0;
        $totalGastos = 0;
        foreach ($items as $item) {
            if ($item->tipo == "Ganancia") {
                $totalGanancias += $item->cantidad;
            } else if ($item->tipo == "Gasto") {
                $totalGastos += $item->cantidad;
            }
        }
        
        return view('index', compact('titulo', 'items', 'totalGanancias', 'totalGastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar nuevo registro';
        $items = Dato::all();
        return view('create', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Dato();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        Alert::success('Datos guardados correctamente!', ':D');
        return redirect('/inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = 'Eliminar registro';
        $items = Dato::find($id);
        return view('delete', compact('titulo', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Editar registro';
        $items = Dato::find($id);
        return view('edit', compact('titulo', 'items'));
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
        $item = Dato::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        Alert::warning('Datos actualizados correctamente!', ':D');
        return redirect('/inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dato::find($id);
        $item->delete();
        Alert::error('Datos eliminados correctamente!', ':(');
        return redirect('/inicio');
    }
}
