@extends('layouts.app_auth')
@section('title')
  Servicios
@endsection

@section('content')
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Servicios</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://static.vecteezy.com/system/resources/previews/003/497/193/non_2x/internet-cyber-security-connection-concept-background-free-vector.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Internet 10 MB</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{asset('images/logo.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://static.vecteezy.com/system/resources/previews/003/497/193/non_2x/internet-cyber-security-connection-concept-background-free-vector.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Internet 20 MB</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{asset('images/logo.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-80 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://static.vecteezy.com/system/resources/previews/003/497/193/non_2x/internet-cyber-security-connection-concept-background-free-vector.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Internet 30 MB</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="{{asset('images/logo.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection