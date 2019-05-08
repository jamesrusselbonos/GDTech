@extends('header_footer')

@section('content')
   
  <div class="row">
    <div id="main_Carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
         <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item ad1 active">
      <!--     <img src="/img/slide_bg1.jpg" alt="Chania"> -->
          <div id="ad1_caption" class="carousel-caption">
          <h1 class="animated  fadeInDown delay-1s">Global Dynamic Technology</h1>
          <h2 class="animated  fadeInDown delay-1s">BRIGHTER | SHARPER | BOLDER | BETTER</h2>
          <div class="ad1_img center animated  fadeInUp delay-1s"></div>
          </div>
        </div>

        <div class="item ad2">
       <!--    <img src="/img/bg.jpg" alt="Chicago"> -->
          <div id="ad_caption" class="carousel-caption">
            <div class="row">
              <div class="col-lg-6">
                <div class="ad2_img animated  fadeInLeft delay-1s"></div>
              </div>
              <div style="padding-top: 100px;" class="col-lg-5">
                <h1 class="animated  fadeInRight delay-1s">+ 400 %</h1>
                <h2 class="animated  fadeInRight delay-1s">MORE COLORS</h2>
              </div>
            </div>
          </div>
        </div>

         <div class="item ad3">
     <!--      <img src="/img/bg.jpg" alt="Chicago"> -->
          <div  id="ad_caption" class="carousel-caption">
          <div class="row">
            <div style="padding-top: 100px;" class="col-lg-5">
              <h1 class="animated  fadeInRight delay-1s">+ 40 %</h1>
              <h2 class="animated  fadeInRight delay-1s">BRIGHTER</h2>
            </div>
              <div class="col-lg-6">
                <div class="ad3_img animated  fadeInLeft delay-1s"></div>
              </div>
            </div>
          </div>
        </div>

         <div class="item ad4">
       <!--    <img src="/img/bg.jpg" alt="Chicago"> -->
          <div   id="ad_caption" class="carousel-caption">
           <div class="row">
              <div class="col-lg-6">
                <div class="ad2_img animated  fadeInLeft delay-1s"></div>
              </div>
              <div style="padding-top: 100px;" class="col-lg-5">
                <h1 class="animated  fadeInRight delay-1s">SHARPER</h1>
                <h2 style="font-size: 40px; margin-top: -10px;" class="animated  fadeInRight delay-1s">BETTER CONTRAST</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="item ad5">
         <!--  <img src="/img/bg.jpg" alt="New York"> -->
          <div  id="ad_caption" class="carousel-caption">
           <div class="row">
            <div style="padding-top: 100px;" class="col-lg-5">
              <h1 class="animated  fadeInLeft delay-1s">ZERO</h1>
              <h2  style="font-size: 40px; margin-top: -10px;"  class="animated  fadeInLeft delay-1s">NOISE + DISTORTION</h2>
            </div>
              <div class="col-lg-6">
                <div class="ad3_img animated  fadeInRight delay-1s"></div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Left and right controls -->
      <a class="left carousel-control" href="#main_Carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#main_Carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <div class="row">
             <div class="content_2-6">
                 <div class="container">
                     <div class="col-lg-12">
                         <h2>Inspiring the Globe with GDTEK Technology</h2>
                         <p>We are committed to inspiring the globe through continuous innovation. Our LED panels are made with static components thus consuming less power and creating less friction. As a result, our LED signs produce less heat which reduces the likelihood of breaking down. Enjoy beautiful, vivid, clearly displayed images on our LED panels that last longer and are more reliable.</p>
                          <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModalLong">Schedule Free Demo</a>
                     </div>
                 </div>
             </div>
        </div>

        <div style="padding-top: 50px;" class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                   <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                           <!-- Indicators -->
                           <!-- <ol class="carousel-indicators">
                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#myCarousel" data-slide-to="1"></li>
                             <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol> -->

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
                             <div class="image2_wrapper">
                               <div class="image2">
                                  <span>
                                      <h3>Square 2</h3>
                                      <p>Get more information about our LED signs and click the button to inquire now</p>
                                  </span>
                                </div>
                             </div>
                            </div>
                          </div>
                          <div class="row">
                             <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                             <div class="image3_wrapper">
                               <div class="image3">
                                 <span>
                                      <h3>Square 3</h3>
                                      <p>Get more information about our LED signs and click the button to inquire now</p>
                                  </span>
                               </div>
                             </div>
                            </div>
                       </div>
                      </div>
                     </div>
                   </div>
                   </div>
                </div>
              </div>

              <div style="padding-bottom: 50px;" class="row">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                  <div class="container">
                    <div class="row">
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
                  </div>
                <!-- </div> -->
              </div>


      <!--   <div class="row">
          <div class="col_about_us">
            <div class="container">
              <div class="col-lg-3">
                <h1>About GDTech</h1>
              </div>
               <div class="col-lg-9">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-sm-12">
                      <p>Global Dynamic Technology (GDTEK) is dedicated to designing, manufacturing, and distributing cutting-edge technology. We are continuously expanding our innovative capabilities and pushing the limits of programmable LED signs. As an innovative leader in the design of the highest LED sign technology available, we use the best components, perform ongoing testing, and implement product enhancements. One of our current focuses in technology is our state-of-the-art LED panel designs and smart cloud-based software. For over 12 years, our manufacturing team has successfully designed, developed, manufactured and sold LED panels on four continents worldwide in over 80 countries and territories. We are a world class manufacturer with strict quality standards. GDTEK acquires leading technology from around the world. We research and develop the latest innovative technology, but we only implement the best cutting-edge technology into our product lines. We commit ourselves to always strive to produce the best, most reliable, energy efficient technology. We are inspiring the globe with GDTEK technology.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="row">
            <div class="catalog_banner">
              <div class="row">
                <div class="container">
                  <img src="/img/cat_img.png">
                </div>
              </div>
            </div>
        </div>

        <div class="row">
           <div class="catalog_processor">
             <div class="row">
               <div class="container">
               <div class="row">
                <div class="col-lg-12">
                  <div class="cat_header">
                     <h1>Module</h1>
                    
                  </div>
                </div>
               </div>
               <div class="row">
                 <div style="text-align: left; padding-top: 80px;" class="col-lg-3">
                  <ul>
                      <li>Stablized Signal Connector</li>
                      <li>Super Heat Dissipation</li>
                      <li>Layout & Design Produced High Contrast</li>
                      <li>Rated For All Climates</li>
                     
                   </ul>
                 </div>
                 <div class="col-lg-5">
                   <div class="processor_img2"></div>
                 </div>
                 <div style="padding-top: 200px;" class="col-lg-4">
                   <ul>
                      <li>Materials Fussion Seals Circuit</li>
                      <li>Aluminum Frame protects PCB Layout</li>
                      <li>Thermo Paste<strong> Ensure Operation Boiling Water</strong></li>
                      <li>Protection Achieves Waterproof Highest Rating of IP68</strong></li>
                      <li><strong>Fire Rating Protection</strong></li>
                   </ul>
                 </div>
               </div>
               </div>
             </div>
           </div>
        </div>
            
            <hr>
            
            <div class="row">
           <div class="catalog_processor">
             <div class="row">
               <div class="container">
               <div class="row">
                <div class="col-lg-12">
                  <div class="cat_header">
                     <h1> Processor</h1>
                    <h4>ADVANCED &bull; STABLE &bull; SMART &bull; SIMPLE</h4>
                  </div>
                </div>
               </div>
               <div class="row">
                 <div style="text-align: right; padding-top: 80px;" class="col-lg-3">
                   <h3>Higher Color Spectrum & Resolution</h3>
                 </div>
                 <div class="col-lg-5">
                   <div class="processor_img1"></div>
                 </div>
                 <div style="padding-top: 200px;" class="col-lg-4">
                   <ul>
                      <li>Stable Connectors</li>
                      <li><strong>Bolder Output</strong> On Grays</li>
                      <li><strong>Increased Brightness</strong> Output</li>
                      <li>Screen Output Designed For <strong>Low Power Consumption</strong></li>
                      <li>Auto Correction Wihin Circuit</li>
                   </ul>
                 </div>
               </div>
               </div>
             </div>
           </div>
        </div>

              <hr>

                <div class="row">
           <div class="catalog_processor">
             <div class="row">
               <div class="container">
               <div class="row">
                <div class="col-lg-12">
                  <div class="cat_header">
                     <h1>Cabinet</h1>
                  <h1 style="text-align: center;font-size: 13px;">Standard Led Signs whither under Heat and Light of the sun.</h1>
                  <h1 style="text-align: center;font-size: 13px;margin-top: -10px;"><strong>Gdtect's Cabinet Remains Unchanged after 15 years without the use as a constantly failing fan system.</strong></h1>
                    
                  </div>
                </div>
               </div>
               <div class="row">
                 <div style="text-align: left; padding-top: 80px;" class="col-lg-3">
                  <div class="row">
                            
                            
                            <div class="col-md-6_6"> <p><i class="fas fa-bolt" style="font-size: 50px;margin-left: 5%"></i>LOW ENERGY</</p></div>
                     
                          </div>
                               <hr>
                   <ul>
                      <li><strong>Minimal Energy Use:</strong> The power Consumption is 25% (1/4) of Competion.</li>
                      <li><strong>No air cinditioning Rquired.</li></strong>
                     </li>
                 </div>
                 <div class="col-lg-5">   
                   <div class="processor_img2"></div>
                 </div>
                 <div style="padding-top: 200px;" class="col-lg-4">
             
                          <div class="row">
                            
                           
                             <div class="col-md-6"> <p><i class="fas fa-thermometer-empty" style="font-size: 50px;"></i> LOW HEAT</p></div>
                     
                          </div>
                               <hr>
                   <ul>
                     
                      <li><strong>Superior Cast Aluminum Case:</strong> Fully Dissipate Heat, In addition To Lamp and Module.</strong></li>
                      <li><strong>Completely Encasing</strong> For Protection Against Weather:Water (IP68
                      -Highest Waterproof Rating), Ultraviolet Light, High winds, High Temperature, and Salty Marine Environments.</strong></li>
                      
                   </ul>
                 </div>
               </div>
               </div>
             </div>
           </div>
        </div>
            
            <hr>


   <!--  <div class="contact_form">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="container">
                <div class="contact_header"><h2>Want to know more?</h2></div>
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                        <input class="textbox" type="text" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                        <input class="textbox" type="text" id="pnumber" name="phone_number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        
                                        <input class="textbox" type="text" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                        <input class="textbox" type="text" id="height" name="height" placeholder="Height of the Sign">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                        <input class="textbox" type="text" id="width" name="width" placeholder="Width of the Sign">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       
                                        <textarea class="t_textarea"  type="text" id="message" name="message" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="row">
                                         <div class="col-md-6">
                                             
                                               <input type="checkbox" name="vehicle1" value="Contact me ASAP, I'm interested in buying"> Contact me ASAP, I'm interested in buying<br>
                                             
                                         </div>
                                       </div>
                                      <div class="row">
                                        <div style="padding-top: 10px;" class="col-md-6">
                                            
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
    </div> -->
@endsection