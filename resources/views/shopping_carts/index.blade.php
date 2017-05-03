@extends("layouts.app")
@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Tu Carrito De Compras</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Producto</td>
					<td>Precio</td>
					<td>Accion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td> {{$product->title}} </td>
						<td> {{$product->pricing}} </td>
						<td>
							@include("shopping_carts.delete",["product" => $product,"shopping_cart" =>$shopping_cart])
						</td>
					</tr>
				@endforeach
				<tr>
					<td>Total</td>
					<td> {{$total}} </td>
				</tr>
			</tbody>
		</table>
		<div class="text-right">
			@include("shopping_carts.form",["total" => $total])
		</div>
	</div>
@endsection