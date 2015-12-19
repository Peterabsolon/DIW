@extends($layout)

@section('content-header')
	<h1>
		Edit
		&middot;
		<small>{!! link_to_route('admin.services.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::services.form', array('model' => $service))
	</div>

@stop
