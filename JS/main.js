/* slick.js 배너영역 */

$("#slideBanner").slick({
  autoplay: true,
  arrows: false,
  dots: true,
  slidesToShow: 1,
});

/** facilly 스크립트 */
$("document").ready(function () {
  $(".slide ul li").mouseenter(function () {
    $(this).stop().animate({ width: 581 });
    $(this).find("img").stop().animate({ width: 581 });
    $(this).siblings().stop().animate({ width: 180 });
  });

  $(".slide ul li").mouseleave(function () {
    $(".slide ul li").stop().animate({ width: 277 });
  });

  $(".fa01").mouseenter(function () {
    $(".fa01 div").append("<span class='fa_txt text-shadow'>ㅣ<br>" + "자세히보기</span>");
    $(".fa01 p").addClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 150, left: 210 });
    $(".fa_txt").stop().fadeIn(1000);
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 18 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 18 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 6 });
  });
  $(".fa01").mouseleave(function () {
    $(".fa01 p").removeClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: 57 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 73 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 73 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 73 });
    $(".fa01 span").stop().animate().remove();
  });

  $(".fa02").mouseenter(function () {
    $(".fa02 div").append("<span class='fa_txt text-shadow'>ㅣ<br>" + "자세히보기</span>");
    $(".fa02 p").addClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: -5.4 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 160, left: 210 });
    $(".fa_txt").stop().fadeIn(1000);
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 18 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 6 });
  });
  $(".fa02").mouseleave(function () {
    $(".fa02 p").removeClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: 57 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 73 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 73 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 73 });
    $(".fa02 span").stop().animate().remove();
  });

  $(".fa03").mouseenter(function () {
    $(".fa03 div").append("<span class='fa_txt text-shadow'>ㅣ<br>" + "자세히보기</span>");
    $(".fa03 p").addClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: -5.4 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 18 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 160, left: 210 });
    $(".fa_txt").stop().fadeIn(1000);
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 6 });
  });
  $(".fa03").mouseleave(function () {
    $(".fa03 p").removeClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: 57 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 73 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 73 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 73 });
    $(".fa03 span").stop().animate().remove();
  });

  $(".fa04").mouseenter(function () {
    $(".fa04 div").append("<span class='fa_txt text-shadow'>ㅣ<br>" + "자세히보기</span>");
    $(".fa04 p").addClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: -5.4 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 18 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 18 });
    $(".fa04 div, .fa03 span").stop().animate({ top: 160, left: 210 });
    $(".fa_txt").stop().fadeIn(1000);
  });
  $(".fa04").mouseleave(function () {
    $(".fa04 p").removeClass("faBlack");
    $(".fa01 div, .fa01 span").stop().animate({ top: 165, left: 57 });
    $(".fa02 div, .fa02 span").stop().animate({ top: 175, left: 73 });
    $(".fa03 div, .fa03 span").stop().animate({ top: 175, left: 73 });
    $(".fa04 div, .fa04 span").stop().animate({ top: 175, left: 73 });
    $(".fa04 span").stop().animate().remove();
  });
});

/** footer 광고 배너 스크립트 */
jQuery(function () {
  $("#banner ul").carouFredSel({
    align: "left",
    width: 920,
    height: 51,
    items: {
      visible: 6,
    },
    scroll: {
      items: 1,
      duration: 800,
      pauseOnHover: false,
    },
    next: "#banner_right",
    prev: "#banner_left",
    direction: "left",
  });

  $("#banner_pause").click(function () {
    $("#banner ul").trigger("pause");
    $("#banner_stop").hide();
    $("#banner_start").show();
    return true;
  });

  $("#banner_play").click(function () {
    $("#banner ul").trigger("play", 1);
    $("#banner_stop").show();
    $("#banner_start").hide();
    return true;
  });
});

/** tab menu */

$(".tab_title li").click(function () {
  var tapIdx = $(this).index();
  $(".tab_title li").removeClass("on");
  $(".tab_title li").eq(tapIdx).addClass("on");
  $(".tabs > div").hide();
  $(".tabs > div ").eq(tapIdx).show();

  $(".slider").slick("setPosition");
});

/** tab menu slick */
$(".slider").slick({
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: "<button type='button' class='tap-prev'>Previous</button>",
  nextArrow: "<button type='button' class='tap-next'>Next</button>",
});

/** quick menu 클릭하면 보여지고 다시 클릭하면 사라지게 하는 함수 */
$("#quick .tit").click(function () {
  if ($("#quick .tit").hasClass("on") === true) {
    $("#quick ul").hide(250);
    $("#quick .tit").removeClass("on");
  } else {
    $("#quick .tit").addClass("on");
    $("#quick ul").show(250);
  }
});
