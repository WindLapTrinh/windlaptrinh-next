$(document).ready(function () {
  $(".navbarmain-primary .navbar-nav > li > a").click(function (a) {
    if ($(this).attr("href")) {
      var b = $(this).attr("href").substring(1);
      if ($(b).length) {
        a.preventDefault();
        $("html, body").animate(
          { scrollTop: $(b).offset().top },
          800,
          function () {}
        );
      }
    }
  });
});
$(window).load(function () {
  var a = setTimeout(function () {
    if (localStorage.getItem("popupshow")) {
      $("#modal-inpage").hide();
    } else {
      $("#modal-inpage").fadeIn(300);
      localStorage.setItem("popupshow", "show");
    }
  }, 2000);
  if (localStorage.getItem("submit_promotion_popup")) {
    clearTimeout(a);
  }
});
$("#close-modal-page").click(function () {
  $("#modal-inpage").hide();
});
$(".group-cat-price").slick({
  centerMode: true,
  slidesToShow: 4,
  variableWidth: true,
  infinite: true,
  focusOnSelect: true,
  arrows: true,
  swipe: true,
  swipeToSlide: true,
  responsive: [
    {
      breakpoint: 770,
      settings: { slidesToShow: 3, centerMode: true, variableWidth: false },
    },
    {
      breakpoint: 480,
      settings: { slidesToShow: 2, centerMode: true, variableWidth: false },
    },
  ],
});
$(document).ready(function () {
  function a(b) {
    $(".tab-wrapper ul li").removeClass("active");
    $(b).addClass("active");
    var c = $(b).find("a").attr("href");
    $(".tab-item").hide();
    $(c).show();
  }
  $(".tab li").click(function () {
    a(this);
    return false;
  });
  a($(".tab li:first-child"));
});
$(".group-gallery-deny").slick({
  dots: true,
  infinite: true,
  arrows: false,
  centerMode: true,
  speed: 300,
  slidesToShow: 1,
  centerPadding: "30px",
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 2,
        centerPadding: "0",
        centerMode: false,
        slidesToScroll: 1,
        infinite: true,
      },
    },
  ],
});
function readURL(b) {
  if (b.files && b.files[0]) {
    var a = new FileReader();
    a.onload = function (c) {
      $("#blah").attr("src", c.target.result);
    };
    a.readAsDataURL(b.files[0]);
  }
}
