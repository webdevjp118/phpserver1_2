//Humburger Menu
AOS.init();
$(function () {
  $('.hamburger').on('click', function () {
    $('body').toggleClass('active');

    $(".navList a").on("click", function () {
      $("body").removeClass('active');
    });

    if ($('body').hasClass('active')) {
      $('.overlay').on('click', function () {
        $('body').removeClass('active');
      });
    };
  });

  $('#email2').bind('input', function() {
    var to_confirm = $(this);
    var to_equal = $('#email1');

    if(to_confirm.val() != to_equal.val())
        this.setCustomValidity('上記と同じものを入力お願いします');
    else
        this.setCustomValidity('');
  });
});
