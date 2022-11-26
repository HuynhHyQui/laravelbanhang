@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>

        <div class="shopper-informations">
            <div class="row">  
                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Reciever Information</p>
                        <div class="form-one">
                            <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="shipping_email" placeholder="Email *">
                                <input type="text" name="shipping_name" placeholder="Full Name *">
                                <input type="text" name="shipping_address" placeholder="Address *">
                                <input type="text" name="shipping_phone" placeholder="Phone *">
                                <textarea name="shipping_notes" placeholder="Notes about your order, Special Notes for Delivery" rows="10"></textarea>
                                <input type="submit" value="Checkout" name="send_order" class="btn btn-primary btn-sm">
                            </form>
                        </div>                   
                    </div>
                </div>           
            </div>
        </div>
    </div>
</section>

@endsection