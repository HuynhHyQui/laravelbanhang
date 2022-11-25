@extends('layout')
@section('content')

@foreach($product_details as $key => $value)
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" height="230" width="230"/>
            <!--<h3>ZOOM</h3>-->
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <!--<div class="carousel-inner">
                <div class="item active">
                    <a href=""><img src="{{URL::to('/public/frontend/images/similar1.jpg')}}" alt=""></a>
                    <a href=""><img src="{{URL::to('/public/frontend/images/similar2.jpg')}}" alt=""></a>
                    <a href=""><img src="{{URL::to('/public/frontend/images/similar3.jpg')}}" alt=""></a>
                </div>
            </div>-->

            <!-- Controls -->
            <!-- <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$value->product_name}}</h2>
            <img src="images/product-details/rating.png" alt="" />
            <form action="{{URL::to('/save-cart')}}" method="POST">
                {{ csrf_field() }}
            <span>
                <span style="color: red;">{{number_format($value->product_price).' VND'}}</span>
                <br>
                <label>Quantity:</label>
                <input name="qty" type="number" value="1" min="1"/>
                <input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>
                <button type="submit" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </button>
            </span>
            </form>
           <!-- <p><b>Availability:</b> In Stock</p>-->
            <p><b>Condition:</b> New 100%</p>
            <p><b>Brand:</b> {{$value->brand_name}}</p>
            <p><b>Category:</b> {{$value->category_name}}</p>
            <p>{!!$value->product_content!!}</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
</div>
<!--/product-details-->


@endforeach
<!--<div class="recommended_items">

    <h2 class="title text-center">recommended products</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @foreach($relate as $key => $lienquan)
                <a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('/public/uploads/product/'.$lienquan->product_image)}}" alt="" height="200" width="200"/>
                                <h2>{{number_format($lienquan->product_price).' VND'}}</h2>
                                <p>{{$lienquan->product_name}}</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>-->


@endsection