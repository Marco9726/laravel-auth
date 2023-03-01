@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-10 my-5">
			<h2>Progetti</h2>
		</div>
		{{-- link alla view create per creare un nuovo progetto  --}}
		<div class="col-2 my-5">
			<a href="{{ route('admin.projects.create')}}" class="btn btn-small btn-success">Aggiungi progetto</a>
		</div>
		{{-- //visualizza messaggio di conferma in caso venga aggiunto correttamente un nuovo progetto --}}
		@if(session('message')) 
			<div class="alert alert-success">
				{{ session('message') }}
			</div>
		@endif
		{{-- --}}
		<div class="col-12">
			<table class="table table-striped">
				<thead>
					<th>Id</th>
					<th>Titolo</th>
					<th>Slug</th>
					<th>Azioni</th>
				</thead>
				<tbody>
					@foreach ($projects as $project)
					<tr>
						<td>{{ $project->id }}</td>
						<td>{{ $project->title }}</td>
						<td>{{ $project->slug }}</td>
						<td>
							{{-- link alla view show per visualizzare il progetto --}}
							<a href="{{ route('admin.projects.show' , $project->slug )}}">
								<i class="fas fa-eye"></i>
							</a>
						</td>
					</tr>
					@endforeach
	
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
