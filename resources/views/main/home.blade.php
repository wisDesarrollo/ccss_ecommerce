@extends('layouts.app3')

@section('title', 'productos')

@section('content')
	<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Insumos Médicos</a>
                    <a href="#" class="list-group-item">Instrumental Qúirúrgico</a>
                    <a href="#" class="list-group-item">Ayudas Ortopédicas</a>
                    <a href="#" class="list-group-item">Terapia Respiratoria</a>
                    <a href="#" class="list-group-item">Productos Salud y Belleza</a>

                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="{{url('/products/images/wis2.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{url('/products/images/img2.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{url('/products/images/wis2.jpg')}}" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">
                	@foreach($products as $product)
                		@include("products.products",["product" => $product])
                	@endforeach
                </div>
                <div class="text-center">
			    	{{$products->links()}}
				</div>

			</div>

        </div>

    </div>

    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
@endsection
