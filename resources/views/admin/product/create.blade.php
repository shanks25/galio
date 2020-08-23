@extends('admin.layout.app')
@section('title','Add Product')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Product
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
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Product</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="subscription_form" name="subscription_form" action="{{route('admin-product-store')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class=form-control id="category" name="category">
                                    <option></option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category</label>
                                <select class=form-control id="sub_category" name="sub_category">
                                    <option></option>
                                    @foreach($subcategory as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit</label>
                                <select class=form-control id="unit" name="unit">
                                    <option></option>
                                    @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" id="image" name="image[1]">
                                <a href="javascript:add_images()" class="btn add-more add-morenew">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                            </div>
                            <div id="multiple_images_div"></div>

                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control number-only" id="price" name="price" placeholder="Price">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount Type</label>
                                <!-- <input type="radio" id="male" name="gender" value="male"> -->
                                <!-- <label for="male">Male</label><br> --><br>
                                <input type="radio" id="percent" name="discount_type" value="1" checked>
                                <label for="">Percent</label><br>
                                <input type="radio" id="other" name="discount_type" value="2">
                                <label for="">Amount</label>
                                <input type="text" class="form-control number-only" id="discount_price" name="discount_price" placeholder="Discount rate">
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
    $('#category').select2({
        placeholder: "Select Category",
    });
    $('#sub_category').select2({
        placeholder: "Select Category",
    });
    $('#unit').select2({
        placeholder: "Select Unit",
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
    var global_img_count = 1;

var global_img_reference = 1;

function add_images() {

    if (global_img_count < 4) {
        global_img_count++;
        global_img_reference++;
        input_data = `<div class="form-group" id="extra_image_${global_img_reference}">
                                <input type="file" class="form-control" id="image${global_img_reference}" name="image[${global_img_reference}]">
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
    $("#extra_image_" + address_no).remove();
    // console.log(global_img_count);
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
</script>
@endsection
