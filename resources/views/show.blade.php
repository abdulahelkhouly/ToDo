@extends('layouts.app')

@section('title', 'Test')

@section('content')
	<div class="container">
		<h1 class="text-center mt-5">
			{{ $results-> title }}
		</h1>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<span>Detils</span>
						<span class="badge badge-warning float-right">
							Status
						</span>
						<a class="badge badge-primary float-right mr-2" href="../index">
							Back
						</a>
					</div>
					<div class="card-body">
						{{ $results->description }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection