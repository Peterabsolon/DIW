@extends($layout)

@section('content-header')
	<h1>
		Add New
		&middot;
		<small>{!! link_to_route('admin.services.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::services.form')
	</div>

@stop
