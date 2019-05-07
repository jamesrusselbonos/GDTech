@extends('header_footer')

@section('content')

<div class="row">
    <div class="led_basics">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="row " style="margin-bottom: 30px;">
                            <h1>LED BASICS</h1>
                            <a href="/">Home</a> / <a href="/led_basic">LED Basics</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a class="cat_link" href="/led_bulb_types"><div class="led_bulb_typess">
                                    <i style="font-size: 60px;" class="far fa-lightbulb"></i>
                                   <h3>LED BULB TYPES</h3> 
                                   <p class="Led_captions">SMD vs DIP Comparison</p>
                                </div></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                               <a class="cat_link" href="/water_proofing"><div class="water_proofing">
                                    <i style="font-size: 60px;" class="fas fa-tint-slash"></i>
                                    <h3>Water Proofing</h3>  
                                    <p class="Led_captions">Weather condition rain or shine</p>
                                </div> </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <a class="cat_link" href="/choosing_your_sign"><div class="choosing_a_sign">
                                    <i style="font-size: 60px;" class="fas fa-chalkboard"></i>
                                    <h3>Choosing a Sign</h3>
                                    <p class="Led_captions">Selecting the right sign</p>
                                </div> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection