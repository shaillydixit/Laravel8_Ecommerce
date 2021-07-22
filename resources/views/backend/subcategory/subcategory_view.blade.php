@extends('admin.master')
@section('content')
<br><br>

<section class="content">
    <div class="col-lg-8 mt-4">
        <div class="white-box">
            <h3 class="box-title">All SubCategory</h3>
            <div id="editable-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered" id="editable-datatable">

                            <thead>
                                <tr role="row">
                                    <th style="width: 25%;">Category Id</th>
                                    <th style="width: 25%;">SubCategory Name</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subcategory as $row)
                                <tr id="7" class="gradeA odd" role="row">
                                    <td tabindex="1">{{$row['category']['category_name']}}</td>
                                    <td tabindex="1">{{$row->subcategory_name}}</td>
                                    <td tabindex="1">
                                        <a href="{{route('edit.subcategory', $row->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('delete.subcategory', $row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
            <h3 class="box-title">Add SubCategory</h3>
            <form method="post" action="{{route('store.subcategory')}}">
                @csrf

                <div class="form-group">
                    <h5>Select Category <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="category_id" class="form-control">
                            <option value="" selected="" disabled="">--select category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
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
                        <input type="text" name="subcategory_name" class="form-control">
                    </div>
                    @error('subcategory_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-success mb-5" value="Add New SubCategory">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection