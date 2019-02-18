jQuery(document).ready(function( $ ) {
  // Main menu show/hide
  $('.site-div-nav').on('click','#div-nav-control',function(){
    $('.site-div-nav').toggleClass('active');
  });

  // fav-icon animation for index.html page
 $('a[href*="#target"]').click(function(){
    var elemToGo = $(this).attr('href');
    var speed = 750;
    $('html,body').animate(
    {
      scrollTop: $(elemToGo).offset().top
    },speed
    );
    return false;
  });
  // Support center btn
  $('#support-center i').on('click', function() {
    $('#support-center').toggleClass('active');
  });

  // Mobile menu: Left: start
  $('#div-nav').clone().appendTo('#mobile-div-nav');
  $('#mobile-div-nav #div-nav').removeClass('div-nav');
  $('#mobile-div-nav #div-nav').addClass('mobile-nav primary-nav');
  $('<span class="plus-sign"> + </span>').insertAfter('#mobile-div-nav #div-nav .menu-item-has-children > a');
  // plus sign click
  $('.mobile-nav span').click( function() {
    $('.mobile-nav .sub-menu').slideUp();
    $(this).html('+');
    if(!$(this).next().is(':visible')) {
      $(this).next().slideDown();
      $(this).html('+');
      $(this).html('-');
    }
  });
  // Mobile menu: Left: end
  
  // show hide submenu items: User Navigation

  // $('#user-nav li > .sub-menu').parent().click(function() {
  //   var submenu = $(this).children('.sub-menu');
    
  //   if ( $(submenu).is(':hidden') ) {
      
  //     $(submenu).css({"display":"block"});
  //     $(submenu).parent().siblings().find('ul').css({"display":"none"});
  //     $(submenu).parent().css({"opacity":"1"});
  //     $(submenu).parent().siblings().css({"opacity":"0.54"});
  //     $(submenu).find('li').css({"opacity":"1"});
  //     $(submenu).siblings('li').css({"opacity":"0.54"});

  //   } else {
  //     $(submenu).css({"display":"none"});
  //     $(submenu).parent().css({"opacity":"0.54"});
  //   }
  // });

  // Show hide left mobile menu
  $('#mbmenuleftxp i').click(function() {
  $('#mbl-side-bar-left').css({"left":"0"});

  });
  $('#mbmenuleftclose').click(function() {
  $('#mbl-side-bar-left').css({"left":"-250px"});
  });

  // if click outside of sidebar then the side will disapear
  $(document).mouseup(function(e) 
  {
    var container = $("#mbl-side-bar-left");
    var container2 = $("#mbl-side-bar-right");
    var container_sub_menu1 = $("#sub-menu1");
    var container_sub_menu2 = $("#sub-menu2");
    var container_sub_menu3 = $("#sub-menu3");

  // left bar
  // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.css({"left":"-250px"});
    }
    // right bar
    if (!container2.is(e.target) && container2.has(e.target).length === 0) 
    {
        container2.css({"right":"-300px"});
    }
    // for sub-menu hide if click outside of it
    // if (!container_sub_menu1.is(e.target) && container_sub_menu1.has(e.target).length === 0) 
    // {
    //   container_sub_menu1.css({"display":"none"});
    //   container_sub_menu1.parent().css({"opacity":"0.54"});
    // }
    // if (!container_sub_menu2.is(e.target) && container_sub_menu2.has(e.target).length === 0) 
    // {
    //   container_sub_menu2.css({"display":"none"});
    //   container_sub_menu2.parent().css({"opacity":"0.54"});
    // }
    // if (!container_sub_menu3.is(e.target) && container_sub_menu3.has(e.target).length === 0) 
    // {
    //   container_sub_menu3.css({"display":"none"});
    //   container_sub_menu3.parent().css({"opacity":"0.54"});
    // }

  });

  // show hide mobile navigation
  $('#mbmenurightxp i').click(function() {
    $('#mbl-side-bar-right').css({"right":"0"});
  });

  // submit-page icon hide-show
  var ico = document.getElementsByClassName("info-icon");
  var j;
  for (j = 0; j < ico.length; j++) {
    ico[j].addEventListener("click", function() {
      var infoContent = this.nextElementSibling;
      infoContent.classList.toggle("active");
    });
  }

  // Masonry at Photo Gallery
  // var $grid = $('.grid').imagesLoaded( function() {
  //   $grid.masonry({
  //     itemSelector: '.grid-item',
  //     columnWidth: '.grid-sizer',
  //     percentPosition: true,
  //   }); 
  // });

  // Infinite scroll
  // init Masonry

  var $grid = $('.grid').masonry({
    itemSelector: 'none', // select none at first
    columnWidth: '.grid-sizer',
    gutter: '.grid-gutter-sizer',
    percentPosition: true,
    stagger: 10,
    // nicer reveal transition
    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
  });

  // get Masonry instance
  var msnry = $grid.data('masonry');

  // initial items reveal
  $grid.imagesLoaded( function() {
    $grid.removeClass('are-images-unloaded');
    $grid.masonry( 'option', { itemSelector: '.grid-item' });
    var $items = $grid.find('.grid-item');
    $grid.masonry( 'appended', $items );
  });

  // init Infinte Scroll
  $grid.infiniteScroll({
    // use function to set custom URLs
    path: 'page{{#}}.html',
    append: '.grid-item',
    outlayer: msnry,
    status: '.page-load-status',
    button: '.view-more-button',
  });

  var $viewMoreButton = $('.view-more-button');

  // get Infinite Scroll instance
  var infScroll = $grid.data('infiniteScroll');

  $grid.on( 'load.infiniteScroll', onPageLoad );

  function onPageLoad() {
    if ( infScroll.loadCount == 1 ) {
      // after 2nd page loaded
      // disable loading on scroll
      $grid.infiniteScroll( 'option', {
        loadOnScroll: false,
      });
      // show button
      $viewMoreButton.show();
      // remove event listener
      $grid.off( 'load.infiniteScroll', onPageLoad );
    }
  }

  // slider : blog
  $('.post-slider-container').owlCarousel({
    items: 1,
    margin: 0,
    nav: false,
    dots: false
  });

  // Book categories
  $('.book-section').owlCarousel({
    margin: 0,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      991: {
        items: 6
      },
      1400: {
        items: 8
      }
    }
  });



});