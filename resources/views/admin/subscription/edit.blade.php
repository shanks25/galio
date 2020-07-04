@extends('admin.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Subscription Plan
            <!-- <small>advanced tables</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Subscription Plan</a></li>
        </ol>
    </section>
    @include('admin.includes.form-error')
    @include('admin.includes.form-success')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Plan</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="subscription_form" name="subscription_form" action="{{route('admin-subscription-update',$subscription->id)}}" method="post" role="form">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$subscription->title ?? ''}}" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control number-only" id="price" name="price" placeholder="Price" value="{{$subscription->price ?? ''}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Days</label>
                                <input type="text" class="form-control number-only" id="days" name="days" placeholder="Ex 30" value="{{$subscription->days ?? ''}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <!-- <input type="text" class="form-control" id="days" name="days" placeholder="Title"> -->
                                <textarea class="form-control" id="desc" name="desc">{{$subscription->detail ?? ''}}</textarea>
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    });
    $(function() {
        $("form[name='subscription_form']").validate({
            ignore: [],
            rules: {
                "title": "required",
                "price": "required",
                "days": "required",
                "desc": "required",
            },
            messages: {
                // "title": "Field is Required",
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection