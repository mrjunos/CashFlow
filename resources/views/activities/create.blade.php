@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<form>
				<div class="card">
					<div class="card-header alert-success">
						Nuevo Ingreso
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-6">
								<small class="form-text text-muted">Tipo</small>
								<select class="form-control form-control-sm" id="exampleFormControlSelect1">
									<option>Egreso</option>
									<option>Ingreso</option>
								</select>
							</div>
							<div class="form-group col-6">
								<small id="emailHelp" class="form-text text-muted">Categoría</small>
								<select class="form-control form-control-sm" id="exampleFormControlSelect1">
									@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<small id="emailHelp" class="form-text text-muted">Subcategoría</small>
							<select class="form-control form-control-sm" id="exampleFormControlSelect1">
								<option>Bus</option>
								<option>Metro / Cívica</option>
								<option>Taxi / Uber</option>
								<option>Otros transportes</option>
							</select>
						</div>
						<div class="form-row">
							<div class="form-group col-6">
								<small id="emailHelp" class="form-text text-muted">Fecha</small>
								<input type="date" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Fecha">
							</div>
							<div class="form-group col-6">
								<small id="emailHelp" class="form-text text-muted">Valor</small>
								<input type="number" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Valor">
							</div>
						</div>
						<div class="form-group">
							<small id="emailHelp" class="form-text text-muted">Comentario</small>
							<textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="2" placeholder="Comentario"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Guardar</button>

					</div>
					<div class="card-footer alert-success">
						<small class="text-muted">Last updated 3 mins ago</small>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@stop