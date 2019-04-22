
$(window).scroll(function(){
 if ($(this).scrollTop() > 50) {
     $('.navbar').addClass('navbar_scroll');
     $('#nav_logo').addClass('nav_logo_scroll');
     $('.navbar').css('transition','500ms ease');
     $('.navbar').css('box-shadow','0px 10px 20px #282828');
     $('#nav_logo').css('color','#000');
     $('#nav_logo').css('transition','500ms ease');
     $('#nav_links a').css('color','#000');
     $('#nav_links a').css('transition','500ms ease');
 }else{
     $('#nav_logo').css('color','#fff');
     $('#nav_links a').css('color','#fff');
     $('.navbar').removeClass('navbar_scroll');
     $('#nav_logo').removeClass('nav_logo_scroll');
     $('.navbar').css('box-shadow','none');
 }
});

$(window).ready(function(){

	$('.navbar').hover(function() {
	        $('.navbar').addClass('navbar_hover');
	        $('#nav_links a').addClass('hover_links');
	        $('#nav_logo').addClass('nav_logo_hover');
	  }, function() {
	        $('.navbar').removeClass('navbar_hover');
	        $('#nav_links a').removeClass('hover_links');
	        $('#nav_logo').removeClass('nav_logo_hover');
	  });

	$(function() { // < handler start
        $(".hoverLEDBasics").on({
            mouseenter: function() {
                $(".LEDBasics").stop().show();
            },
            mouseleave: function() {
                $(".LEDBasics").stop().hide();
            }
        })
    }); // < handler end

    $(function() { // < handler start
        $(".LEDBasics").on({
            mouseenter: function() {
                $(".LEDBasics").stop().show();
            },
            mouseleave: function() {
                $(".LEDBasics").stop().hide();
            }
        })
    }); // < handler end

    $(function() { // < handler start
        $(".hoverabout").on({
            mouseenter: function() {
                $(".nav_about").stop().show();
            },
            mouseleave: function() {
                $(".nav_about").stop().hide();
            }
        })
    }); // < handler end

    $(function() { // < handler start
        $(".nav_about").on({
            mouseenter: function() {
                $(".nav_about").stop().show();
            },
            mouseleave: function() {
                $(".nav_about").stop().hide();
            }
        })
    }); // < handler end

    function deferVideo() {

        //defer html5 video loading
      $("video source").each(function() {
        var sourceFile = $(this).attr("data-src");
        $(this).attr("src", sourceFile);
        var video = this.parentElement;
        video.load();
        // uncomment if video is not autoplay
        //video.play();
      });

    }
    window.onload = deferVideo;
});