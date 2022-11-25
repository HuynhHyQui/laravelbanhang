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
        <!--/breadcrums-->
        <!--/register-req-->

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
        <!--<div class="review-payment">
            <h2>Review & Payment</h2>
        </div>        
        <div class="payment-options">
            <span>
                <label><input type="checkbox"> Direct Bank Transfer</label>
            </span>
            <span>
                <label><input type="checkbox"> Check Payment</label>
            </span>
            <span>
                <label><input type="checkbox"> Paypal</label>
            </span>
        </div>-->
    </div>
</section>
<!--/#cart_items-->

@endsection