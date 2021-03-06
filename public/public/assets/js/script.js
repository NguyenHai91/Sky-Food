new WOW().init();
$(window).load(function() {
    $(".se-pre-con").fadeOut("slow");
    $(".modalNotice")[0].click();
});
$(document).on('ready', function() {
    $(".slider-ad").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        // fade: true,
        cssEase: 'linear'
    });
    $('.slider-other').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
        ]
    });
});
$(document).ready(function() {
    var options = {
        max_value: 5,
        step_size: 1,
        update_input_field_name: $("#input-rate"),
    }
    $(".rating").rate(options);


    $('body').scrollspy({ target: ".navbar", offset: 60 });

    // Add smooth scrolling on all links inside the navbar
    $(".header-navbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        }
        $(".section-scroll").css("padding-top", "60px");
    });
    // $('.item-menu').click(function() {
    //     $('.item-menu').removeClass("active");
    //     $(this).addClass("active");
    // });

    $('.image-editor').cropit({
        exportZoom: 1.25,
        imageBackground: true,
        imageBackgroundBorderWidth: 20
    });

    $('.rotate-cw').click(function() {
        $('.image-editor').cropit('rotateCW');
    });
    $('.rotate-ccw').click(function() {
        $('.image-editor').cropit('rotateCCW');
    });

    $('#image').click(function() {
        var imageData = $('.image-editor').cropit('export');
        $.ajax({
            url: '/profile',
            type: 'POST',
            cache: false,
            data: {
                ajaxImages: imageData,
            // aactive: active
        },
        success: function(data) {
            // alert(data);
            $('.img').html(data);
            // alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
    });


});

function loadMap(latValue,lngValue){
   $(".ggmap").css("display","block");initMap(latValue,lngValue);
   
}

function initMap(latValue,lngValue) {
    var myLatLng = { lat: latValue, lng: lngValue };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}
