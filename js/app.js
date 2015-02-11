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

$("#showcase-image-left").backstretch("./images/md-2014/_97A8976.jpg");
$("#showcase-image-right").backstretch("./images/md-2014/_97A8841.jpg");
$("#showcase-image-top").backstretch("./images/md-2014/_97A8795.jpg");
$("#showcase-image-bottom").backstretch("./images/md-2014/_97A8914.jpg");