@extends('admin.layout.app')
@section('title','Product Management')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Orders
            <!-- <small>advanced tables</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Order</a></li>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No. </th>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Customer Name</th>
                                    <th>Price</th>
                                    <th>Discount Rate</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_order as $key => $detail)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$detail->product->title ?? ''}}</td>
                                    <td>{{$detail->qty ?? ''}}</td>
                                    <td>{{$detail->user->full_name ?? ''}}</td>
                                    <td>{{$detail->price ?? ''}}</td>
                                    <td>{{$detail->discount_rate ?? ''}}</td>
                                    <td>{{$detail->final_amount ?? ''}}</td>
                                    <td>
                                        <a href="{{route('admin-order-view',$detail->id)}}" class="btn"><i class="fa fa-eye"></i></a>
                                    </td>
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
    });
    $('.order').addClass('active');
</script>
@endsection