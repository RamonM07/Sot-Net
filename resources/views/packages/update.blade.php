@extends('layouts.app')
@section('title')
  Paquetes|Editar
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Paquete</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{route('packages.update', $paquete->id)}}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="desc_pack">Nombre del paquete</label>
                                   <input type="text" name="desc_pack" class="form-control" value="{{ $paquete->desc_pack }}">
                                   <label for="costo_pack">Costo del paquete</label>
                                   <input type="text" name="costo_pack" class="form-control" value="{{ $paquete->costo_pack }}">

                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection