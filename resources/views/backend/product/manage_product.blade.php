@extends('admin.master')
@section('content')
<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="content">
    <div class="col-lg-12 mt-4">
        <div class="white-box">
            <h3 class="box-title">All Product Details</h3>
            <div id="editable-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered" id="editable-datatable">

                            <thead>
                                <tr role="row">
                                    <th style="width: 20%;">Product Name</th>
                                    <th style="width: 15%;">Product Quantity</th>
                                    <th style="width: 15%;">Product Selling Price</th>
                                    <th style="width: 15%;">Product Discount Price</th>
                                    <th style="width: 15%;">Product Thumbnail</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $row)
                                <tr id="7" class="gradeA odd" role="row">
                                    <td tabindex="1">{{$row->product_name}}</td>
                                    <td tabindex="1">{{$row->product_quantity}}</td>
                                    <td tabindex="1">{{$row->selling_price}}</td>
                                    <td tabindex="1">{{$row->discount_price}}</td>
                                    <td tabindex="1"><img src="{{asset($row->product_thumbnail)}}" width="60px" height="50px"></td>
                                    <td tabindex="1">
                                        <a href="{{route('edit.product', $row->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('delete.product', $row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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

</section>

@endsection