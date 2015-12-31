@extends($layout)

@section('content-header')
	<h1>
		All Members ({!! $employees->count() !!})
		&middot;
		<small>{!! link_to_route('admin.employees.create', 'Add New') !!}</small>
	</h1>
@stop

@section('content')

	<table class="table">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Role</th>
			<th>Sort Order</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($employees as $employee)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $employee->name !!}</td>
				<td>{!! $employee->role !!}</td>
				<td>{!! $employee->sort_order !!}</td>
				<td>{!! $employee->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.employees.edit', $employee->id) !!}">Edit</a>
					&middot;
					@include('admin::partials.modal', ['data' => $employee, 'name' => 'employees'])					
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($employees) !!}
	</div>
@stop
