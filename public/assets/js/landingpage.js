function quick_view(e) {
  
    var id = $(e).data('id');
   
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $.ajax({
        url: product_quick_view,
        data: {
            id: id
        },
        type: "get",
        datatype: 'html',
        // beforeSend: function() {
        //     $('#whitescreen').show();
        //     page = 1;

        // }
    
    success: (function(data) {
        if (data.html == " ") {
            $('.ajax-load').html("No more records found");
           
            return;
        }
        // $('#whitescreen').hide();
        $('.ajax-load').hide();
        $("#results").empty();
        $("#results").append(data.html);
        $('#quick_view').modal('show');
    })
})
    .fail(function(jqXHR, ajaxOptions, thrownError) {
        alert('server not responding...');
    });
    
}// Fill modal with content from link href
