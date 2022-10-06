@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ADD BRAND PRODUCT
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Name</label>
                            <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand Description</label>
                            <textarea style="resize: none;" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Enter"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Display</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Display</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Add</button>
                    </form>
                </div>
                <?php
                $message = session()->get('message');
                if ($message) {
                    echo '<span class = "text-alert">' . $message . '</span>';
                    session()->put('message', null);
                }
                ?>
            </div>
        </section>

    </div>
</div>
@endsection