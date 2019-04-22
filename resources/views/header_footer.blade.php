<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GDTEK - Inspiring the Globe with GDTEL LED Technology</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/override.css">
        <link rel="stylesheet" type="text/css" href="/css/adrian_css.css">

        <script src="/js/override.js"></script>
        
    </head>
    <body>

      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a id="nav_logo" class="navbar-brand" href="/"></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul id="nav_links" class="nav navbar-nav navbar-right">
                    <li class=""><a href="/">Home</a></li>
                    <li class="hoverLEDBasics"><a href="/">LED Basics</a></li>
                    <li class="hoverabout"><a href="/about">About</a></li>
                    <li class=""><a href="/financing">Financing</a></li>
                    <li class=""><a href="/services">FAQ</a></li>
                   <!--  <li class=""><a href="/login">Login</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="LEDBasics">
            <div class="row">
              <div class="container">
                <div class="col-md-4">
                  <div class="row">
                    <h4><a style="color: #000;">LED Bulb Types</a></h4>
                    <h5><a>Home</a> / <a>LED Basics</a> / <a style="color: #125876">LED Bulb Types</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="bulb_pic"></div>
                    </div>
                    <div class="col-sm-6">
                      <h5>SMD vs DIP</h5>
                      <p>There are two main bulb types used to display images on LED screens: DIP and SMD. Here are a few main variations on the key characteristics.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h4><a style="color: #000;">Water Proofing</a></h4>
                    <h5><a>Home</a> / <a>LED Basics</a> / <a style="color: #125876">Water Proofing</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="waterproofing"></div>
                    </div>
                    <div class="col-sm-6">
                      <h5>Water Proofing</h5>
                      <p>Our Led panels are all kept at a high standard of IP66 waterproofing. This allows us to have confidence that our panels can easily withstand all weather conditions rain or shine.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h4><a style="color: #000;">Choosing Your Sign</a></h4>
                    <h5><a>Home</a> / <a>LED Basics</a> / <a style="color: #125876">Choosing Your Sign</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="sign"></div>
                    </div>
                    <div class="col-sm-6">
                      <h5>Selecting the Right Sign</h5>
                      <p>Choosing the right sized LED model with proper resolution for your business depends on a few key questions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nav_about">
            <div class="row">
              <div class="container">
                <div class="col-md-6">
                  <div class="col-sm-12">
                    <div class="row">
                      <h4><a href="/mission_statement" style="color: #000;">Mission Statement</a></h4>
                      <h5><a href="/">Home</a> / <a href="/about">About</a> / <a href="/mission_statement" style="color: #125876">Mission Statement</a>
                    </div>
                    <div class="row">
                      <p>“Uphold steadfast faith, defend highest integrity, maintain exceptional quality, pursue endless advancement. Empower our world with efficiency and versatility.” </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-sm-12">
                    <div class="row">
                      <h4><a href="our_team" style="color: #000;">Our Team</a></h4>
                      <h5><a href="/">Home</a> / <a href="/about">About</a> / <a href="/our_team" style="color: #125876">Our Team</a>
                    </div>
                    <div class="row">
                      <p>We are Global Dynamic Technology (GDTECK), a U.S. distributor of indoor, outdoor and rental LED signs. We are committed to inspiring the globe through continuous innovation. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <div class="body_content"> 
           @yield('content')
        </div>


        <div class="row">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Company Logo</h4>
                            <p>Company Name</p>
                            <p>ipsum. Fusce nec sollicitudin massa. Ut sed quam vehicula, euismod quam nec, tempus tortor. Cras euismod, elit sit amet pretium consectetur, lacus nibh pellentesque sem, vitae interdum velit est vel enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4">
                            <h4>1914 translation by H. Rackham</h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man</p>
                        </div>
                        <div class="col-md-4">
                            <h4>1914 translation by H. Rackham</h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12">
                             <p>Copyright © 2018 -2019 Sample Company Inc.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
           $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('.navbar').css('background-color','#fff');
                $('.navbar').css('transition','500ms ease');
                $('.navbar').css('box-shadow','0px 10px 20px #282828');
                $('#nav_logo').css('color','#000');
                $('#nav_logo').css('transition','500ms ease');
                $('#nav_links a').css('color','#000');
                $('#nav_links a').css('transition','500ms ease');
            }else{
                $('#nav_logo').css('color','#fff');
                $('#nav_links a').css('color','#fff');
                $('.navbar').css('background-color','transparent');
                $('.navbar').css('box-shadow','none');
            }
           });
        </script>
        <script >
          $(document).ready(function(){
            $('.navbar').hover(function() {
                    $('.navbar').addClass('navbar_hover');
                    $('#nav_links a').addClass('hover_links');
                    $('#nav_logo').addClass('nav_logo_hover');
              }, function() {
                    $('.navbar').removeClass('navbar_hover');
                    $('#nav_links a').removeClass('hover_links');
                    $('#nav_logo').removeClass('nav_logo_hover');
              });
          });
        </script>
        <script>
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
        </script>
        <script>
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
        </script>
        <script>
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
        </script>
        <script>
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
        </script>
        <script>
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
        </script> -->
    </body>
</html>
