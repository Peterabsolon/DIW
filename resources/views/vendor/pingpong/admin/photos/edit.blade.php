@extends($layout)

@section('content-header')
	<h1>
		Edit
		&middot;
		<small>{!! link_to_route('admin.photos.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::photos.form', array('model' => $photo))
	</div>

@stop
