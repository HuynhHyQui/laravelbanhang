@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
                <li class="active">My Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info" style="width: 80%;">
            <?php
            $content = Cart::content();
            ?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Description</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="65" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                            <br>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' VND'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{ csrf_field() }}
                                <input class="cart_quantity_input" type="number" style="width: 50px;" name="cart_quantity" value="{{$v_content->qty}}" autocomplete="off" size="2">
                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="btn btn-default btn-sm">
                                <input type="submit" value="Update" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price" style="color: red;">
                                <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . ' ' . 'VND';
                                ?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>{{Cart::priceTotal(0).' '.'VND'}}</span></li>
                        <li>Eco Tax <span>{{Cart::tax(0).' '.'VND'}}</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>{{Cart::total(0).' '.'VND'}}</span></li> 
                    </ul>
                    {{-- <a class="btn btn-default update" href="">Update</a> --}}
                    <?php
                    $customer_id = session()->get('customer_id');
                    if ($customer_id != NULL) {
                    ?>
                        <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Checkout</a>
                    <?php
                    } else {
                    ?>
                        <a class="btn btn-default check_out" href="{{URL::to('/login')}}">Checkout</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection