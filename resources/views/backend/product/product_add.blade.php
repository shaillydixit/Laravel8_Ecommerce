@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading"> Add Product</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form method="POST" action="{{route('add.product')}}" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" name="product_name" id="product_name" class="form-control" required="">
                                        @error('product_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Code <span class="text-danger">*</span></label>
                                        <input type="text" name="product_code" id="product_code" class="form-control" required="">
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
                                            <select name="category_id" required="" class="selectpicker m-b-20 m-r-10 form-control" data-style="btn-info btn-outline">
                                                <option value="" selected="" disabled="">--select category--</option>
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select SubCategory <span class="text-danger">*</span></label>
                                            <select name="subcategory_id" required="" class="selectpicker m-b-20 m-r-10 form-control" data-style="btn-info btn-outline">
                                                <option value="" selected="" disabled="">--select subcategory--</option>
                                            </select>
                                            @error('subcategory_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select SubSubCategory <span class="text-danger">*</span></label>
                                            <select name="subsubcategory_id" required="" class="selectpicker m-b-20 m-r-10 form-control" data-style="btn-info btn-outline">
                                                <option value="" selected="" disabled="">--select subsubcategory--</option>
                                            </select>
                                            @error('subsubcategory_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Select Brand <span class="text-danger">*</span></label>
                                            <select name="brand_id" required="" class="selectpicker m-b-20 m-r-10 form-control" data-style="btn-info btn-outline">
                                                <option value="" selected="" disabled="">--select brand--</option>
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
                                        <input type="text" name="product_quantity" id="product_quantity" class="form-control" required="">
                                        @error('product_quantity')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Size <span class="text-danger">*</span></label>
                                        <input type="text" name="product_size" id="product_size" class="form-control" required="">

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
                                            <input type="text" data-role="tagsinput" name="product_tags" class="form-control" required="" value="jQuery,Script,Net">
                                        </div>
                                        @error('product_tags')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Color <span class="text-danger">*</span></label>
                                        <input type="text" name="product_color" id="product_color" class="form-control" required="">

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
                                        <input type="text" name="selling_price" id="selling_price" class="form-control" required="">

                                        @error('selling_price')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Discount Price</label>
                                        <input type="text" name="discount_price" id="discount_price" class="form-control">
                                        @error('discount_price')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="white-box">
                                            <label class="control-label">Product Thumbnail <span class="text-danger">*</span></label>
                                            <input type="file" class="dropify" data-max-file-size="2M" name="product_thumbnail" required="" />
                                            @error('product_thumbnail')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="white-box">
                                            <label class="control-label">Product Images <span class="text-danger">*</span></label>
                                            <input type="file" name="multi_image[]" id="multi_image" required="" multiple="" class="dropify" data-show-remove="false" />
                                            <div class="row" id="preview_img"></div>
                                            @error('multi_image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Short Description</label>
                                        <textarea id="editor1" name="short_description" rows="5" cols="80"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Long Description</label>
                                        <textarea id="editor2" name="long_description" rows="5" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2"> Hot Deals </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">Featured</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4"> Special Deals </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">Special Offer</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-actions">
                    <a href="" type="submit" class="btn btn-info" style="color: white;"><i class="fa fa-check"></i> Add Product</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection