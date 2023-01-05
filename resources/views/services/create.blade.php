@extends('layouts.app')
@section('title')
  Crear Servicio
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading text-center">Crear Servicio</h3>
        </div>
        <div class="section-body">
            <div class="row">
            <div class="col-3">

            </div>
                <div class="col-lg-6 bg-secondary">
                    <div class="card">
                        <div class="card-body bg-warning">     
                                                                      
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
                            <div class = "col-2"></div>
                            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                                <div class="form-group">
                                   <label for="desc_serv">Nombre del servicio</label>
                                   <br></br>
                                   <input type="text" name="desc_serv" class="form-control">
                                </div>
                                <br></br>
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