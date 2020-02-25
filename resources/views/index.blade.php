@extends('layouts.app')

@section('title', 'All Test')

@section('content')
	<div class="container">
		<div class="row pt-3 justify-content-center">
			<div class="card" style="width: 80%">
				<div class="card-header text-center">
					<h1>All Tests</h1>
					<div>
						<a href="create" class="btn btn-success">Crate New Test</a>
					</div>
				</div>
				@if (session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
				@endif	
				<div class="card-body">
					<ul class="list-group">
						@foreach($results as $result)
						<li class="list-group-item">
							{{ $result->title }}
							<span class="float-right">
								<a href="index/{{$result->id}}">
								View</a>
							</span>
							<span class="float-right mr-2">
								<a href="index/{{$result->id}}/edit">
								Edit</a>
							</span>
							<span class="float-right mr-2">
								<a href="index/{{$result->id}}/delete">
								Delete</a>
							</span>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>

@endsection