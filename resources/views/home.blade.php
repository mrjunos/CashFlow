@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header text-white bg-primary">
					<div class="row">
						<div class="col-8 text-gray">
							Domingo 2 de Noviembre
						</div>
						<div class="col-4 text-right">
							<i class="far fa-plus-square text-white"></i>
						</div>
					</div>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						<div class="row">
							<div class="col-8">
								Venta
								<small class="text-muted"> - Ingresos</small>
							</div>
							<div class="col-4 text-right">
								<span class="badge badge-pill badge-success">$40000.000</span>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-8">
								Uber
								<small class="text-muted"> - Transporte</small>
							</div>
							<div class="col-4 text-right">
								<span class="badge badge-pill badge-info text-white">$7.000</span>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-8">
							Almuerzo
							<small class="text-muted"> - Alimentación</small>
							</div>
							<div class="col-4 text-right">
								<span class="badge badge-pill badge-info text-white">$1'555.000</span>
								<i class="far fa-times-circle text-danger"></i>
								<i class="far fa-check-circle text-primary"></i>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="card mt-3">
				<div class="card-header alert-success">
					Saldo al empezar el día
					<span class="float-right">$15.000</span>
				</div>
				<div class="card-header alert-success">
					Saldo al terminar el día
						<span class="float-right">$23.000</span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
