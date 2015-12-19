@extends($layout)

@section('content-header')
	<h1>
		All Photos ({!! $photos->count() !!})
		&middot;
		<small>{!! link_to_route('admin.photos.create', 'Add New') !!}</small>
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
			@foreach ($photos as $photo)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $photo->title !!}</td>
				<td>{!! $photo->sort_order !!}</td>
				<td>{!! $photo->created_at !!}</td>
				<td class="text-center">
					@if(isOnPages())
						<a href="{!! route('admin.pages.edit', $photo->id) !!}">Edit</a>
						&middot;
						@include('admin::partials.modal', ['data' => $photo, 'name' => 'pages'])
					@else
						<a href="{!! route('admin.photos.edit', $photo->id) !!}">Edit</a>
						&middot;
						@include('admin::partials.modal', ['data' => $photo, 'name' => 'photos'])
					@endif
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($photos) !!}
	</div>
@stop
