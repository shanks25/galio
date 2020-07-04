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
        <form role="form" action="{{route('admin.customer.update',$user->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">

           @include('message')
           <div class="row">
            <div class="col-lg-4 ">
              <div class="form-group">
                <label for="name">First Name</label>
                <input required type="text" class="form-control" id="name" value="{{$user->first_name}}" name="first_name" placeholder="First Name">
              </div>

            </div>

            <div class="col-lg-4 ">
              <div class="form-group">
                <label for="name">Last Name</label>
                <input required type="text" class="form-control" value="{{$user->last_name}}" name="last_name" placeholder="Last Name">
              </div>

            </div>



          </div>

          <div class="row">
            <div class="col-lg-4 ">
              <div class="form-group">
                <label for="name">Email</label>
                <input required type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Enter Email">
              </div>

            </div>

            <div class="col-lg-4 ">
              <div class="form-group">
                <label for="name">Mobile No</label>
                <input required type="text" class="form-control" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" value="{{$user->mobile_no}}"name="mobile_no" placeholder="Enter Mobile">
              </div>

            </div>

            <div class="col-lg-4 ">
             <div class="form-group"> 
              <label for="name">User type</label>
              <select required onchange="venodrForm(this.value)" name="role" class="form-control">
                <option value="">Select user type</option>
                <option value="1" {{$user->role == 1 ? 'selected' :'' }}>Customer</option>
                <option value="2" {{$user->role == 2 ? 'selected' :'' }}>Vendor</option>
              </select> 
            </div>

          </div>
        </div>

        <div class="row"> 

          <div class="col-lg-4 ">
           <div class="form-group"> 
            <label for="name">Select Country</label>
            <select required  class="form-control">
              <option value="">Select Country</option>
              <option value="1" selected>India</option>
            </select> 
          </div>

        </div>

        <div class="col-lg-4 ">
         <div class="form-group"> 
          <label for="name">Select State</label>
          <select required onchange="getCity(this.value)" name="state_id" class="form-control">
            <option value="">Select state</option>
            @foreach($states as $state)
            <option value="{{$state->id}}"
              @if($user->state_id == $state->id )
              selected 
              @endif
              >{{$state->name}}</option>
              @endforeach
            </select> 
          </div>

        </div>
        <div class="col-lg-4 ">
         <div class="form-group"> 
          <label for="name">Select City</label>
          <select required name="city_id" id="city" class="form-control">
            <option value="">Select city</option> 
            @foreach($cities as $city)
            <option value="{{$city->id}}"
             @if($user->city_id == $city->id )
             selected 
             @endif
             >{{$city->city}}</option>
             @endforeach
           </select> 
         </div>

       </div>


     </div>

     <div class="row"> 

      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Address</label>
          <input required value="{{$user->address}}" type="text" class="form-control" id="name" name="address" placeholder="Enter Address">
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Pincode</label>
          <input required type="text" value="{{$user->pincode}}" class="form-control" id="name" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" name="pincode" placeholder="Enter Pincode">
        </div>
      </div>

 {{--      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Password</label>
          <input required type="password" class="form-control" id="name" name="password" placeholder="Enter password">
        </div>
      </div> --}}

    </div>

    <div class="row"> 

     <div class="col-lg-4 ">
       <div class="form-group"> 
        <label for="name">Select Gender</label>
        <select required name="gender" class="form-control">
          <option value="">Select Gender</option>
          <option value="1"  {{$user->gender == 1 ? 'selected' :'' }}>Male</option>
          <option value="2"  {{$user->gender == 1 ? 'selected' :'' }}>Female</option>
        </select> 
      </div>

    </div>

    <div class="col-lg-4 ">
      <div class="form-group">
        <label for="name">Profile Pic</label>
        <input type="file" class="form-control" accept="image/*" name="profile_pic">
      </div>
      <img src="{{asset('profiles/'.$user->profile_pic)}}" width="150" height="150">
    </div>

  </div>
  <div id="company" style="display: none;">
    <div class="box-header with-border">
      <h3 class="box-title">Company Details</h3>
    </div>

    <div class="row">
      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Company Name</label>
          <input  type="text" value="{{$user->company_name}}" class="form-control company" name="company_name" placeholder="Company Name">
        </div> 
      </div> 
      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Seller Type</label>
          <input   type="text" class="form-control company" value="{{$user->seller_type}}" name="seller_type" placeholder="Seller Type">
        </div>

      </div>

      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Subsscription offer</label>
          <input   type="text" class="form-control company" value="{{$user->subscription_offer}}" name="subscription_offer" placeholder="Subsscription Offer">
        </div> 
      </div>

    </div>


    <div class="row">

      <div class="col-lg-4 ">
        <div class="form-group">
          <label for="name">Validity</label>
          <input   type="text" class="form-control company"value="{{$user->validity}}" placeholder="Validity" name="validity" >
        </div>

      </div>
      <div class="col-lg-4 ">
        <div class="form-group checkbox-wrap"> 
          <input   type="checkbox" class="company" {{$user->is_verified == 1 ? 'checked' :'' }}   id="verified" value="1" name="is_verified" >

          <label for="verified">Verified</label>
        </div> 
      </div> 
      <div class="col-lg-4 ">
        <div class="form-group checkbox-wrap">
          <input  class="company" {{$user->is_paid == 1 ? 'checked' :'' }} type="checkbox" id="paid"  value="1" name="is_paid" >

          <label for="paid">Is Paid</label>
        </div>

      </div>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
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


  function getCity(id) {
    $('#city option').remove();
    $.ajax({
      type: "GET",
      url: "{{ url('ajax/city') }}",
      data: {
        id: id
      },
      success: function(data) {
        console.log(data)
        all_city = data['city'];
        collect_option = '<option value="">Select City</option>';
        for (var k in all_city) {
          collect_option = collect_option + '<option  value="' + all_city[k]['id'] + '">' + all_city[k]['city'] + '</option>';
        }
        $('#city').append(collect_option);
      }
    });
  }

  function venodrForm(value)
  { 
    if (value == 2 ) { 

      $('#company').show(); 

      $(".company").attr('required', true);

      $(".first").val('');

    } 
    else  {

      $('#company').hide(); 
      $(".company").removeAttr('required'); 

      $(".second").val(''); 

    }
  }


  $(function() {
    $("form").validate({ 
      rules: {
       pincode: {
         required: true,
         digits: true,
         minlength: 6,
         maxlength: 6
       },

       mobile_no: {
        minlength: 10,
        maxlength: 10
      },
    },
    messages: {
      pincode: { 
        minlength: "Pincode must be of 6 digits",
        maxlength: "Pincode must be of 6 digits",
      },
      email: "Please enter a valid email address",
      mobile_no: "Contact number Should be of 10 digits",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  });

</script>
@endsection