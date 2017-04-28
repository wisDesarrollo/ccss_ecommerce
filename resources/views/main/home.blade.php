@extends('layouts.app')

@section('title', 'productos')

@section('content')
	<div class="container products-container text-center">
		@foreach($products as $product)
			@include("products.product",["product" => $product])
		@endforeach
	</div>
	<div>
    	{{$products->links()}}
	</div>
@endsection
