jQuery(function ($) {
  const pagetop = $(".pagetop");
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    jQuery("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});
