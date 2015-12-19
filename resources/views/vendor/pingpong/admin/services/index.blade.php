@extends($layout)

@section('content-header')
	<h1>
		All Services ({!! $services->count() !!})
	</h1>
@stop

@section('content')

	<table class="table">
		<thead>
			<th>No</th>
			<th>Title</th>
			<th>Sort Order</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($services as $service)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $service->title !!}</td>
				<td>{!! $service->sort_order !!}</td>
				<td>{!! $service->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.services.edit', $service->id) !!}">Edit</a>
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($services) !!}
	</div>
@stop
