@extends('layouts/app')

@section('content')

<div class="container">
	<h2>Edit Product</h2>

	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$product->name}}">	
		</div>
		<div class="form-group">
			<label>Brand</label>
			<input type="text" name="brand" class="form-control" value="{{$product->brand}}">
		</div>
		<div class="form-group">
			<label>Model</label>
			<input type="text" name="model" class="form-control" value="{{$product->model}}">
		</div>
		<input type="submit" value="Update Product" class="btn btn-primary">
	</form>	
</div>

@endsection
