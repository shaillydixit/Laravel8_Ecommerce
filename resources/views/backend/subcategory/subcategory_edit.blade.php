@extends('admin.master')
@section('content')
<br><br>
<div class="container">
    <section class="content">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title">Edit SubCategory</h3>
                <form method="post" action="{{route('update.subcategory' , $subcategory->id)}}">
                    @csrf

                    <div class="form-group">
                        <h5>Category <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="category_id" class="form-control">
                                <option value="" selected="" disabled="">--select category--</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == $subcategory->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>SubCategory Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="subcategory_name" class="form-control" value="{{$subcategory->subcategory_name}}">
                        </div>

                        @error('subcategory_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-success mb-5" value="Update SubCategory">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection