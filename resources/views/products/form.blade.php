{!!Form::open(['url' => $url, 'method' => $method , 'files' => true]) !!}

<div class="form-group">
	{{Form::text('title', $product->title,['class' => 'form-control', 'placeholder' => 'titulo'])}}
</div>
<div class="form-group">
	{{Form::number('pricing', $product->pricing,['class' => 'form-control', 'placeholder' => 'Precio de tu producto'])}}
</div>
<div class="form-group">
	{{Form::file('cover')}}
</div>
<div class="form-group">
	{{Form::textarea('descripcion', $product->description,['class' => 'form-control', 'placeholder' => 'Escribe tu descripcion'])}}
</div>
<div class="form-group text-right">
	<a href="{{ url('/products') }}"> Regresar al listado de productos</a>
	<input type="submit" value="Enviar" class="btn btn-success">
</div>

{!! Form::close()!!}