@extends('admin.layout.app')
@section('content')
@section('title', 'Users')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Management
      <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">User</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a href="{{route('admin.customer.create')}}">
      <button type="button" class="pull-right btn btn-info">+ Add user</button>
    </a>
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
                  <th>User Type</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>pincode</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($users as $user) 
                <tr>
                  <td>{{$loop->index +1}} </td>
                  <td>{{$user->role ==1 ? 'Customer' : 'Vendor'}}</td>
                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->mobile_no}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->city->city ?? ''}} </td>
                  <td>{{$user->pincode}}</td>

                  <td><a href="{{ route('admin.customer.edit',$user->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>

                  <td>
                    <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('admin.customer.delete',$user->id) }}" style="display: none">
                      @csrf
                      @method('delete')
                    </form>
                    <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $user->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }" ><span class="glyphicon glyphicon-trash"></span></a>
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
  })
</script>
@endsection