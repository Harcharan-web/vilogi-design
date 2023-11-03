<script>
    $(document).ready(function () {
  
  $('.js-sidebar-menu').scrollToFixed({
      marginTop: 20,
      limit: $('.js-sidebar-holder').outerHeight() + 90 - $('.js-sidebar-menu').outerHeight()
    });

  $('.js-navigation-item').bind('click', function (e) {
    e.preventDefault();

    var target = $(this).attr("href");

    if (target.length > 1) {
        $('html, body').stop().animate({
          scrollTop: $(target).offset().top
        }, 600, function () {
          location.hash = target;
        });
    }

    return false;
  });
});

$(window).scroll(function () {
  var scrollDistance = $(window).scrollTop();

  $('.article-section').each(function (i) {
    if ($(this).position().top - 2 <= scrollDistance) {
      $('.js-navigation-list .js-navigation-item.active').removeClass('active');
      $('.js-navigation-list .js-navigation-item').eq(i).addClass('active');
    }
  });
}).scroll();
</script>