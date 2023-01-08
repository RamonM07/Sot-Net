<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\AgregaServicios;
use App\Models\Servicio;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquete::all();
        $lista_p = DB::table('agrega_servicios')
        ->join('paquetes', 'paquetes.id', '=', 'agrega_servicios.paquete_id')
        ->join('servicios', 'servicios.id', '=', 'agrega_servicios.servicio_id')
        ->select('servicios.desc_serv', 'servicios.id','paquetes.desc_pack','agrega_servicios.paquete_id', 'paquetes.costo_pack')
        ->groupBy('agrega_servicios.paquete_id','servicios.id','servicios.desc_serv', 'paquetes.desc_pack', 'paquetes.costo_pack')
        ->get();
        return view('packages.index',compact('paquetes', 'lista_p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::all();
        return view('packages.create',compact ('servicios'));
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
        
        $paquete =Paquete::create($request->all());
        
        foreach($request->servicio as $serv=>$id){
            $asignaserv = [
                $request->servicio[$serv],
            ];
            AgregaServicios::create([
                'paquete_id'=>$paquete->id,
                'servicio_id'=>$id,
            ]);
        }
        //dd($request->all());
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
