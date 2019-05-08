@extends('header_footer')

@section('content')



<div class="hero-image">
     <img src="/img/photo-1542405160221-f5b46efdb363.jpg" alt="Snow" style="width:100%;max-height: 600px;">
 <div class="hero-text">
    <h1 style="font-size:35px">Contact Us</h1>
    <a href="/" style="color: #fff">Home</a> / <a href="/contact_us" style="color: #fff">Contact Us</a>
  </div>
</div>
    
  <div style="padding-top: 30px;" class="contact_form">
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
  </div>

    
@endsection