// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).ready(function(){
    $("#gallerySlick").slick({
        arrows: false,
        dots: false,
        draggable: false,
        infinite: true,
        speed: 500,
        fade: true,
        slide: 'img',
        cssEase: 'linear',
        autoplay: true
    });

    $(".showcase-container").click(function(){
       window.location = $(this).attr('rel');
    });
});

$("#showcase-image-left").backstretch("./images/home/fuckup-night-magdeburg-besuchen.jpg");
$("#showcase-image-right").backstretch("./images/home/sprecher-werden-fuckup-night-magdeburg.jpg");
$("#showcase-image-top").backstretch("./images/home/fuckup-night-atmosphaere2.jpg");
$("#showcase-image-bottom").backstretch("./images/home/fuckup-night-atmosphaere3.jpg");