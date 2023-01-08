<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Asignacaracteristica;
use App\Models\Caracteristica;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        $lista_c = DB::table('asignacaracteristicas')
        ->join('caracteristicas', 'caracteristicas.id', '=', 'asignacaracteristicas.caracteristica_id')
        ->join('servicios', 'servicios.id', '=', 'asignacaracteristicas.servicio_id')
        ->select('servicios.desc_serv', 'servicios.id','caracteristicas.desc_caracteristica','asignacaracteristicas.servicio_id')
        ->groupBy('asignacaracteristicas.servicio_id','servicios.id','servicios.desc_serv', 'caracteristicas.desc_caracteristica')
        ->get();
        //dd($servicios, $lista_c);
        return view('services.index',compact('servicios', 'lista_c'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caracteristicas = Caracteristica::all();
        return view('services.create', compact ('caracteristicas'));
        //$caracteristicas = Caracteristica::pluck('desc_caracteristica','id');
        
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
            'desc_serv'=> 'required',
            //'caracteristica[]' => 'required',
        ]);
        $servicio=Servicio::create($request->all());
        foreach($request->caracteristica as $caract=>$id){
            $asignacaract = [
                $request->caracteristica[$caract],
            ];
            Asignacaracteristica::create([
                'servicio_id'=>$servicio->id,
                'caracteristica_id'=>$id,
            ]);
        }
        return redirect()->route('services.index');
        dd($request->all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
    public function destroy(Servicio $id)
    {
        $id->delete();
        return redirect()->route('services.index');
    }
}
