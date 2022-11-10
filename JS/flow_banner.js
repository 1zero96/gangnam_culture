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
