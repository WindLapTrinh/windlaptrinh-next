$(document).ready(function () {
  $(".item_post_featured_banner a").click(function (a) {
    if ($(this).attr("href")) {
      var b = $(this).attr("href");
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
$(document).ready(function () {
  $(".four_post_bottom_banner .item p").matchHeight();
  $(".group_post_new .item_post").matchHeight();
  $(".group_post_new .title").matchHeight();
  $(".group_ebook .ct .title").matchHeight();
  $(".slider_header").slick({
    slidesToShow: 1,
    autoplay: !0,
    autoplaySpeed: 3000,
    arrows: !1,
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 1 } },
      { breakpoint: 420, settings: { slidesToShow: 1 } },
    ],
  });
  $(".talk-cnv-cas").slick({
    slidesToShow: 5,
    autoplay: !0,
    autoplaySpeed: 1500,
    arrows: !1,
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 7 } },
      { breakpoint: 420, settings: { slidesToShow: 3 } },
    ],
  });
  $(".solution_app_mobile").slick({
    slidesToShow: 3,
    autoplay: !0,
    autoplaySpeed: 1500,
    arrows: !1,
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 3 } },
      { breakpoint: 567, settings: { slidesToShow: 1 } },
    ],
  });
  $(".four_post_bottom_banner_mobile").slick({
    slidesToShow: 3,
    autoplay: !0,
    autoplaySpeed: 1500,
    arrows: !1,
    responsive: [
      { breakpoint: 1199, settings: { slidesToShow: 3 } },
      { breakpoint: 567, settings: { slidesToShow: 1 } },
    ],
  });
  $(".nav-cas-mobile").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    focusOnSelect: !0,
    autoplay: !1,
    autoplaySpeed: 500,
    speed: 500,
    arrows: !0,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: !0,
          dots: !1,
        },
      },
      { breakpoint: 600, settings: { slidesToShow: 1, slidesToScroll: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      { breakpoint: 320, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
  });
  $(".customers_partner_mobile").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    focusOnSelect: !0,
    autoplay: !0,
    autoplaySpeed: 1000,
    speed: 1000,
    arrows: !1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: !0,
          dots: !1,
        },
      },
      { breakpoint: 600, settings: { slidesToShow: 3, slidesToScroll: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 3, slidesToScroll: 1 } },
      { breakpoint: 320, settings: { slidesToShow: 3, slidesToScroll: 1 } },
    ],
  });
  $(".case_study").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: !0,
    autoplaySpeed: 6000,
    arrows: !0,
    nextArrow:
      '<img src="/themes/default/images/template_new/arrow_right_circle.png" class="next" alt="Next">',
    prevArrow:
      '<img src="/themes/default/images/template_new/arrow_left_circle.png" class="prev" alt="Prev">',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: !0,
          dots: !1,
        },
      },
      { breakpoint: 600, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      { breakpoint: 320, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
  });
});
