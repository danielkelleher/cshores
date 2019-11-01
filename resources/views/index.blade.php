@include('elements.title')
    
   @include('elements.headscript')



</head>

<body>
    
    @include('elements.preloader')
    
    <div class="wrapper">
        
        <!-- ========== TOP MENU ========== -->
        @include('elements.top')
        <!-- ========== HEADER ========== -->
        @include('elements.header')
        <!-- ========== REVOLUTION SLIDER ========== -->
            <div id="classic_slider" class="rev_slider" style="display:none">
                <ul>
                    <!-- SLIDE NR. 1 -->
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="images/gallery/waterfront/Caribbean Shores-45s.jpg" 
                             alt="Image" 
                             title="slider_bg2"
                             data-bgposition="center center" 
                             data-bgfit="cover" 
                             data-bgrepeat="no-repeat" 
                             data-bgparallax="10" 
                             class="rev-slidebg" 
                             data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="center" 
                             data-hoffset="" 
                             data-y="120" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['60','50','40','30']" 
                             data-lineheight="['60','50','40','30']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;"><img src="images/logo-dark.png" /> </div>
                        
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             data-x="center" 
                             data-hoffset="-170" 
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="-170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;"
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             data-x="center" 
                             data-hoffset="170"
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000" 
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"  
                             data-x="center"
                             data-hoffset="170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);">
                        </div>
                       <!-- LAYER NR. 7 -->
                      <!--  <a class="tp-caption button btn_blue" 
                          href="https://hotels.cloudbeds.com/reservation/VpPS1v#checkin=2019-10-28&checkout=2019-10-29"
                          data-x="center"
                          data-hoffset="-100"
                          data-y="480" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-calendar"></i>BOOK A ROOM NOW
                        </a> -->
                       <!-- LAYER NR. 8 -->
                       <a class="tp-caption button btn_yellow " 
                          href="contact-us"
                          data-x="center" 
                          data-hoffset="0"
                          data-y="490" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW
                        </a>
                     
                    </li>
                    
                   
                    
                </ul>
            </div>
        
             <!-- ========== HORIZONTAL BOOKING FORM ========== -->
             

            <!-- ========== ABOUT & ROOMS ========== -->
            <section id="about_rooms">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div id="about">
                                <div class="main_title mt_wave a_left">
                                    <h2>Welcome to Caribbean Shores</h2>
                                </div>
                                <p class="main_description a_left">With the perfect balance of offerings between short term rentals, hotels, motels, and even long term rental options, Caribbean Shores Properties proves time and time again to be one of the most convenient ways to book a getaway on the Treasure Coast. Whether you’re trying to beat cold weather, or just looking for some time away from everyday life, Caribbean Shores Properties has just the right option for you and your family in a quality-packed, budget friendly package. Located in the heart of South Florida, just north of Palm Beach International Airport.</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div id="rooms">
                    
                                <div class="row">
                                    <div class="col-md-4">
                                        <center><a href="{{ env('APP_URL') }}/book-now/caribbean-shores" class="button btn_lg btn_blue"><i class="fa fa-calendar"></i>BOOK NOW</a></center><br />
                                        <article class="room">

                                            <figure>
                                               <figcaption>
                                                    <center><h5><a href="/caribbean-shores">Waterfront Resort</a></h5></center>
                                                    
                                                </figcaption>
                                                <a class="hover_effect h_blue h_link" href="/caribbean-shores/about">
                                                    <img src="images/gallery/waterfront/Caribbean%20Shores-57.jpg" class="img-responsive"  alt="Image">
                                                </a>
                                                
                                            </figure>
                                        </article><br />
                                        <ul class="list-inline">
   <li class="list-inline-item"><i class="fa fa-check"></i>Accomodation Type: Rooms and Cottages</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Suites</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Onsite Pool</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Cable and High Speed Internet</li>
</ul><br>

                                    </div>
                                    <div class="col-md-4">
                                        <center><a href="{{ env('APP_URL') }}/book-now/vacation-rentals" class="button btn_lg btn_blue"><i class="fa fa-calendar"></i>BOOK NOW</a></center><br />
                                        <article class="room">
                                            <figure>
                                                <figcaption>
                                                    <center><h5><a href="/vacation-rentals">Waterfront Rentals</a></h5></center>
                                                </figcaption>
                                                <a class="hover_effect h_blue h_link" href="/inland-resort/about">
                                                    <img src="images/featured/Inland-Resort.JPG"  style="height:180px !important;" class="img-responsive" alt="Image">
                                                </a>
                                                
                                            </figure>
                                        </article><br />
                                         <ul class="list-inline">
   <li class="list-inline-item"><i class="fa fa-check"></i>Accomodation Type: Apartments and Houses</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Spacious apartments</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>On the water</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Cable and High Speed Internet</li>
</ul><br>

                                    </div>
                                    <div class="col-md-4">
                                        <center><a href="{{ env('APP_URL') }}/book-now/landmark" class="button btn_lg btn_blue"><i class="fa fa-calendar"></i>BOOK NOW</a></center>
                                        <br />
                                        <article class="room">
                                            <figure>
                                               <figcaption>
                                                    <center><h5><a href="/landmark/about">Jensen Beach Motel</a></h5></center>
                                                    
                                                </figcaption>
                                                <a class="hover_effect h_blue h_link" href="/landmark/about">
                                                    <img src="images/gallery/landmark/landmark-6.JPG" class="img-responsive" style="height:180px !important;"alt="Image">
                                                </a>
                                                
                                            </figure>
                                        </article>
                                        <br />
                                         <ul class="list-inline">
   <li class="list-inline-item"><i class="fa fa-check"></i>Accomodation Type: Rooms</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Suite style rooms</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Onsite Pool</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Cable and High Speed Internet</li>
