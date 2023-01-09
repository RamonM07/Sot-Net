@extends('layouts.app_auth')
@section('title')
  Solicitud
@endsection

@section('content')
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Solicita tu servicio</h2>
    </div>
      <div class="col-md-7 col-lg-12">
        <h4 class="mb-3">Ingresa tus datos</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ingresa el nombre" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="ap" class="form-label">Apellido paterno</label>
              <input type="text" class="form-control" id="ap"  name ="ap" placeholder="Ingresa el apellido paterno" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="am" class="form-label">Apellido materno</label>
              <input type="text" class="form-control" id="am" name ="am" placeholder="Ingresa el apellido materno" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-6">
              <label for="correo" class="form-label">Correo electrónico <span class="text-muted"></span></label>
              <input type="correo" class="form-control" id="email"  name ="correo" placeholder="nombre@gmail.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-6">
              <label for="correo" class="form-label">Telefono de casa <span class="text-muted"></span></label>
              <input type="correo" class="form-control" id="email"  name ="tel" placeholder="nombre@gmail.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-6">
              <label for="correo" class="form-label">Número de celular <span class="text-muted"></span></label>
              <input type="correo" class="form-control" id="email"  name ="cel" placeholder="nombre@gmail.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="direccion" class="form-label">Direccion<span class="text-muted">(Nombre de la calle)</span></label>
              <input type="text" class="form-control" id="direccion"  name ="direccion" placeholder="Ingrese su direccion" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Entre calle 1 <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2"   name ="entrecalle"placeholder="Ej. Esquina con Venustiano Carranza">
            </div>
            <div class="col-12">
              <label for="address2" class="form-label">Entre calle 2<span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2"  name ="entrecalles" placeholder="Ej. Esquina con Alvaro Obregon">
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Número interior</label>
              <input type="text" class="form-control" id="zip" name ="nint" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          <div class="col-md-3">
              <label for="zip" class="form-label">Número exterior</label>
              <input type="text" class="form-control" id="zip" name ="nex" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">
          <div class="col-12">
              <label for="direccion" class="form-label">Otra referencia<span class="text-muted"></span></label>
              <input type="text" class="form-control" id="direccion" name ="referencia" placeholder="Ej. Cerca de Tienda 'El girasol'" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <hr class="my-4">
          <div class="col-md-5">

              <label for="paquete_id" class="form-label">Paquete a contratar</label>
              <select class="form-select" id="paquete_id" name ="paquete_id" required>
                <option value="">BASICO</option>
                <option value="">INTERMEDIO</option>
                <option value="">DE NEGOCIO</option>
              </select>
             
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            

          <hr class="my-4">

          <button class="w-40 btn btn-primary btn-lg text-center" type="submit">Continuar</button>
          <a class="w-40 btn btn-danger btn-lg card-link text-center" href="{{url('/')}}">Cancelar</a>
        </form>
      </div>
    </div>
@endsection