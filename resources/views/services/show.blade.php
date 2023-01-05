@extends('layouts.app_auth')
@section('title')
  Ver Servicios
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Servicio</h3>
        </div>
        <div class="section-body">
            <div class="row">
            <div class="col-1">

            </div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                            <div class="col">
                                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                    <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small>Earth</small>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                        <small>3d</small>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection