$(document).on('submit', '.ajax_save_form', function(e){
  e.preventDefault();
  var ajax_save_form = $(this);
  var formaction = ajax_save_form.attr('action');
  $('.errormessageformdiv').html('');
  jQuery('.alert-danger').html('');
  jQuery('.alert-success').html('');
  jQuery.ajax({
    enctype: 'multipart/form-data',
    url: formaction,
    data: new FormData(this),
    method:'post',
    dataType: 'json', 
    processData: false,
    contentType: false,
    cache: false,
    timeout: 600000,
    beforeSend: function() {
      $('.errormessageformdiv').html('<span style="color:#ff0000;">Please wait while form is submitting...<span>');    
    },
     success: function(response) {
                jQuery('.errormessageformdiv').html('');
                jQuery('.alert-danger').hide();
                jQuery('.alert-danger').html('');
                jQuery('.alert-success').hide();
                jQuery('.alert-success').html('');
                  if($.isEmptyObject(response.error)){
                    jQuery('.ajax_save_form')[0].reset();
                    // ajax_save_form.reset();
                    $('.alert-success').show();
                    $('.alert-success').append('<p>'+response.success+'</p>');
                    $(".alert-success").fadeOut(10000);
                    // window.location.reload();
                    window.setTimeout(function(){window.location.reload()}, 10000);
                  }else{
                    $(".print-success-msg").css('display','none');
                    $.each(response.error, function(key, value){
                    $('.alert-danger').show();
                    $('.alert-danger').append('<p>'+value+'</p>');
                    });
                    $(".alert-danger").fadeOut(10000);
                  }
              }
  });    
});




    