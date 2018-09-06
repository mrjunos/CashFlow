@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row mb-3">
				<div class="col">
					<button type="button" class="btn btn-info text-white">
						<i class="fas fa-angle-left text-white"></i>
						Sábado
					</button>
				</div>
				<div class="col text-right">
					<button type="button" class="btn btn-info text-white">
						Lunes
						<i class="fas fa-angle-right text-white"></i>
					</button>
				</div>
			</div>
			<div class="card">
				<div class="card-header text-white bg-primary">
					<div class="row">
						<div class="col-8 text-gray">
							Domingo 2 de Noviembre
						</div>
						<div class="col-4 text-right">
							<button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-plus text-primary"></i>
							</button>
						</div>
					</div>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item list-group-item-primary">
						Saldo al empezar el día
						<span class="float-right">$15.000</span>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-8 border-right">
								Venta
								<small class="text-muted">Ingresos</small>
							</div>
							<div class="col-4 text-right">
								<small class="text-success">$40.000</small>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-8 border-right">
								Uber
								<small class="text-muted">Transporte</small>
							</div>
							<div class="col-4 text-right">
								<small class="text-primary">$7.000</small>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-8 border-right">
								Almuerzo
								<small class="text-muted">Alimentación</small>
							</div>
							<div class="col-4 text-right">
								<small class="text-primary">$15.000</small>
								<a href=""><i class="far fa-times-circle text-danger"></i></a>
								<a href=""><i class="far fa-check-circle text-primary"></i></a>
							</div>
						</div>
					</li>
					<li class="list-group-item list-group-item-primary">
						Saldo al terminar el día
						<span class="float-right">$33.000</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form>
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
								<option>Transporte</option>
								<option>Alimentación</option>
								<option>Salud</option>
								<option>Diversión</option>
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
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary float-right">Crear</button>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection
