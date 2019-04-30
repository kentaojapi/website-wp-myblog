/* change the color of article title */ 
$(document).ready(function () {
	linelength = $('.thumbnail').width();
	$line = $('.thumnail-uline');
	speed = 200;
	$(".post").hover(
	  function () {
	    $(".post-title a, .post-content p").removeClass('font-black').addClass('change-to-green');
			$line.animate({width: linelength}, speed);
	  },
		function() {
			$(".post-title a, .post-content p").removeClass("change-to-green").addClass('font-black');
			$line.animate({width: 0}, speed);
		}
	);
});

/* change header */
$(function() {
  var $window = $(window),
      $clone = $('#header-change'),
      threshold = 100;

      $window.on('scroll',function(){
        if($window.scrollTop() > threshold) {
          $clone.fadeIn();
					$clone.addClass('show-border');
        }else{
          $clone.fadeOut();
					$clone.removeClass('show-border');
        }
      });
});