</ul><br>

                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </section> 
        
            <!-- ========== FEATURES ========== -->
            <section class="lightgrey_bg" id="features">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>AMENITIES</h2>
                    </div>
                    <p class="main_description a_center"></p>

                    <div class="row">
                        <div class="col-md-7">
                            <div data-slider-id="features" id="features_slider" class="owl-carousel">
                                <div><img src="images/Jensen.jpg" class="img-responsive" alt="Image"></div>
                                <div><img src="images/home/1.jpg" class="img" alt="Image"></div>
                                <div><img src="images/gallery/waterfront/Caribbean%20Shores-45.jpg" class="img-responsive" alt="Image"></div>
                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="owl-thumbs" data-slider-id="features">
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="flaticon-plate"></i></span>
                                    <div class="media-body">
                                        <h5>Local Activities</h5>
                                        <p>Situated in downtown Jensen Beach surrounded by the best cuisine & activities South Florida has to offer.</p>
                                    </div>
                                </div>
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="flaticon-person"></i></span>
                                    <div class="media-body">
                                        <h5>On the Water</h5>
                                        <p>Bring your boat, some friends, and experience the Intercoastal waterway.</p>
                                    </div>
                                </div>
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="flaticon-beach"></i></span>
                                    <div class="media-body">
                                        <h5>Swimming Pool</h5>
                                        <p>Relax and cool off with our beautiful pool.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== GALLERY ========== -->
            <section id="gallery" class="blue_bg">
                <div class="container">
                    <div class="main_title mt_wave mt_white a_center">
                        <h2>CARIBBEAN SHORES PROPERTIES: IN PHOTOS</h2>
                    </div> 
                        <p class="main_description md_white a_center"></p> 
                </div>
                <div id="gallery_slider" class="owl-carousel image-gallery">
                   
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="/images/gallery/waterfront/Caribbean Shores-57.jpg">
                            <img src="images/gallery/waterfront/Caribbean Shores-57.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Caribbean Shores Waterfront Resort</h4>
                           
                        </div>
                        
                    </div>
                     <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="/images/gallery/waterfront/Caribbean Shores-38.jpg">
                            <img src="/images/gallery/waterfront/Caribbean Shores-38.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Osperey Cottage</h4>
                           
                        </div>
                        
                    </div>
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="/images/gallery/landmark-f.jpg">
                            <img src="/images//gallery/landmark-f.jpg"  style="height:255px !important; width:347px !important;" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Jensen Beach Motel</h4>
                           
                        </div>
                        
                    </div>
                     <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="/images/gallery/inland-resort/Inland Resort-4.jpg">
                            <img src="/images/gallery/seagull-cottage.jpg" alt="Image" style="height:255px !important; width:347px !important;">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Seagull Cottage</h4>
                           
                        </div>
                        
                    </div>
                     <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="/images/gallery/inland-resort/Inland Resort-2.jpg">
                            <img src="/images/gallery/inland-resort/Inland Resort-2.jpg" alt="Image" style="height:255px !important; width:347px !important;">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Waterfront Resort</h4>
                           
                        </div>
                        
                    </div>
                   
                   
                </div>

                <div class="container">
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_dark upper" href="/gallery">View Full Gallery</a>
                    </div>
                </div>

            </section>

            <!-- ========== TESTIMONIALS ========== -->
            <section id="testimonials_style_2" class="grey_bg">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>OUR GUESTS LOVE US</h2>
                    </div> 
                        <p class="main_description a_center"></p> 
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>"We would stay here again!"</h3>
                                    
                                    <p>The place was really clean and well taken care of. In a quiet area but a quick Uber ride to a lot of great bars and restaurants. We would stay here again. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user1.jpg" alt="Image" syle="height:50px !important; width:100px !important;">
                                    <div class="author_info">
                                        <h5>Ashley</h5>
                                        <span class="place">Tampa, FL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>"Great for us..." </h3>
                                    
                                    <p>Great find for us. We were more than pleased. Great location, cozy with really nice yet simple decor. Will definitely come back.</p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user2.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>Lauri</h5>
                                        <span class="place">Frisco, CO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>"Highly recommend..." </h3>
                                    
                                    <p>Highly recommend. I stayed there for a long weekend and it was close to everything. Nice quiet neighborhood. Very clean room with large TV on the wall. Free laundry services if needed.</p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user3.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>Timothy</h5>
                                        <span class="place">Seymour, CT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== CONTACT ========== -->
            <section class="white_bg" id="contact">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>LOCATION - CONTACT US</h2>
                    </div> 
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map-canvas"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="contact-items">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item">
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                            <h6>Jensen Beach, Florida</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                            <h6>1-772-919-1030</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="mailto:contact@caribbeanshoresproperties.com">
                                            <div class="contact-item">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <h6>Email Us!</h6>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" name="contact-form">
                                <div id="contact-result"></div>
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Your Email Address" type="email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                                </div>
                                <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ========== SUBSCRIBE ========== -->
            <section id="subscribe" class="gradient_overlay">
                <div class="inner">
                    <div class="container">
                        <div class="main_title mt_wave mt_white a_center">
                            <h2>SIGN UP FOR EXCLUSIVE DEALS</h2>
                        </div>
                        <p class="main_description md_white a_center">Sign up with you email address below to receive deals before anyone else!</p>
                        <form id="subscribe-form" name="subscribe">
                            <div class="form-group">
                                <input type="email" name="subscribe-email" class="form-control" placeholder="Enter your email">
                                <button class="button btn_lg btn_yellow" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </form> 
                    </div>
                </div>
            </section>

            <!-- ========== FOOTER ========== -->
         @include('elements.footer')
    
    </div>

    @include('elements.footscript')

   @include('elements.revel')

</body>
</html>