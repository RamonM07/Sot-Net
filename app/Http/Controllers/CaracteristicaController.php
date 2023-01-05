<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caracteristica;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = Caracteristica::all();
        
        return view('characteristics.index',compact('caracteristicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characteristics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()-> validate([
            'desc_caracteristica'=> 'required',
        ]);
        
        Caracteristica::create($request->all());
        return redirect()->route('characteristics.index');
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
    public function edit(Caracteristica $caracteristica)
    {
        $caracteristica = Caracteristica::find('id');
        return view('characteristics.update',compact('caracteristica')); 
        dd($paquete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristica $caracteristica)
    {
        request()-> validate([
            'desc_caracteristica'=> 'required',
        ]);

        $caracteristica->update($request->all());
        return redirect()->route('characteristics.index');
        //dd($caracteristica);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristica $caracteristica)
    {
        $caracteristica->delete();
    
        return redirect()->route('characteristics.index');
    }
}
