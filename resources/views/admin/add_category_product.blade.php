@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ADD CATEGORY PRODUCT
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" required="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Description</label>
                            <textarea style="resize: none;" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Display</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Display</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Add</button onclick="return alert('Added successfully')">
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection