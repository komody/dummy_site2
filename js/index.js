$(function() {
  $('.schedule_tab').on('click', function() {
    $('.schedule_tab').removeClass('active_tab');
    $(this).addClass('active_tab');
    
    $('.schedule_text').removeClass('active_text');
    
    var index = $('.schedule_tab').index(this);
    $('.schedule_text').eq(index).addClass('active_text');
  });
});

$(function () {
  $('#js-hamburger-menu, .navigation__link').on('click', function () {
    $('.navigation').slideToggle(500)
    $('.hamburger-menu').toggleClass('hamburger-menu--open')
  });
});

$(function() {
  const submit1 = $('.submit_ng_button');
  const submit2 = $('.submit_ok_button');
  const form = $('.form');

  $(document).ready(function() {
    if (form[0].checkValidity()) {
      submit1.removeClass('active_button');
      submit2.addClass('active_button');
    } else {
      submit1.addClass('active_button');
      submit2.removeClass('active_button');
    }
  });

  form.on('input change', function() {
    if (form[0].checkValidity()) {
      submit1.removeClass('active_button');
      submit2.addClass('active_button');
    } else {
      submit1.addClass('active_button');
      submit2.removeClass('active_button');
    }
  });
});