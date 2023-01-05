@extends('layouts.app')
@section('title')
  Paquetes
@endsection

@section('content')
    <section class="section">
        <div class="section-header text-center">
            <h3 class="page__heading">Paquetes</h3>
        </div>
        <div class="section-body">
            <div class="row text-center">
            <div class="col-1">

            </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                
                        <a class="btn btn-warning" href="{{ route('packages.create') }}">Nuevo</a>
                        @can('crear-edicion')
                        
                        @endcan
            
                        <table class="table">
                                <thead style="table-secondary">                                     
                                    <th>Nombre Paquete</th>
                                    <th>Costo</th>                                    
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody class="table-group-divider">
                            @foreach ($paquetes as $paquete)
                            <tr>
                                <td >{{ $paquete->desc_pack }}</td>                                
                                <td>{{ $paquete->costo_pack }}</td>
                                <td>

                                    <form action="{{ route('packages.destroy', $paquete->id) }}" method="POST"> 
                                    <a class="btn btn-info" href="{{ route('packages.edit', $paquete->id) }}">Editar</a>                                       
                                        <!-- @can('editar-edicione')-->
                                        
                                       <!-- @endcan)-->

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        <!--@can('borrar-edicione'))-->
                                        
                                        <!--@endcan)-->
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
