@extends('layouts.app')
@section('title')
  Paquetes|Crear
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading text-center">Crear Paquete</h3>
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

                    <form action="{{ route('packages.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class = "col-2"></div>
                            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                                <div class="form-group ">
                                   <label for="desc_pack">Nombre del paquete</label>
                                   <br></br>
                                   <input type="text" name="desc_pack" class="form-control">
                                   <br></br>
                                   <label for="costo_pack">Costo del paquete</label>
                                   <br></br>
                                   <input type="text" name="costo_pack" class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class = "col-2 text-center"></div>
                            <label for="servicios" class = "text-center">Seleccione los Servicios del Paquete</label>
                            <br></br>
                            @foreach ($servicios as $serv)
                            <div class = "col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id ="" name="servicio[]" value="{{$serv->id}}">
                                    <label class="form-check-label" for="servicios">
                                        {{ $serv->desc_serv }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                            <div class = "col-2"></div>
                            <div class = "col-4">
                                <br></br>
                                <button type="submit" class="btn btn-primary">Guardar</button> 
                            </div>
                            <div class = "col-2"></div>
                            <div class = "col-4">
                                <br></br>
                                <a class="btn btn-danger  card-link" href="{{url('packages')}}">Cancelar</a>
                            </div>
                        </div>
                    </div>    
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection