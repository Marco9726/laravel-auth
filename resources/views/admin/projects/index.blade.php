@extends('layouts.admin')

@section('content')

<div class="container p-4">
	@if(session('message')) 
		<div class="alert alert-success">
			{{ session('message') }}
		</div>
	@endif
	<div class="row flex-wrap gap-4 pt-3">
		<a href="{{ route('admin.projects.create')}}" class="btn btn-small btn-success">Aggiungi progetto</a>
		@foreach ($projects as $project)
			<div class="card my-card">
				<h4 class="card-title">{{$project->title}}</h4>
				<div class="card-text">{{$project->description}}</div>
			</div>
		@endforeach
	</div>
</div>

@endsection