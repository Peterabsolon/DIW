@extends('admin::layouts.master')

@section('content-header')
	<h1>
		All Projects ({!! $projects->count() !!})
		&middot;
		<small></small>
	</h1>
@endsection

@section('content')

   <table class="table">
   	<thead>
   		<th>No</th>
   		<th>Name</th>
   		<th>Created At</th>
   		<th class="text-center">Action</th>
   	</thead>
   	<tbody>
   		@foreach ($projects as $project)
   		<tr>
   			<td>{!! $no !!}</td>
   			<td>{!! $project->name !!}</td>
   			<td>{!! $project->created_at !!}</td>
   			
   		</tr>
   		@endforeach
   	</tbody>
   </table>

@endsection