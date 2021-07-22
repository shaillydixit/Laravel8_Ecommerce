@extends('admin.master')
@section('content')
<br><br>
<div class="container">
    <section class="content">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title">Edit Brand</h3>
                <form method="post" action="{{route('update.brand' , $brand->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{$brand->brand_image}}">

                    <div class="form-group">
                        <h5>Category <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="category_id" class="form-control">
                                <option value="" selected="" disabled="">--select category--</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == $brand->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Brand Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}">
                        </div>

                        @error('brand_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <h5>Brand Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="brand_image" class="form-control" onchange="mainImage(this)">
                        </div>
                        <img src="" id="mainImg">
                        @error('brand_image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-success mb-5" value="Update Brand">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    function mainImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainImg').attr('src', e.target.result).width(80).height(80);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection