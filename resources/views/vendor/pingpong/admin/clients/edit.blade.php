@extends($layout)

@section('content-header')
	<h1>
		Edit
		&middot;
		<small>{!! link_to_route('admin.clients.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::clients.form', array('model' => $client))
	</div>

@stop
