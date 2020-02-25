@extends('layouts.app')

@section('title', 'Create New Test')

@section('content')

	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h1>Create New Test</h1>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							@csrf
							<div class="form-group">
								<input type="text" name="title" class="form-control" placeholder="Enter Title"
								class="@error('title') is-invalid @enderror">
								@error('title')
								<div class="alert alert-danger">
									{{$message}}
								</div>
								@enderror
								<textarea name="description" placeholder="Enter Your Description" class="form-control" rows="3"
								class="@error('description') is-invalid @enderror">Enter Your Description
								</textarea>
								@error('description')
								<div class="alert alert-danger">
									{{$message}}
								</div>
								@enderror
							</div>
							<div class="form-group">
								<input type="submit" value="Create" class="btn btn-success " style="width: 50%">
								<a href="index" class="btn btn-danger" style="width: 40%">Back</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection