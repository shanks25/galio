function checkout() {
    qty = $('#qty').val();
    product_id = $('#product_id').val();
    // $('#checkout_form').submit();
    window.location = base_url + '/checkout/' + product_id + '/' + qty;
}

$('#state').on('change', function () {
    var cat = $(this).val();
    url = base_url + "/cities/" + cat;
    // console.log(base_url + "/subcat/" + cat);
    if (cat == "") {
        $('#city').html('<option></option>');
        $('#city').prop('disabled', true);
    }
    else {
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                $('#city').html('');
                sbucat = data.subcats;
                all_option = '<option value="">Select Sub Category </option>';
                sbucat.forEach(element => {
                    all_option = all_option + '<option value=' + element['id'] + ' >' + element['city'] + '</option>';
                });
                $('#city').append(all_option);
                $('#city').prop('disabled', false);
            }
        });
    }
});