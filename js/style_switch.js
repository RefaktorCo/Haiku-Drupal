  jQuery(document).ready(function ($) {
    
    $("#color-nav li ").click(function() { 
      $("link.switch").attr("href",$(this).attr('rel'));
    });
   
	  $('#slideout').hover(function() {
	    $(this).animate({left:'0px'}, {queue:false, duration: 500});
	  }, 
	  function() {
	    $(this).animate({left:'-150px'}, {queue:false, duration: 500});
	  });
	  
    $("#color-nav li").click(function() { 
      $("link.switch").attr("href",$(this).attr('class'));
    });
    
    $(".grey-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/grey.png)");
    });
    
    $(".grid-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/noisy_grid.png)");
    });
    
    $(".wood-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/retina_wood.png)");
    });
    
    $(".gplay-bg").click(function() {
      $('body').css("background-image", "urlhttp://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/gplaypattern.png)");
    });
    
    $(".nistri-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/nistri.png)");
    });
    
    $(".bedge-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/bedge.png)");
    });
    
    $(".cartographer-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/cartographer.png)");
    });
    
    $(".illusion-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/backgrounds/illusion.png)");
    });
    
    $(".shattered-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/shattered.png)");
    });
    
    $(".tile-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/tile.png)");
    });
    
    $(".checkered-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/checkered.png)");
    });
    
    $(".gplay-head").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/gplaypattern.png)");
    });
    
    $(".bullseyes-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/bullseyes.png)");
    });
    
    $(".cartographer-head").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/cartographer.png)");
    });
    
    $(".linen-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/linen.png)");
    });
    
    $(".dark-wood-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/blocks-demo/sites/all/themes/blocks-drupal/images/main-backgrounds/dark_wood.png)");
    });
    
    $(".blue-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#2f88f0'});
    });
    
    $(".black-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#000'});
    });
    
    $(".green-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#8fad30'});
    });
    
    $(".orange-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#DB8916'});
    });
    
    $(".red-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#c95d3b'});
    });
    
    $(".teal-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#64ADB5'});
    });
    
    $(".purple-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#5f419b'});
    });
    
    $(".yellow-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#dab800'});
    });
    
    $(".switch_wide").click(function() {
      $('#main_wrapper').css({ 'max-width': '100%', 'margin': '0 auto' });
      $('header').css({ 'max-width': '100%'});
      $('#main_wrapper').css({'box-shadow': '0px 0px 3px 0px black'});
      $('.bg_patterns_wrap').css({ 'display': 'none'});
    });

    $(".switch_boxed").click(function() {
      $('#main_wrapper').css({ 'max-width': '1080px', 'margin': '0 auto'});
      $('#main_wrapper').css({'box-shadow': 'none'});
      $('header').css({ 'max-width': '1080px'});
      $('#footer').css({ 'max-width': '1080px', 'margin': '0 auto', 'position': 'relative'});
      $('.bg_patterns_wrap').css({ 'display': 'block'});

    });
      
  });