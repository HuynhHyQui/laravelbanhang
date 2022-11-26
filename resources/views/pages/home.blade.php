@extends('layout')
@section('content')

<div class="features_items">
    <h2 class="title text-center" style="color: black;">NEW PRODUCT</h2>
    @foreach($all_product as $key => $product)
    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" height="230" width="230" />
                        <p style="font-size: 15px;">{{$product->product_name}}</p>
                        <h2 style="color: red;">{{number_format($product->product_price).' VND'}}</h2>
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
<ul class="pagination pagination-sm m-t-none m-b-none">
    {!!$all_product->links()!!}
</ul>
@endsection