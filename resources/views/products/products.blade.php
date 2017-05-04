<div class="col-sm-4 col-lg-4 col-md-4 products">
    <div class="thumbnail">
        @if($product->extension)
            <img src="{{url("products/images/$product->id.$product->extension")}}" class="product-avatar">
        @endif
        <div class="caption">
            <h4 class="pull-right">{{$product->pricing}}</h4>
            <h4><a href="{{url('/products/'.$product->id)}}">{{$product->title}}</a>
            </h4>
            <p>{{$product->description}}<a target="_blank" ></a>.</p>
            <p>
                @include("in_shopping_carts.form", ["product" => $product])
            </p>
        </div>
        <div class="ratings">
            <p class="pull-right">{{$product->id}}</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>

        </div>
    </div>
</div>