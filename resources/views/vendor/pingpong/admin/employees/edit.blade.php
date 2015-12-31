@extends($layout)

@section('content-header')
	<h1>
		Edit
		&middot;
		<small>{!! link_to_route('admin.employees.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::employees.form', array('model' => $employee))
	</div>

@stop
