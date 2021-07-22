@extends('admin.master')
@section('content')
<br><br>

<section class="content">
    <div class="col-lg-8 mt-4">
        <div class="white-box">
            <h3 class="box-title">All Category</h3>
            <div id="editable-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered" id="editable-datatable">
                            <thead>
                                <tr role="row">
                                    <th style="width: 20%;">Category Icon</th>
                                    <th style="width: 40%;">Category Name</th>
                                    <th style="width: 40%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $row)
                                <tr id="7" class="gradeA odd" role="row">
                                    <td><span><i class="{{$row->category_icon}}"></i></span></td>
                                    <td tabindex="1">{{$row->category_name}}</td>
                                    <td tabindex="1">
                                        <a href="{{route('edit.category', $row->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('delete.category', $row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="white-box">
            <h3 class="box-title">Add Category</h3>
            <form method="post" action="{{route('store.category')}}">
                @csrf
                <div class="form-group">
                    <h5>Category Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="category_name" class="form-control">
                    </div>
                    @error('category_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <h5>Category Icon <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="category_icon" class="form-control">
                    </div>
                    @error('category_icon')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-success mb-5" value="Add New Category">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection