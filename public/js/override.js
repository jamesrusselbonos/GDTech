
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
      $('#nav_links li').css('color','#000');
     $('#nav_links li').css('transition','500ms ease');
 }else{
     $('#nav_logo').css('color','#fff');
     $('#nav_links a').css('color','#fff');
      $('#nav_links li').css('color','#fff');
     $('.navbar').removeClass('navbar_scroll');
     $('#nav_logo').removeClass('nav_logo_scroll');
     $('.navbar').css('box-shadow','none');
 }
});

$(window).ready(function(){

	$('.navbar').hover(function() {
	        $('.navbar').addClass('navbar_hover');
	        $('#nav_links a').addClass('hover_links');
             $('#nav_links li').addClass('hover_links');
	        $('#nav_logo').addClass('nav_logo_hover');
	  }, function() {
	        $('.navbar').removeClass('navbar_hover');
	        $('#nav_links a').removeClass('hover_links');
              $('#nav_links li').removeClass('hover_links');
	        $('#nav_logo').removeClass('nav_logo_hover');
	  });

	$(function() { // < handler start
        $(".hoverLEDBasics").on({
            mouseenter: function() {
                $(".LEDBasics").stop().show();
                $(".LEDBasics").stop().css('transition', 'all 500ms ease');
            },
            mouseleave: function() {
                $(".LEDBasics").stop().hide();
                $(".LEDBasics").stop().css('transition', 'all 500ms ease');
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
                $(".nav_about").stop().css('transition', 'all 500ms ease');
            },
            mouseleave: function() {
                $(".nav_about").stop().hide();
                $(".nav_about").stop().css('transition', 'all 500ms ease');
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

    $(function() { // < handler start
        $(".hoverfaq").on({
            mouseenter: function() {
                $(".faq").stop().show();
                $(".faq").stop().css('transition', 'all 500ms ease');
            },
            mouseleave: function() {
                $(".faq").stop().hide();
                $(".faq").stop().css('transition', 'all 500ms ease');
            }
        })
    }); // < handler end
    
    $(function() { // < handler start
        $(".faq").on({
            mouseenter: function() {
                $(".faq").stop().show();
            },
            mouseleave: function() {
                $(".faq").stop().hide();
            }
        })
    }); // < handler end

    $(function() { // < handler start
        $(".led_bulb_typess").on({
            mouseenter: function() {
                $(".led_basics").stop().css('background-image','url("/img/photo-1547378526-863ec732bc0c.jpg")');
                 $(".led_basics").stop().css('transition', 'background-image 500ms ease');
            },
            mouseleave: function() {
                $(".led_basics").stop().css('background-image','url("/img/gradient-grey-white-linear-1920x1080-c2-808080-ffffff-a-15-f-14.svg")');
            }
        })
    }); // < handler end
     $(function() { // < handler start
        $(".water_proofing").on({
            mouseenter: function() {
                $(".led_basics").stop().css('background-image','url("/img/photo-1542405160221-f5b46efdb363.jpg")');
                 $(".led_basics").stop().css('transition', 'background-image 500ms ease');
            },
            mouseleave: function() {
                $(".led_basics").stop().css('background-image','url("/img/gradient-grey-white-linear-1920x1080-c2-808080-ffffff-a-15-f-14.svg")');
            }
        })
    }); // < handler end
      $(function() { // < handler start
        $(".choosing_a_sign").on({
            mouseenter: function() {
                $(".led_basics").stop().css('background-image','url("/img/night-square.jpg")');
                 $(".led_basics").stop().css('transition', 'background-image 500ms ease');
            },
            mouseleave: function() {
                $(".led_basics").stop().css('background-image','url("/img/gradient-grey-white-linear-1920x1080-c2-808080-ffffff-a-15-f-14.svg")');
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