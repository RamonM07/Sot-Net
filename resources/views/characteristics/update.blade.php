@extends ("layouts.app")
@section('title')
  Editar Característica
@endsection
@section("characteristics")
	active
@endsection

@section("content")
	<div class ="row">
		<div class="col-8 offset-2">
			<div class="card-body">
				<h5 class="card-title alert alert-success">Modificar Característica</h5>
				<form method="POST" action = "{{route('characteristics.update', ['caracteristica' => $caracteristica->id]) }}">
					@csrf
					@method ("PUT")
					<div class="mb-3">
						<label for="desc_caracteristica" class = "form-label">Descripción Característica</label>
						<input type="text" class="form-control" id="caracteristica" name= "desc_caracteristica" value="{{$caracteristica->desc_caracteristica}}">
					</div>
					<div class = "row">
						<div class = "col -6">
							<a href = "{{url('characteristics')}}" class = "btn btn-success card-link">Cancelar</a>
						</div>
						<div class = "col -6">
						<button type="submit" class="btn btn-primary">Guardar</button>
						</div>

					</div>
					
				</form>
			</div>
		</div>
	</div>

@endsection