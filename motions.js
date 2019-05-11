/* change the color of article title */ 
$(function () {
	var ua = navigator.userAgent;
	speed = 150;
	linelength = $('.thumbnail').width();
	$(window).resize(function() {
		linelength = $('.thumbnail').width();
	});

	if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) {
		return;
	} else {
		$('.post').hover(
			function () {
				$changeobj = $(".post-title a, .post-content p", this);
				$line = $('.thumnail-uline', this);
				$changeobj.removeClass('font-black').addClass('change-to-green');
				$line.animate({width: linelength}, speed);
			},
			function() {
				$changeobj.removeClass("change-to-green").addClass('font-black');
				$line.animate({width: 0}, speed);
			}
		);
	}
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

/* for Smartphone  hamburger menu */
$(function() {
	$(".nav-toggle").click(function() {
		$('#header').toggleClass('open');
		$('.menu-area').slideToggle();
	});
});
