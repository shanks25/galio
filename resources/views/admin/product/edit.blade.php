@extends('admin.layout.app')
@section('title','Edit Product')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Product
            <!-- <small>advanced tables</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit Product</a></li>
        </ol>
    </section>
    @include('admin.includes.form-error')
    @include('admin.includes.form-success')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Product</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="subscription_form" name="subscription_form" action="{{route('admin-product-update')}}" method="post" role="form" enctype="multipart/form-data">
                    <input type="hidden" id="delete_images_ids" name="delete_images_ids">
                    <input type="hidden" id="delete_key_values_ids" name="delete_key_values_ids">
                    <input type="hidden" id="product_tbl_id" name="product_tbl_id" value="{{$product->id}}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$product->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class=form-control id="category" name="category">
                                    <option></option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}" {{$product->category == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category</label>
                                <select class=form-control id="sub_category" name="sub_category">
                                    <option></option>
                                    @foreach($subcategory as $cat)
                                    <option value="{{$cat->id}}" {{$product->sub_category == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit</label>
                                <select class=form-control id="unit" name="unit">
                                    <option></option>
                                    @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$product->unit == $unit->id ? 'selected' : ''}}>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
                            </div>
                            @php $global_img_count = 0; @endphp
                            @if(isset($product->images))
                            @foreach($product->images as $key => $images)
                            @php $global_img_count++; @endphp
                            <div class="form-group" id="extra_image_{{++$key}}">
                                <label for="exampleInputEmail1">Image</label>
                                <img src="{{asset($images->path)}}" width="100">
                                <input type="file" class="form-control" id="image{{$key}}" name="image[{{$key}}]">
                                <input type="hidden" class="form-control" id="image_tbl_id{{$key}}" name="image_tbl_id[{{$key}}]" value="{{$images->id}}">
                                @if($key == 1)
                                <a href="javascript:add_images()" class="btn add-more add-morenew">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                        @else
                                        <a href="javascript:remove_images({{$key}})" class="btn add-more add-morenew">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </a>
                                        @endif
                            </div>
                            @endforeach
                            @endif
                            <div id="multiple_images_div"></div>

                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control number-only" id="price" name="price" value="{{$product->price}}" placeholder="Price">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount Type</label>
                                <!-- <input type="radio" id="male" name="gender" value="male"> -->
                                <!-- <label for="male">Male</label><br> --><br>
                                <input type="radio" id="percent" name="discount_type" value="1" {{$product->discount_type == 1 ? 'checked' : ''}}>
                                <label for="">Percent</label><br>
                                <input type="radio" id="other" name="discount_type" value="2" {{$product->discount_type == 2 ? 'checked' : ''}}>
                                <label for="">Amount</label>
                                <input type="text" class="form-control number-only" id="discount_price" name="discount_price" placeholder="Discount rate" value="{{$product->discount_rate}}">
                            </div>

                        <!-- dynamic key and value  -->

                        @php $global_key_values = 0; @endphp
                        @if(isset($product->keyValues))
                        @foreach($product->keyValues as $key => $key_values)
                        @php $global_key_values++; @endphp
                        <div clas="row" id="key_div{{++$key}}">
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">key</label>
                                    <input type="text" class="form-control" id="key{{$key}}" name="key[{{$key}}]" placeholder="Key Name" value="{{$key_values->key_name}}">
                                    <input type="hidden" class="form-control" id="key_value_tbl_id{{$key}}" name="key_value_tbl_id[{{$key}}]" value="{{$key_values->id}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">value</label>
                                    <input type="text" class="form-control" id="val{{$key}}" name="val[{{$key}}]" placeholder="Value Name" value="{{$key_values->value_name}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                            @if($key == 1)
                                <a href="javascript:add_key_values()" class="btn add-more add-morenew">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                                @else
                                <a href="javascript:remove_key_values({{$key}})" class="btn add-more add-morenew">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        @endforeach
                        @endif

                        <div id="dynamic_key_values"></div>
                        <div class="clearfix"></div>
                        <!-- /.box-body -->

                        <div class="form-group">
                                <label for="exampleInputEmail1">Select User</label>
                                <select class=form-control id="user_id" name="user_id">
                                    <option></option>
                                    <option value="0">Admin</option>
                                    @foreach($user as $userDetail)
                                    <option value="{{$userDetail->id}}" {{$userDetail->id == $product->user_id ? 'selected' : ''}}>{{$userDetail->name}} ({{$userDetail->email}})</option>
                                    @endforeach
                                </select>
                            </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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
    $('#category').select2({
        placeholder: "Select Category",
    });
    $('#sub_category').select2({
        placeholder: "Select Category",
    });
    $('#unit').select2({
        placeholder: "Select Unit",
    });
    $('#user_id').select2({
        placeholder: "Select User",
    });
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

    $('.product_management').addClass('active');
    var global_img_count = '{{$global_img_count}}';
