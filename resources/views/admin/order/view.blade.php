@extends('admin.layout.app')
@section('title','Product Management')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Order Detail
            <!-- <small>advanced tables</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Order Detail</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <br />
        <br />
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name : {{$order->product->title ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address : {{$order->address->address ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone : {{$order->address->phone ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post code : {{$order->address->postcode ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name : {{$order->product->title ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price : {{$order->price ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product qty : {{$order->qty ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Discount Rate : {{$order->discount_rate ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Discount Amount : {{$order->discount_amount ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total Amount : {{$order->final_amount ?? ''}}</label>
                            <label></label>
                            <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Title"> -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('scripts')
<script>
</script>
@endsection