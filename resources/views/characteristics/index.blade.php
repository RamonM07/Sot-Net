@extends('layouts.app')
@section('title')
  Características
@endsection

@section('content')
    <section class="section">
        <div class="section-header text-center">
            <h3 class="page__heading">Características</h3>
        </div>
        <div class="section-body">
            <div class="row text-center">
            <div class="col-1">

            </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                
                        <a class="btn btn-warning" href="{{ route('characteristics.create') }}">Nuevo</a>
                        @can('crear-caracteristica')
                        
                        @endcan
            
                        <table class="table">
                                <thead style="table-secondary">                                     
                                    <th>Característica</th>                                   
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody class="table-group-divider">
                            @foreach ($caracteristicas as $caracteristica)
                            <tr>
                                <td >{{ $caracteristica->desc_caracteristica}}</td> 
                                <td>

                                    <form action="{{ route('characteristics.destroy', $caracteristica->id) }}" method="POST"> 
                                    <a class="btn btn-info" href="{{ route('characteristics.edit', $caracteristica->id) }}">Editar</a>                                       
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
