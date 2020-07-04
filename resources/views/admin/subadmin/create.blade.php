@extends('admin.layout.app')
@section('title', 'Create User')
@section('content')

<style type="text/css">
  .form-group.checkbox-wrap {
    padding: 20px 0;
  }
  .form-group.checkbox-wrap input {
    margin: 0 10px 0 0px;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     User management
   </h1>
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">user</a></li>
    <li class="active">create</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Personal Details</h3>
        </div>


        <!-- form start -->
        <form role="form" action="{{route('admin.subadmin.store')}}" method="post">
          {{ csrf_field() }}
          <div class="box-body">

           @include('message')
           <div class="col-lg-offset-3 col-lg-6">
             <div class="form-group">
              <label for="name">Name</label>
              <input required type="text" class="form-control" id="name" value="{{old('first_name')}}" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
              <label for="name">Email</label>
              <input required type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label for="name">Mobile No</label>
              <input required type="text" class="form-control" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" value="{{old('mobile_no')}}" name="mobile_no" placeholder="Enter Mobile">
            </div>

            <div class="form-group">
              <label for="name">Password</label>
              <input required type="password" class="form-control password" id="name" name="password" placeholder="Enter password">
            </div>

            <div class="form-group">
              <label for="name">Confirm Password</label>
              <input required type="password" class="form-control" id="name" name="password_confirmation" placeholder="Enter password">
            </div> 

          </div>

          <div class="col-lg-offset-3 col-lg-6">

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

          </div>
        </div>

      </div>



    </div>

  </div>


</form>
<!-- /.box -->


</div>
<!-- /.col-->
</div>
<!-- ./row -->
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


  $(function() {
    $("form").validate({ 
      rules: {

       mobile_no: {
        minlength: 10,
        maxlength: 10
      }, 
      password_confirmation: {
        equalTo: ".password"
      }
    },
    messages: { 

      email: "Please enter a valid email address",
      mobile_no: "Contact number Should be of 10 digits",
      password_confirmation: {
        equalTo: "Please Enter Same Password"
      },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  });



</script>
@endsection