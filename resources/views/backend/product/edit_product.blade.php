@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading"> Edit Product</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form method="POST" action="{{route('update.product', $products->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" name="product_name" id="product_name" class="form-control" required="" value="{{$products->product_name}}">
                                        @error('product_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Code <span class="text-danger">*</span></label>
                                        <input type="text" name="product_code" id="product_code" class="form-control" required="" value="{{$products->product_code}}">
                                        @error('product_code')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select Category <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control" required="">
                                                <option value="" selected="" disabled="">--select category--</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id == $products->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select SubCategory <span class="text-danger">*</span></label>
                                            <select name="subcategory_id" class="form-control" required="">
                                                <option value="" selected="" disabled="">--select subcategory--</option>
                                                @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}" {{$subcategory->id == $products->subcategory_id ? 'selected' : ''}}>{{$subcategory->subcategory_name}}</option>
                                                @endforeach

                                            </select>
                                            @error('subcategory_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select SubSubCategory <span class="text-danger">*</span></label>
                                            <select name="subsubcategory_id" class="form-control" required="">
                                                <option value="" selected="" disabled="">--select subsubcategory--</option>
                                                @foreach($subsubcategories as $subsubcategory)
                                                <option value="{{$subsubcategory->id}}" {{$subsubcategory->id == $products->subsubcategory_id ? 'selected' : ''}}>{{$subsubcategory->subsubcategory_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('subsubcategory_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select Brand <span class="text-danger">*</span></label>
                                            <select name="brand_id" class="form-control" required="">
                                                <option value="" selected="" disabled="">--select brand--</option>
                                                @foreach($brands as $row)
                                                <option value="{{$row->id}}" {{$row->id == $products->brand_id ? 'selected' : ''}}>{{$row->brand_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Quantity <span class="text-danger">*</span></label>
                                        <input type="text" name="product_quantity" id="product_quantity" class="form-control" required="" value="{{$products->product_quantity}}">
                                        @error('product_quantity')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Size <span class="text-danger">*</span></label>
                                        <input type="text" name="product_size" id="product_size" class="form-control" required="" value="{{$products->product_size}}">

                                        @error('product_size')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Tags <span class="text-danger">*</span></label>
                                        <div class="tags-default">
                                            <input type="text" data-role="tagsinput" name="product_tags" class="form-control" required="" value=" {{$products->product_tags}}">
                                        </div>
                                        @error('product_tags')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Color <span class="text-danger">*</span></label>
                                        <input type="text" name="product_color" id="product_color" class="form-control" required="" value="{{$products->product_color}}">

                                        @error('product_color')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Selling Price <span class="text-danger">*</span></label>
                                        <input type="text" name="selling_price" id="selling_price" class="form-control" required="" value="{{$products->selling_price}}">

                                        @error('selling_price')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Discount Price</label>
                                        <input type="text" name="discount_price" id="discount_price" class="form-control" value="{{$products->discount_price}}">
                                        @error('discount_price')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Short Description</label>
                                        <textarea id="editor1" name="short_description" rows="5" cols="80">
                                        {!!$products->short_description!!}
                                        </textarea>
                                        @error('short_description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Long Description</label>
                                        <textarea id="editor2" name="long_description" rows="5" cols="80">
                                        {!!$products->long_description!!}
                                        </textarea>
                                        @error('long_description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" name="hot_deals" value="1" {{$products->hot_deals == 1 ? 'checked' : ''}}>
                                            <label for="checkbox2"> Hot Deals </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox" name="featured" value="1" {{$products->featured == 1 ? 'checked' : ''}}>
                                            <label for="checkbox3">Featured</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox" name="special_deals" value="1" {{$products->special_deals == 1 ? 'checked' : ''}}>
                                            <label for="checkbox4"> Special Deals </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" name="special_offer" value="1" {{$products->special_offer == 1 ? 'checked' : ''}}>
                                            <label for="checkbox5">Special Offer</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update Product">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category_id"]').on('change', function() {
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: "{{url('/category/subcategory/ajax')}}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var d = $('select[name="subsubcategory_id"]').empty();
                        var d = $('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subcategory_id"]').append('<option value ="' + value.id + '">' +
                                value.subcategory_name + '</option>')
                        });
                    }
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="subcategory_id"]').on('change', function() {
            var subcategory_id = $(this).val();
            if (subcategory_id) {
                $.ajax({
                    url: "{{url('/category/subsubcategory/ajax')}}/" + subcategory_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var d = $('select[name="subsubcategory_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subsubcategory_id"]').append('<option value ="' + value.id + '">' +
                                value.subsubcategory_name + '</option>')
                        });
                    }
                });
            } else {
                alert('danger');
            }
        });
    });
</script> -->




@endsection