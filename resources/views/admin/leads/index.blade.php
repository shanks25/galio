@extends('admin.layout.app')
@section('content')
@section('title', 'leads')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lead Management
      <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Leads</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <br />
    <br />
    <div class="row">
      <div class="col-xs-12">
       @include('message')
       <!-- /.box -->

       <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sr. No. </th>
                <th>Lead Genrate Date</th>
                <th>Seller name</th>
                <th>Contact No</th>
                <th>City</th>
                <th>state</th>
                <th>Leads Count</th>
                <th>leads staus</th> 
                <th>comments</th> 
                <th>action</th> 
              </tr>
            </thead>
            <tbody> 
              @foreach($users as $user) 
              <tr>
                <td>{{$loop->index +1}} </td>
                <td>{{$user->role ==1 ? 'Customer' : 'Vendor'}}</td>
                <td>{{$user->FullName}}</td>
                <td>{{$user->mobile_no}}</td>
                <td>{{$user->city->city ?? ''}} </td>
                <td>{{$user->state->name ?? ''}}</td>
                <td>{{$user->sell_orders_count ?? ''}}</td>
                <td>{{$user->lead_status ? "Pending" : ($user->lead_status ? "Converted" : 'Rejected')}}</td>
                <td></td>
                <td></td>

                


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