@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row mb-3">
				<div class="col">
					<a href="{{url('/home/'.$date->subDays(1)->format('Y-m-d'))}}" class="btn btn-info text-white">
						<i class="fas fa-angle-left text-white"></i>
						{{$date->format('l')}}
					</a>
				</div>
				<div class="col text-right">
					<a href="{{url('/home/'.$date->addDays(2)->format('Y-m-d'))}}" class="btn btn-info text-white">
						{{$date->format('l')}}
						<i class="fas fa-angle-right text-white"></i>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header text-white bg-primary">
					<div class="row">
						<div class="col-8 text-gray">
							{{$date->subDays(1)->format('l d \\d\\e F')}}
						</div>
						<div class="col-4 text-right">
							<a href="{{ route('activities.create') }}" class="btn btn-sm btn-light">
								<i class="fas fa-plus text-primary"></i>
							</a>
						</div>
					</div>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item list-group-item-{{$saldoIni<0?'danger':'primary'}}">
						Saldo al empezar el día
						<span class="float-right">@currency($saldoIni)</span>
					</li>

					@foreach($activities as $activity)
					<li class="list-group-item">
						<div class="row">
							<div class="col-8 border-right">
								{{$activity->subCategory->name}}
								<small class="text-muted">{{$activity->subCategory->category->name}}</small>
							</div>
							<div class="col-4 text-right">
								<small class="text-{{$activity->type == 1 ? 'primary' : 'success'}}">@currency($activity->value)</small>
								@if($activity->state == 'X')
								<a href=""><i class="far fa-times-circle text-danger"></i></a>
								<a href=""><i class="far fa-check-circle text-primary"></i></a>
								@endif
							</div>
						</div>
					</li>
					@endforeach
					
					<li class="list-group-item list-group-item-{{$saldoFin<0?'danger':'success'}}">
						Saldo al terminar el día
						<span class="float-right">@currency($saldoFin)</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection