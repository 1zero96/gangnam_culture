/* sns 아이콘 hover */
let sns = $(".sns_group a");
$(sns)
  .eq(0)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/naver_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/naver_before.png");
  });
$(sns)
  .eq(1)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/kakao_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/kakao_before.png");
  });
$(sns)
  .eq(2)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/google_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/google_before.png");
  });
$(sns)
  .eq(3)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/fbook_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/fbook_before.png");
  });
$(sns)
  .eq(4)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/twit_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/twit_before.png");
  });
$(sns)
  .eq(5)
  .mouseenter(function () {
    $(this).children().attr("src", "../images/insta_after.png");
  })
  .mouseleave(function () {
    $(this).children().attr("src", "../images/insta_before.png");
  });
