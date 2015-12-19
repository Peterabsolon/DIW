@extends($layout)

@section('content-header')
	<h1>
		All Clients ({!! $clients->count() !!})
		&middot;
		<small>{!! link_to_route('admin.clients.create', 'Add New') !!}</small>
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
			@foreach ($clients as $client)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $client->title !!}</td>
				<td>{!! $client->sort_order !!}</td>
				<td>{!! $client->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.clients.edit', $client->id) !!}">Edit</a>
					&middot;
					@include('admin::partials.modal', ['data' => $client, 'name' => 'clients'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($clients) !!}
	</div>
@stop
