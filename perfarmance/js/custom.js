$(document).ready(function() {
    $('header a[href^="#"]').on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href');
        var divs = $(id).find('div').length;
        if(divs > 0){
            var	top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1200);
        }else{
            window.location.href = "/"+id;
        }
    });

    /*test*/

    jQuery('.btn_more').on('click', function() {
        var url = "/wp-admin/admin-ajax.php";
        var postCount = $(this).prev().children().length;
        var postType = $(this).attr('data-postType');
        var tax = $(this).attr('data-taxonomy');
        var cat = $(this).attr('data-cat-id');
        var appendContent = $(this).prev();
        $('.btn_more').css({backgroundImage: 'url("/wp-content/themes/perfarmance/images/ajax-loader.gif")'});

        //alert(appendContent);
        jQuery.ajax({
            url: url,

            type: "POST",

            cache: false,

            data: {

                action: "test",
                post_type: postType,
                post_count: postCount,
                taxonomy: tax,
                category: cat
            },

            success: function (data) {
                $(data).appendTo(appendContent);
                $('.btn_more').css({backgroundImage: 'none'});
                $('.group1_bottom_post').show({transition: 'all 5s ease'});
            },

            error: function (err) {
                $('.btn_more').css({backgroundImage: 'none'});
            }

        });
    });
});



