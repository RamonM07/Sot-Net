<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquete::paginate(10);
        
        return view('packages.index',compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
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
            'desc_pack'=> 'required',
            'costo_pack'=> 'required',
        ]);
        
        Paquete::create($request->all());
        return redirect()->route('packages.index');
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
    public function edit(Paquete $paquete)
    {
        return view('packages.update',compact('paquete')); 
        dd($paquete);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquete $paquete)
    {
        request()-> validate([
            'desc_pack'=> 'required',
            'costo_pack'=> 'required',
        ]);

        $paquete->update($request->all());
        return redirect()->route('packages.index');
        dd($paquete);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Paquete $paquete)
    {
        $paquete->delete();
    
        return redirect()->route('packages.index');
    }
}
