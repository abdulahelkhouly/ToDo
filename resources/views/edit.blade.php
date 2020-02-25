@extends('layouts.app')

@section('title', 'Edit Test')

@section('content')

	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h1>Edit Test</h1>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							@csrf
							<div class="form-group">
								<input type="text" name="title" class="form-control"value="{{ $test->title }}"
								class="@error('title') is-invalid @enderror">
								@error('title')
								<div class="alert alert-danger">
									{{$message}}
								</div>
								@enderror
								<textarea name="description"  class="form-control" rows="3"
								class="@error('description') is-invalid @enderror">
								{{ $test->description }}</textarea>
								@error('description')
								<div class="alert alert-danger">
									{{$message}}
								</div>
								@enderror
							</div>
							<div class="form-group">
								<input type="submit" value="Update" class="btn btn-success btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection