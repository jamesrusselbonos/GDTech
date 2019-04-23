@extends('header_footer')

@section('content')
   
   <div class="jumbotron jumbotron-fluid">

       <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
           <source src="" data-src="/img/Times Square NYC LED Billboards.mp4" type="video/mp4">
          <!--  <source src="" data-src="https://www.youtube.com/watch?v=F1B9Fk_SgI0&list=RDMMF1B9Fk_SgI0&start_radio=1" type="video/webm">
           <source src="" data-src="https://www.youtube.com/watch?v=F1B9Fk_SgI0&list=RDMMF1B9Fk_SgI0&start_radio=1" type="video/ogg"> -->
       </video>

         <div class="container text-white">

           <h1 class="display-4">Inspiring the Globe with GDTEK Technology</h1>
           <p class="lead">We are committed to inspiring the globe through continuous innovation. Our LED panels are made with static components thus consuming less power and creating less friction. As a result, our LED signs produce less heat which reduces the likelihood of breaking down. Enjoy beautiful, vivid, clearly displayed images on our LED panels that last longer and are more reliable.</p>
           <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModalLong">Schedule Free Demo</a>

         </div>
         <!-- /.container -->
       </div>
       <!-- /.jumbotron -->

   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                   </ol>

                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                     <div class="item active">
                       <img src="/img/ball-bling-blur-568948.jpg" alt="Los Angeles">
                       <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>LA is always so much fun!</p>
                        </div>
                     </div>

                     <div class="item">
                       <img src="/img/brass-bulb-classic-1112598.jpg" alt="Chicago">
                       <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>LA is always so much fun!</p>
                        </div>
                     </div>

                     <div class="item">
                       <img src="/img/bright-bulb-close-up-266688.jpg" alt="New York">
                       <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>LA is always so much fun!</p>
                        </div>
                     </div>
                   </div>

                   <!-- Left and right controls -->
                   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#myCarousel" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                      <div class="image2">
                        <h3>Square 2></h3>
                        <p>Get more information about our LED signs and click the button to inquire now</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                      <div class="image3">
                        <h3>Square 3></h3>
                        <p>Get more information about our LED signs and click the button to inquire now</p>
                      </div>
                    </div>
               </div>
              </div>
             </div>
           </div>
           </div>
        </div>
      </div>

      <div class="row">
        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <div class="image4">
                  <h3>Square 4></h3>
                  <p>Get more information about our LED signs and click the button to inquire now</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <div class="image5">
                  <h3>Square 5></h3>
                  <p>Get more information about our LED signs and click the button to inquire now</p>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
      </div>

    <div class="contact_form">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="container">
                <div class="contact_header"><h2>Get in touch</h2></div>
            </div>
            </div>
        </div>
        <div class="col-lg-12">
          <div class="row">
              <div class="contact">
                  <div class="container">
                      <div class="col-lg-12">
                        <div class="c_form">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input class="textbox" type="text" id="fname" name="firstname" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       <!--  <label for="fname">Last Name</label> -->
                                        <input class="textbox" type="text" id="lname" name="lastname" placeholder="Last Name">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <!-- <label for="pnumber">Phone Number</label> -->
                                        <input class="textbox" type="text" id="pnumber" name="phone_number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input class="textbox" type="text" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       <!--  <label for="fname">Last Name</label> -->
                                        <input class="textbox" type="text" id="height" name="height" placeholder="Height of the Sign">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <!-- <label for="pnumber">Phone Number</label> -->
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
                                         <div class="col-md-6">
                                             <!-- <label for="fname">First Name</label> -->
                                             <input type="checkbox" name="vehicle1" value="Bike"> Contact me I am Interested in Purchasing<br>
                                             <input type="checkbox" name="vehicle2" value="Car"> Request for Quotation, I am Ready to Purchase an LED Sign<br>
                                         </div>
                                       </div>
                                      <div class="row">
                                        <div style="padding-top: 10px;" class="col-md-6">
                                            <!-- <label for="fname">First Name</label> -->
                                            <input class="form_btn" type="submit" value="Submit">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
            <div class="location">
                <div class="row">
                   <div class="col-lg-12">
                     <div class="container">
                        <div class="col-lg-12">
                          <div class="location_content">
                              <div class="col-md-4">
                                  <h5><i class="fa fa-map-marker"></i> 1855 Hawthorne Ave. NW Salem, Oregon 97301</h5>
                              </div>
                              <div class="col-md-4">
                                 <h5><i class="fa fa-phone"></i> (971) 273-7878</h5> 
                              </div>
                              <div class="col-md-4">
                                 <h5><i class="fa fa-envelope"></i> info@gdteckusa.com</h5> 
                              </div>
                          </div>
                        </div>
                     </div> 
                   </div>
                </div>
               <div class="col-lg-12">
                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div id="map" class="map">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.5818957589277!2d-122.99279299601176!3d44.95216687612609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54bffeee879831f7%3A0xbbb53843b855d086!2s1855+Hawthorne+Ave+NE%2C+Salem%2C+OR+97301%2C+Estados+Unidos!5e0!3m2!1sfil!2sph!4v1555999404742!5m2!1sfil!2sph" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                         </div>
                        </div>
                 </div>
               </div>
        </div>
    </div>
@endsection