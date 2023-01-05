@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
            <div class="col-1">

            </div>
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

                    <form action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="desc_serv">Nombre del servicio</label>
                                   <input type="text" name="desc_serv" class="form-control">
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