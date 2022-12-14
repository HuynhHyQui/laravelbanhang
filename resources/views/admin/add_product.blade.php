@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ADD PRODUCT
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" data-validation="length" data-validation-length="min3"  name="product_name" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Description</label>
                            <textarea style="resize: none;" rows="4" class="form-control" name="product_desc" id="ckeditor1" required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Content</label>
                            <textarea style="resize: none;" rows="4" class="form-control" name="product_content" id="ckeditor2" required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" data-validation="number" name="product_price" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Category Product</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Brand Product</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand)
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Display</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Display</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Add</button onclick="return alert('Added successfully')">
                    </form>
                </div>
                
            </div>
        </section>

    </div>
</div>
@endsection