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

    <!-- Main content -->
    <section class="content">
        <a href="{{route('admin-subscription-create')}}">
            <button type="button" class="pull-right btn btn-info">+ Add Plan</button>
        </a>
        <br />
        <br />
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No. </th>
                                    <th>Title</th>
                                    <th>Days</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscription as $key => $detail)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$detail->title}}</td>
                                    <td>{{$detail->days}}</td>
                                    <td>{{$detail->price}}</td>
                                    <td>{{$detail->status==1 ? 'Active' : Inactive }}</td>
                                    <td> </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
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
    })
</script>
@endsection