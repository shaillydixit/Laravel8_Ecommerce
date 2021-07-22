@extends('admin.master')
@section('content')
<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="content">
    <div class="col-lg-8 mt-4">
        <div class="white-box">
            <h3 class="box-title">All SubSubCategory</h3>
            <div id="editable-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered" id="editable-datatable">

                            <thead>
                                <tr role="row">
                                    <th style="width: 25%;">Category Name</th>
                                    <th style="width: 25%;">SubCategory Name</th>
                                    <th style="width: 25%;">SubSubCategory Name</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subsubcategory as $row)

                                <tr id="7" class="gradeA odd" role="row">
                                    <td tabindex="1">{{$row['category']['category_name']}}</td>
                                    <td tabindex="1">{{$row['subcategory']['subcategory_name']}}</td>
                                    <td tabindex="1">{{$row->subsubcategory_name}}</td>
                                    <td tabindex="1">
                                        <a href="{{route('edit.subsubcategory', $row->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('delete.subsubcategory', $row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
            <h3 class="box-title">Add SubSubCategory</h3>
            <form method="post" action="{{route('store.subsubcategory')}}">
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
                    <h5>Select SubCategory <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="subcategory_id" class="form-control">
                            <option value="" selected="" disabled="">--select subcategory--</option>

                        </select>
                        @error('subcategory_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <h5>SubSubCategory Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="subsubcategory_name" class="form-control">
                    </div>
                    @error('subsubcategory_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-success mb-5" value="Add New SubSubCategory">
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category_id"]').on('change', function() {
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: "{{url('/category/subcategory/ajax')}}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
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
@endsection