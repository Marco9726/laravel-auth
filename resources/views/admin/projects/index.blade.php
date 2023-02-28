@extends('layouts.admin')

@section('content')

<div class="container p-4">
	<div class="row flex-wrap gap-4 pt-3">
		@foreach ($projects as $project)
			<div class="card">
				<h4 class="card-title">{{$project->title}}</h4>
				<div class="card-text">{{$project->description}}</div>
			</div>
		@endforeach
	</div>
</div>

@endsection