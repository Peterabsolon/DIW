@extends($layout)

@section('content-header')
	<h1>
		Add New
		&middot;
		<small>{!! link_to_route('admin.photos.index', 'Back') !!}</small>
	</h1>
@stop

@section('content')

	<div>
		@include('admin::photos.form')
	</div>

@stop