var global_img_reference = global_img_count;

function add_images() {

    if (global_img_count < 4) {
        global_img_count++;
        global_img_reference++;
        input_data = `<div class="form-group" id="extra_image_${global_img_reference}">
                                <input type="file" class="form-control" id="image${global_img_reference}" name="image[${global_img_reference}]">
                                <input type="hidden" class="form-control" id="image_tbl_id${global_img_reference}" name="image_tbl_id[${global_img_reference}]" value="0">
                                <a href="javascript:remove_images(${global_img_reference})" class="btn add-more add-morenew">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </a>
                            </div>`;
        $('#multiple_images_div').append(input_data);
    } else {
        toastr.error("Only 4 Images Allowed");
    }
}

function remove_images(address_no) {
    console.log(address_no);
    global_img_count--;
    all_ids = $('#delete_images_ids').val();
    product_images = $('#image_tbl_id' + address_no).val();
        if (parseInt(product_images) > 0) {
            product_images = $('#image_tbl_id' + address_no).val();
            check_ids = all_ids + product_images + ',';
            $('#delete_images_ids').val(check_ids);
        }
    $("#extra_image_" + address_no).remove();
}
</script>

<script type="text/javascript">

  $('#category').on('change', function() {
    var cat = $(this).val();
    url = base_url + "/admin/subcat/" + cat;
    console.log(base_url + "/subcat/" + cat);
    if (cat == "")
    {
      $('#sub_category').html('<option></option>');
      $('#sub_category').prop('disabled', true);
    }
    else
    {
      $.ajax({
        type: "GET",
        url : url,
        success:function(data){
          $('#sub_category').html('');
          sbucat = data.subcats ;
          all_option = '<option value="">Select Sub Category </option>';
          sbucat.forEach(element => {
            all_option = all_option + '<option value=' + element['id']+' >' + element['name']+'</option>';
          });
          $('#sub_category').append(all_option);
          $('#sub_category').prop('disabled', false);
        }
      });
    }

  });
  var global_key_values = '{{$global_key_values}}';
  function add_key_values() {
    global_key_values++;
        input_data = `<div class="row" id="key_div${global_key_values}">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="">key</label>
                                            <input type="text" class="form-control" id="key${global_key_values}" name="key[${global_key_values}]" placeholder="Key Name">
                                            <input type="hidden" class="form-control" id="key_value_tbl_id${global_key_values}" name="key_value_tbl_id[${global_key_values}]" value="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">value</label>
                                        <input type="text" class="form-control" id="val${global_key_values}" name="val[${global_key_values}]" placeholder="Value Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="javascript:remove_key_values(${global_key_values})" class="btn add-more add-morenew">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div><div class="clearfix"></div>`;
        $('#dynamic_key_values').append(input_data);

}
function remove_key_values(address_no) {

    all_ids = $('#delete_key_values_ids').val();
    product_images = $('#key_value_tbl_id' + address_no).val();
        if (parseInt(product_images) > 0) {
            // product_images = $('#key_value_tbl_id' + address_no).val();
            check_ids = all_ids + product_images + ',';
            $('#delete_key_values_ids').val(check_ids);
        }
    $("#key_div" + address_no).remove();
}
</script>
@endsection
