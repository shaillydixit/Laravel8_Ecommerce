@extends('admin.master')
@section('content')
<br><br>
<div class="container">
    <section class="content">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title">Add Category</h3>
                <form method="post" action="{{route('update.category', $category->id)}}">
                    @csrf
                    <div class="form-group">
                        <h5>Category Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <h5>Category Icon <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="category_icon" class="form-control" value="{{$category->category_icon}}">
                        </div>
                    </div>

                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-success mb-5" value="Update Category">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection