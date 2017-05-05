{!!Form::open(['url' => $url, 'method' => $method , 'files' => true]) !!}

<div class="form-group">
	{{Form::text('title', $product->title,['class' => 'form-control', 'placeholder' => 'titulo'])}}
</div>
<div class="form-group">
	{{Form::number('pricing', $product->pricing,['class' => 'form-control', 'placeholder' => 'Precio de tu producto', 'required' => 'require'])}}
</div>
<div class="form-group">
	{{Form::select('product_type', [ '0' => 'Insumos Médicos', '1' => 'Instrumental Quiúrgico', 
	'2' => 'Ayudas Ortopédicas', '3' => 'Terapia Respiratoria', '4' => 'Productos Salud y Belleza'], null, ['class' => 'form-control', 'placeholder' => 'Elige el tipo del producto'])}}
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