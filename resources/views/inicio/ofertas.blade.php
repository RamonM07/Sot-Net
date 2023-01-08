@extends('layouts.app_auth')
@section('title')
  Ofertas
@endsection

@section('content')
<!-- Background image -->
<div
  class="bg-image"
  style="
    background-image: url('https://as01.epimg.net/meristation/imagenes/2019/10/23/noticias/1571821544_855139_1571821638_noticia_normal.jpg');
    height: 100vh;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal text-white">¡¡Disfruta de series y peliculas gratis!!</h1>
      <p class="lead fw-normal text-white">Si ya eres cliente llama a soporte técnico para que se te active el servicio.</p>
      <p class="text-white">Y si aún no eres cliente, aprovecha y solicita tu instalación desde $300 con 10 MB de velocidad
        y con el servicio de SERIES Y PELICULAS GRATIS activado.</p>
        <a class="btn btn-outline-warning" href="/home">Activar</a>
      
      </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  </div>
</div>
</div>
<!-- Background image -->

@endsection