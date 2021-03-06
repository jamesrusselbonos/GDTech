<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <title>GDTEK - Inspiring the Globe with GDTEL LED Technology</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/swiper.css">
        <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

         <script src="/js/swiper.js"></script>
        <script src="/js/swiper.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/css/override.css">
        <link rel="stylesheet" type="text/css" href="/css/adrian_css.css">

        <script src="/js/override.js"></script>

    </head>
    <body style="font-family: poppins;">

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
                <ul id="nav_links" class="nav navbar-nav navbar-left">
                    <li class=""><a href="/">Home</a></li>
                    <li class="hoverLEDBasics"><a href="/led_basic">LED Basics</a></li>
                    <li class="hoverabout"><a href="/about">About</a></li>
                    <li class=""><a href="/financing">Financing</a></li>
                    <li class=""><a href="/contact_us">Contact Us</a></li>
                    <li class="hoverfaq"><a href="">FAQ</a></li>
                    
                      
                   <!--  <li class=""><a href="/login">Login</a></li>  -->
                </ul>
              <ul id="nav_links" class="nav navbar-nav navbar-right">
                   <!-- <li class="fa fa-envelope ">&nbsp;&nbsp;(971) 273-7878 &nbsp;&nbsp;&nbsp;&nbsp; </li>
                   <li><i style="font-size: 18px;" class="fa fa-envelope"></i> &nbsp;&nbsp;info@gdteckusa.com</li>
                   <li style="color: #fff;"><i class="fa fa-phone"></i>&nbsp;&nbsp;(971) 273-7878&nbsp;&nbsp;&nbsp;</li>
                   <li style="color: #fff;"><i class="fa fa-envelope"></i>&nbsp;&nbsp;info@gdteckusa.com</li> -->
                   @guest
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                       @if (Route::has('register'))
                           <!-- <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li> -->
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
                </ul>
              </div>
            </div>
          </div>
          <div class="LEDBasics">
            <div class="row">
              <div class="container">
                <div class="col-md-4">
                  <div class="row">
                    <h4><a  href="/led_bulb_types" style="color: #000;">LED Bulb Types</a></h4>
                    <h5><a href="/">Home</a> / <a  href="/led_basic">LED Basics</a> / <a href="/led_bulb_types" style="color: #125876">LED Bulb Types</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                     <!--  <div class="bulb_pic"></div> -->
                    </div>
                    <div class="col-sm-12">
                         <i style="font-size: 40px;" class="far fa-lightbulb"></i>
                      <h5>SMD vs DIP</h5>
                      <p>There are two main bulb types used to display images on LED screens: DIP and SMD. Here are a few main variations on the key characteristics.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h4><a href="/water_proofing" style="color: #000;">Water Proofing</a></h4>
                    <h5><a href="/">Home</a> / <a href="/led_basic">LED Basics</a> / <a href="/water_proofing" style="color: #125876">Water Proofing</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                    <!--   <div class="waterproofing"></div> -->
                    </div>
                    <div class="col-sm-12">
                         <i style="font-size: 40px;" class="fas fa-tint-slash"></i>
                      <h5>Water Proofing</h5>
                      <p>Our Led panels are all kept at a high standard of IP66 waterproofing. This allows us to have confidence that our panels can easily withstand all weather conditions rain or shine.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h4><a href="/choosing_your_sign" style="color: #000;">Choosing Your Sign</a></h4>
                    <h5><a>Home</a> / <a href="/led_basic">LED Basics</a> / <a href="/choosing_your_sign" style="color: #125876">Choosing Your Sign</a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                   <!--    <div class="sign"></div> -->
                    </div>
                    <div class="col-sm-12">
                       <i style="font-size: 40px;" class="fas fa-chalkboard"></i>
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

          <div class="faq">
            <div class="row">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h4>What size should i purchase?</h4>
                    <h5>There are many Factors in deciding the size sign. Please refer to our <a href="/choosing_your_sign">Choosing your sign page.</a></h5>
                  </div>
                  <div class="col-md-4">
                    <h4>How do i purchase an LED sign?</h4>
                    <h5>Very simple, Please <a data-toggle="modal" data-target="#contact_modal">Click Here</a> to get in touch with one of our Sales Teams Members.</h5>
                  </div>
                  <div class="col-md-4">
                    <h4>How do i see an in person demonstration?</h4>
                    <h5>Want to take a look at a live LED sign? No problem, contact on our team member by <a data-toggle="modal" data-target="#contact_modal">Clicking Here.</a></h5>
                  </div>
                </div>
                <div class="row">
                  </br>
                  <div class="col-md-4">
                    <h4>Do you have financing options?</h4>
                    <h5>Yes we do, We have a very simple process for approving our customers. Please refer to our <a href="/financing">Financing Page.</a></h5>
                  </div>
                  <div class="col-md-4">
                    <h4>What is the difference between SMD and DIP?</h4>
                    <h5>This is a great question. Please refer to our <a href="/led_bulb_types">LED Bulbs Page.</a></h5>
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
         <div class="col-lg-12">
           <div class="call_to_actions">
             <div class="container">
               <div class="col-md-9">
                 <h4>Get more information about our LED signs and click the button to inquire now</h4>
               </div>
               <div class="col-md-3">
                 <a style="background-color: red;" class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#contact_modal">Contact Us</a>
               </div>
             </div>
           </div>
         </div>
        </div>

        <!-- Modal -->
        <div id="contact_modal" class="modal fade " role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
              </div>
              <div style="padding-left: 30px; padding-right: 30px; margin-bottom: 30px;" class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      
                        <div class="contact_header"><h2>Want to know more?</h2></div>
                   
                    </div>
                </div>  
                 <div class="row">
                   <form>
                     <div class="row">
                       <div class="col-md-12">
                         <!-- <label for="fname">First Name</label> -->
                         <input class="textbox" type="text" id="name" name="name" placeholder="Name">
                       </div>
                     </div>
                      <div class="row">
                       <div class="col-md-6">
                         <!-- <label for="pnumber">Phone Number</label> -->
                          <input class="textbox" type="text" id="pnumber" name="phone_number" placeholder="Phone Number">
                       </div>
                       <div class="col-md-6">
                        <!-- <label for="fname">First Name</label> -->
                         <input class="textbox" type="text" id="email" name="email" placeholder="Email Address">
                       </div>
                     </div>
                      <div class="row">
                       <div class="col-md-12">
                         <!-- <label for="fname">First Name</label> -->
                          <input class="textbox" type="text" id="height" name="height" placeholder="Height of the Sign">
                       </div>
                       <div class="col-md-12">
                         <!--  <label for="fname">Last Name</label> -->
                             <input class="textbox" type="text" id="width" name="width" placeholder="Width of the Sign">
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <!-- <label for="fname">First Name</label> -->
                           <textarea class="t_textarea"  type="text" id="message" name="message" placeholder="Message..."></textarea>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-12">
                          <div class="row">
                            <div class="col-md-12">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="checkbox" name="vehicle1" value="Contact me ASAP, I'm interested in buying"> Contact me ASAP, I'm interested in buying<br>
                            <!--     <input type="checkbox" name="vehicle2" value="Car"> Request for Quotation, I am Ready to Purchase an LED Sign<br> -->
                            </div>
                          </div>
                         <div class="row">
                           <div style="padding-top: 10px;" class="col-md-12">
                               <!-- <label for="fname">First Name</label> -->
                               <input class="form_btn" type="submit" value="Submit">
                           </div>
                         </div>
                        </div> 
                     </div>
                   </form>
                 </div>
              </div>
             <!--  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div> -->
            </div>

          </div>
        </div>

        <div class="row">
           <div class="col-lg-12">
             <div class="footer">
                 <div class="container">
                     <div id="footer_content" class="row">
                         <div class="col-md-3">
                             <div class="row">
                                <a style="margin-left: 30px;" id="nav_logo_2" class="navbar-brand" href="/"></a></br>
                             </div>
                             <div class="row">
                               <p style="padding-left: 30px; margin-top: 10px;">GDTech USA</p>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <h4>LED Basics</h4>
                             <ul>
                               <li><a href="">LED Bulb Types</a></li>
                               <li><a href="">Water Proofing</a></li>
                               <li><a href="">Choosing your sign</a></li>
                             </ul>
                         </div>
                         <div  class="col-md-3">
                             <h4>About</h4>
                             <ul>
                               <li><a href="">Mission Statement</a></li>
                               <li><a href="">Our Team</a></li>
                             
                             </ul>
                         </div>
                         <div class="col-md-3">
                             <h4>GDTEK</h4>
                             <ul>
                               <div class="row">
                                 <div class="col-xs-2">
                                   <i class="fa fa-map-marker"></i>
                                 </div>
                                 <div  style="margin-left: -20px;" class="col-xs-10">
                                   <p>1855 Hawthorne Ave NE Salem, Oregon 97301</p>
                                 </div>
                               </div>
                               <div class="row">   
                                 <div class="col-xs-2">
                                   <i class="fa fa-phone"></i>
                                 </div>
                                 <div style="margin-left: -20px;" class="col-xs-10">
                                   <p>(971) 273-7878</p>
                                 </div>
                               </div>
                                <div class="row">   
                                  <div class="col-xs-2">
                                    <i class="fa fa-envelope"></i>
                                  </div>
                                  <div style="margin-left: -20px;" class="col-xs-10">
                                    <p>info@gdteckusa.com</p>
                                  </div>
                                </div>
                             </ul>
                         </div>
                     </div>
             
                     <div class="row">
                          <div style="text-align: center;" class="col-md-12">
                              <div id="social_media" class="row">
                                <ul>
                                  <li><a id="social_icon" href="https://www.facebook.com/Global-Dynamic-Technology-LLC-563053140792049/" class="fa fa-facebook"></a></li>
                                 
                                  <li><a id="social_icon" href="https://www.instagram.com/gdtechusa/" class="fa fa-instagram"></a></li>
                                  <li><a id="social_icon" href="https://www.linkedin.com/company/global-dynamic-technology-llc/about/" class="fa fa-linkedin"></a></li>
                                  <li><a id="social_icon" href="https://www.youtube.com/channel/UCgGTBloratRYwLDWiP_iBLg?disable_polymer=true" class="fa fa-youtube"></a></li>
                                </ul>
                              </div>
                              <div class="row">
                                <p style="color: #5f5f5f; padding-left: 30px; padding-right: 30px;">Copyright 2019 Global Dynamic Technology LLC. All Rights Reserved.</p>
                              </div>
                          </div>
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
        <script>
           // Carousel Auto-Cycle
             $(document).ready(function() {
               $('.carousel').carousel({
                 interval: 3000
               });

             });
        </script>
        <script >
          var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                  rotate: 50,
                  stretch: 0,
                  depth: 100,
                  modifier: 1,
                  slideShadows : true,
                },
                pagination: {
                  el: '.swiper-pagination',
                },
                navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
              });
        </script>
    </body>
</html>
