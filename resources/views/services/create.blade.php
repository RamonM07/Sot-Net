@extends('layouts.app')
@section('title')
  Crear Servicio
@endsection
@section('content')
<body style="background-color:#ffbdca">
            <div class="row">
            <div class="col-3"></div>
                <div class="col-lg-6 bg-warning">
                    <div class="card">
                    <h1 class="card-title alert alert-success  text-center text-black text-bold">Crear servicio</h1>
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
                            <div class = "col-2 "></div>
                            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                                <div class="form-group">
                                   <label for="desc_serv">Nombre del servicio</label>
                                   <br></br>
                                   <input type="text" name="desc_serv" class="form-control">
                                   <br></br>
                                </div>
                            </div>
                            <div class = "col-2 text-center"></div>
                            <label for="caracteristicas" class = "text-center">Seleccione las Características del servicio</label>
                            <br></br>
                            @foreach ($caracteristicas as $lista_c)
                            <div class = "col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id ="" name="caracteristica[]" value="{{$lista_c->id}}">
                                    <label class="form-check-label" for="caracteristicas">
                                        {{ $lista_c->desc_caracteristica }}
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
                                <a class="btn btn-danger  card-link" href="{{url('services')}}">Cancelar</a>
                            </div>
                            </div>
                        </div>
                              
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
</body>
@endsection