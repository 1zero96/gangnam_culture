"use strict";
/* top menu 클릭 토글 */
$(".topMenu__sns > a > img").click(function () {
  $(".topMenu__snsIcon").toggle(500);
});

/* gnb 메뉴 슬라이드 */
$("#gnb > ul > li").mouseenter(function () {
  $("#gnb ul ul, .nav__bg").stop().slideDown("slow");
  $(this).addClass("gnb_border");
  $(this).find("ul").addClass("sub_bdg");
});
$("#gnb > ul > li").mouseleave(function () {
  $(this).find("ul").removeClass("sub_bdg");
  $("#gnb ul ul, .nav__bg").stop().slideUp("slow");
  $(this).removeClass("gnb_border");
});

/* gnb sub menu들 hover */
$(".gnb__content > li > a").hover(
  function () {
    $(this).css({ color: "#006db8", "font-weight": "600" });
  },
  function () {
    $(this).css({ color: "", "font-weight": "normal" });
  }
);
