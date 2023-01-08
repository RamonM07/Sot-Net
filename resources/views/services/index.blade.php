@extends('layouts.app')
@section('title')
  Servicios
@endsection

@section('content')
    <section class="section bg-white">
        <div class="section-header text-center">
            <h3 class="page__heading">Servicios</h3>
        </div>
        <div class="section-body">
            <div class="row text-center">
            <div class="col-1">

            </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                
                        <a class="btn btn-warning" href="{{ route('services.create') }}">Nuevo</a>
                        @can('crear-edicion')
                        
                        @endcan
            
                        <table class="table">
                                <thead style="table-secondary">                                     
                                    <th>Nombre Servicio</th>
                                    <th>Características</th>                                  
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody class="table-group-divider">
                            @foreach ($lista_c as $lista)
                            <tr>
                                <td >{{ $lista->desc_serv}}</td>
                                
                                <td >{{ $lista->desc_caracteristica}} <br></br></td>
                                <td>

                                    <form action="{{ route('services.destroy', $lista->id) }}" method="POST"> 
                                    <a class="btn btn-info" href="{{ route('services.edit', $lista->id) }}">Editar</a>                                       
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
