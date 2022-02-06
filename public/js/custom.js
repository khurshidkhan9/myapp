$('#recipeCarousel').carousel({
    interval: 10000
})

$('.carousel .carousel-item').each(function () {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});


// /////////////////////////////profile image upload with ajax
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#upload-image-form').submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    $('#image-input-error').text('');

    $.ajax({
        type: 'POST',
        url: ``,
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => {
            if (response) {
                this.reset();
                alert('Image has been uploaded successfully');
            }
        },
        error: function (response) {
            console.log(response);
            $('#image-input-error').text(response.responseJSON.errors.file);
        }
    });
});




// ////////////////////////newsletters ajax requests
$(document).ready(function () {
    $("#newsletterform").submit(function (event) {
        var formData = {
            email: $("input[name=email]").val(),
            "_token": $('_token').val(),
        };

        $.ajax({
            type: "POST",
            url: "./newsletter",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (response) {
            if (response['success']) {
                $('#message').html("<div class='alert alert-success error' id='message' role='alert'>" + response['success'] + "</div>");
            } else if (response['error']) {
                $('#message').html("<div class='alert alert-danger error' id='message' role='alert'>" + response['error'] + "</div>");
            }
            return false;

        });

        event.preventDefault();
    });
});


$(function(){
    $('.superbox-img').click(function(){
        $('#showPhoto .modal-body').html($(this).clone());
        $('#showPhoto').modal('show');
    })
})



// script for printing tables

function printTable() {
	var el=document.getElementById("toPrint");
	el.setAttribute('border', '1px');
	el.setAttribute('cellpadding', '5');
	newPrint=window.open("");
	newPrint.document.write(el.outerHTML);
	newPrint.print();
	newPrint.close();
}



// custom code for payment button toggle

  
  $('#customSwitch1').change(function() {
      if($(this).is(":checked")){
        $('#customSwitch2').attr('checked', false);
      }    
  });
  
  $('#customSwitch2').change(function() {
      if($(this).is(":checked")){
        $('#customSwitch1').attr('checked', false);
      }    
  });
