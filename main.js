/* change the color of article title */ 
$(document).ready(function () {
	$(".post").hover(
	  function () {
	    $(".post-title a, .post-content p").removeClass('font-black').addClass('change-to-green');
	  },
		function() {
			$(".post-title a, .post-content p").removeClass("change-to-green").addClass('font-black');
		}
	);
});

/* change header */
/*$(function() {
	var _window = $(window),
	    _header = $('#header'),
	    headerChange = $('#header-change'),
	    headerBottom;
	
	_window.on('scroll',function(){
	    headerBottom = $('#header').height();
	    if(_window.scrollTop() > headerBottom){
	        headerChange.addClass('show');
	    }
	    else{
	        headerChange.removeClass('show');
	    }
	});
	
	_window.trigger('scroll');
});*/

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
