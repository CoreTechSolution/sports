$(function($){
    $('.nav').slicknav({
        prependTo:'#rspnavigation',
        label:''
    });

    $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        maxWidth	: 800,
        maxHeight	: 600,
        helpers : {
            media : {}
        }
    });


    $('.matchheight').matchHeight();
    $('.matchheight1').matchHeight();
    $('.short_description').matchHeight();

    $('.fbreviewslider').bxSlider({
        auto: true,
        pager: false,
        minSlides: 1,
        maxSlides: 3,
        slideWidth: 230,
        moveSlides: 1,
        slideMargin: 20,
        infiniteLoop: true,
        /*nextSelector: '#slider-next3',
        prevSelector: '#slider-prev3',*/
        //nextText: '<img src="<?php bloginfo('template_directory'); ?>/images/right-arrow.png">',
        //prevText: '<img src="<?php bloginfo('template_directory'); ?>/images/left-arrow.png">'
    });
});
$(document).ready(function () {
    $('.table').footable();
});
function delete_data(id,check_field,table_name){
    var current_location=window.location.href;
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showLoaderOnConfirm: true,
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    url: base_url + 'ajax/delete_data',
                    type: 'POST',
                    data: {id: id, check_field: check_field, table_name: table_name},
                    dataType: 'json'
                })
                    .done(function(response){
                        swal('Deleted!', response.message, response.status);
                        window.location.href=current_location;
                        window.location.reload();
                        //readProducts();
                    })
                    .fail(function(){
                        swal('Oops...', 'Something went wrong with ajax !', 'error');
                    });
            });
        },
        allowOutsideClick: false
    });
};
//new WOW().init();