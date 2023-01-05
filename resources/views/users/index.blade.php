@extends('layouts.app')
@section('title')
  Usuarios
@endsection

@section('content')
    <section class="section">
        <div class="section-header text-center">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row text-center">
            <div class="col-1">

            </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                
                        <a class="btn btn-warning" href="{{ route('users.create') }}">Nuevo</a>
                        @can('crear-edicion')
                        
                        @endcan
            
                        <table class="table">
                                <thead style="table-secondary">                                     
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>   
                                    <th>Correo electrónico</th>                                 
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody class="table-group-divider">
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td >{{ $usuario->name }}</td>                                
                                <td>{{ $usuario->ap }}</td>
                                <td>{{ $usuario->am }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>

                                    <form action="{{ route('users.destroy', $usuario->id) }}" method="POST"> 
                                    <a class="btn btn-info" href="{{ route('users.edit', $usuario->id) }}">Editar</a>                                       
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
