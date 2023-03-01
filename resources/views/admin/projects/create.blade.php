@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 my-5">
			<h2>Aggiungi nuovo progetto</h2>
		</div>
		<div class="col-12">
			<form action="{{ route('admin.projects.store')}}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<label for="inputTitle" class="control-label mb-1">Titolo</label>
					<input type="text" id="inputTitle" class="form-control" placeholder="Titolo" name="title">
				</div>
				<div class="form-group">
					<label for="inputText" class="control-label mb-1">Descrizione</label>
					<textarea type="text" id="inputText" class="form-control" name="description"> </textarea>
				</div>
				<div class="form-group my-3">
					<button type="submit" class="btn btn-sm btn-success">Salva progetto</button>
				</div>

			</form>
		</div>
	</div>
</div>


@endsection