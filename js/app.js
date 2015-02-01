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
});