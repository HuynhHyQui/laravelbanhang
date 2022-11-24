@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            LIST OF BRAND PRODUCT
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Brand Name</th>
                        <th>Display</th>
                        <th style="width:30px;">  Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_brand_product as $key => $brand_pro)
                    <tr>
                        <td>{{ $brand_pro->brand_name }}</td>
                        <td><span class="text-ellipsis">
                                <?php
                                if ($brand_pro->brand_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"
                                    onclick="return alert('Unactivated successfully')"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>;
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"
                                    onclick="return alert('Activated successfully')"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>;
                                <?php }
                                ?>
                            </span></td>
                        <td>
                            <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
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