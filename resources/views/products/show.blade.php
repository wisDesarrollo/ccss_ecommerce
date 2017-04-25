@extends('layouts.app')

@section('content')
	<div class="container text-center">
		
		<div class="card product text-left">
		<div class="text-right">
			<a href="{{url('/products/'. $product->id .'/edit')}}">
							Editar
			</a>
			@include('products.delete',['product' =>$product])
		</div>
			<h1>{{$product->title}}</h1>
			
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<p>
						<strong>Descripcción</strong>
					</p>
					<p>
						{{$product->description}}
					</p>
					<p>
						@include("in_shopping_carts.form", ["product" => $product])
					</p>
				</div>
					
			</div>
		</div>
	</div>
@endsection