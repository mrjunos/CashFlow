@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header border-success">
					Domingo 2 de Noviembre
					<a href="#" class="float-right badge badge-pill badge-primary">+</a>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						Venta
						<small class="text-muted"> - Ingresos</small>
						<a href="#" class="float-right badge badge-pill badge-success">$40.000</a>
					</li>
					<li class="list-group-item">
						Uber
						<small class="text-muted"> - Transporte</small>
						<span class="badge badge-pill badge-info float-right text-white">$7.000</span>
					</li>
					<li class="list-group-item">
						Almuerzo
						<small class="text-muted"> - Alimentación</small>
						<span class="badge badge-pill badge-info float-right text-white">$15.000</span>
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
