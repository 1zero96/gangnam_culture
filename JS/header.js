"use strict";
/* 제이쿼리 */
$(document).ready(function () {
  /* top menu 클릭 토글 */
  $(".top_menu_sns > a > img").click(function () {
    $(".sns_item_wrap").toggle(500);
  });

  /* gnb 메뉴 슬라이드 */
  $(".gnb > ul > li").mouseenter(function () {
    $(".gnb ul ul, .nav_bg").stop().slideDown("slow");
    $(this).addClass("gnb_border");
    $(this).find("ul").addClass("sub_bdg");
  });
  $(".gnb > ul > li").mouseleave(function () {
    $(this).find("ul").removeClass("sub_bdg");
    $(".gnb ul ul, .nav_bg").stop().slideUp("slow");
    $(this).removeClass("gnb_border");
  });

  /* gnb sub menu들 hover */
  $(".menu2 > li > a").hover(
    function () {
      $(this).css({ color: "#006db8", "font-weight": "500" });
    },
    function () {
      $(this).css({ color: "", "font-weight": "normal" });
    }
  );
});
