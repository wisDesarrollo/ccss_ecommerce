{!!Form::open(['url' => '/products', 'method' => 'PUT']) !!}

		<div class="form-group">
			{{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'titulo'])}}
		</div>
		<div class="form-group">
			{{Form::number('pricing', '',['class' => 'form-control', 'placeholder' => 'Precio de tu producto'])}}
		</div>
		<div class="form-group">
			{{Form::textarea('descripcion', '',['class' => 'form-control', 'placeholder' => 'Escribe tu descripcion'])}}
		</div>
		<div class="form-group text-right">
			<a href="{{ url('/products') }}"> Regresar al listado de productos</a>
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>


		{!! Form::close()!!}