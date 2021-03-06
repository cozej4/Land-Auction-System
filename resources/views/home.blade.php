@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
			<div class="page-header">
				<h1>Dashboard</h1>
			</div>
			<div class="well">
				<div class="">
					...
					{{-- Some quick tips for an admin --}}
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Viwanja <a href={{ url('plots/new') }}><span class="pull-right"><i class="fa fa-plus"></i></span></a></div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<th>Namba ya Kiwanja</th>
							<th>Eneo</th>
							<th>Aina ya Eneo</th>
							<th>Ukubwa (Mita za Mraba)</th>
							<th>Gharama (TZS)</th>
						</tr>
						@foreach ($plots as $plot)
							<tr>
								<td><a href={{ url('/plots/' . $plot->id) }}>{{ $plot->plot_no }}</a></td>
								<td><a href="#">{{ $plot->area_id }}</a></td>
								<td><a href="#">{{ $plot->area_type_id }}</a></td>
								<td>({{ ($plot->size/2) . ' x ' . ($plot->size/2) }})</td>
								<td>{{ $plot->price }}</td>
							</tr>
						@endforeach

					</table>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection
