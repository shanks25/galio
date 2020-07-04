@extends('admin.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Category
            <!-- <small>advanced tables</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
            <li><a href="#">Add Category</a></li>
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
                        <!-- <h3 class="box-title">Add Plan</h3> -->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="add_form" name="add_form" action="{{route('admin-category-create')}}" method="post" role="form">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
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
        $("form[name='add_form']").validate({
            ignore: [],
            rules: {
                "name": "required",
            },
            messages: {
                // "title": "Field is Required",
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    $('.page_category').addClass('active');
    $('.page_master').addClass('active');
</script>
@endsection