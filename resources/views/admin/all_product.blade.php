@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            LIST OF PRODUCT
        </div>
        <div class="table-responsive">
            
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Display</th>
                        <th style="width:30px;">  Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_product as $key => $pro)
                    <tr>
                        <td>{{ $pro->product_name }}</td>
                        <td>{{ $pro->product_price }}</td>
                        <td><img src='public/uploads/product/{{ $pro->product_image }}' height="60" width="60"></td>
                        <td>{{ $pro->category_name }}</td>
                        <td>{{ $pro->brand_name }}</td>

                        <td><span class="text-ellipsis">
                                <?php
                                if ($pro->product_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up" 
                                    onclick="return alert('Unactivated successfully')"></span></a>;
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down" 
                                    onclick="return alert('activated successfully')"></span></a>;
                                <?php }
                                ?>
                            </span></td>
                        <td>
                            <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection