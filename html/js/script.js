jQuery(document).ready(function ($) {

  //scroll to block
  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 20);
  });

  //slider
  var swiperImg = new Swiper(".img-slider", {
    slidesPerView: "auto",
    spaceBetween: 40,
    loop: true,
    breakpoints: {
      320: {
        spaceBetween: 10,
      },
      768: {
        spaceBetween: 20,
      },
      1200: {
        spaceBetween: 40,
      },
    },
  });

  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu .sub-item>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //sub-menu open/close - footer
  $(document).on('click', 'footer .right .item h5', function (e){
    e.preventDefault();
    let item = $(this).closest('.item').find('ul');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //select
  $('.select-block select').niceSelect();

  //slider
  var swiperVacancies = new Swiper(".vacancies-slider", {
    slidesPerView: "auto",
    spaceBetween: 16,
    pagination: {
      el: ".vacancies-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".vacancies-next",
      prevEl: ".vacancies-prev",
    },
  });

  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,

  });

  //file
  $('input:file').change(function(){
    $this = $(this);
    $name = $this.val().replace('C:\\fakepath\\', '');
    $('#file').text($name).show();
  });
});