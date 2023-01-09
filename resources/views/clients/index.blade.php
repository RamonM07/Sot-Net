@extends('layouts.app')
@section('title')
  Clientes
@endsection
@section('content')
<section class="section">
        <div class="section-header text-center">
            <h3 class="page__heading">Clientes</h3>
        </div>
        <div class="section-body">
            <div class="row text-center">
            <div class="col-1">

            </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                
                        <a class="btn btn-warning" href="{{ route('clients.create') }}">Nuevo</a>
                        @can('crear-edicion')
                        
                        @endcan
            
                        <table class="table">
                                <thead style="table-secondary">                                     
                                    <th>Nombre Cliente</th>
                                    <th>Correo electrónico</th>
                                    <th>Telefono de contacto</th>
                                    <th>Celular de contacto</th>                                  
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody class="table-group-divider">
                            @foreach ($clientes as $cliente)
                            <tr>
                                <td >{{ $cliente->nombre }} {{ $cliente->ap }} {{ $cliente->am }}</td>                                
                                <td>{{ $cliente->correo}}</td>
                                <td>{{ $cliente->tel }}</td>
                                <td>{{ $cliente->cel }}</td>
                                <td>

                                    <form action="{{ route('clients.destroy', $cliente->id) }}" method="POST"> 
                                    <a class="btn btn-info" href="{{ route('clients.edit', $cliente->id) }}">Editar</a>                                       
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