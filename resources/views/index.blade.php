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
                        <img src="images/home/slider.jpg" 
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
                       <a class="tp-caption button btn_blue" 
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
                        </a>
                       <!-- LAYER NR. 8 -->
                       <a class="tp-caption button btn_yellow " 
                          href="contact-us"
                          data-x="center" 
                          data-hoffset="108"
                          data-y="480" 
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
             <div class="hbf">
                <div class="container">
                    <div class="inner">
                        <form id="booking-form">

                          <!--   <div class="col-md-2 md_pr5">
                                <div class="form-group">
                                    <label>Your Email
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Type Your Email"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                     <label>Place
                                        <a href="#" title="Place" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select a Property"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_select">
                                        <select name="booking-roomtype" class="form-control" title="Select Place" data-header="Place">
                                            <option value="Caribbean Shores">Caribbean Shores Hotel</option>
                                            <option value="Vacation Rentals">Vacation Rentals</option>
                                            <option value="Landmark">Landmark</option>
                                            <option value="Inland Resort">Inland Resort</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 arrival_date md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                             <label>Arrival
                                                <a href="#" title="Arrival" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check In from 11:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>

                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 departure_date md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                             <label>Departure
                                                <a href="#" title="Departure" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check Out from 12:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 adults md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <label>Adults
                                                <a href="#" title="Adults" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="booking-adults" class="form-control md_noborder_right" title="Adults" data-header="Adults">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 children md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                             <label>Children
                                                <a href="#" title="Children" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="0-18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select children_select">
                                                <select name="booking-children" class="form-control" title="Children" data-header="Children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           
                             <div class="col-md-4 ">
                               <a href="/book-now/caribbean-shores"> <button type="button"  class="button  btn_blue btn_full">Book Caribbean Shores</button></a>
                                <!--<div class="advanced_form_link"> <a href="/all/search"> Advanced Search</a> </div> -->
                            </div>
                          

                             <div class="col-md-4 ">
                               <a href="/book-now/landmark"> <button type="button"  class="button  btn_blue btn_full">Book Landmark</button></a>
                                <!--<div class="advanced_form_link"> <a href="/all/search"> Advanced Search</a> </div> -->
                            </div>
                            
                             <div class="col-md-4 ">
                               <a href="/book-now/vacation-rentals"> <button type="button"  class="button  btn_blue btn_full">Book Vacation Rentals</button></a>
                                <!--<div class="advanced_form_link"> <a href="/all/search"> Advanced Search</a> </div> -->
                            </div>
                            
                            
                            
                        </form>
                    </div>
                </div>
            </div>

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
                                <div class="main_title mt_wave a_left">
                                    <h2>FEATURED PLACES</h2>
                                </div> 
                                    <p class="main_description">With multiple properties to choose from, you cannot go wrong. Check out some of our popular offerings.</p> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                
                                                <a class="hover_effect h_blue h_link" href="/caribbean-shores">
                                                    <img src="images/featured/waterfront.jpg" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="/caribbean-shores">Caribbean Shores</a></h5>
                                                    <span class="f_right"><a href="/caribbean-shores" class="button btn_xs btn_blue">VIEW</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                
                                                <a class="hover_effect h_blue h_link" href="/vacation-rentals">
                                                    <img src="images/featured/vacation-rentals.jpg" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="/vacation-rentals">Vacation Rentals</a></h5>
                                                    <span class="f_right"><a href="/vacation-rentals" class="button btn_xs btn_blue">VIEW</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                               
                                                <a class="hover_effect h_blue h_link" href="/inland-resort">
                                                    <img src="images/featured/Inland-Resort.JPG" class="img-responsive" style="height:180px !important;"alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="/inland-resort">Inland Resort</a></h5>
                                                    <span class="f_right"><a href="/inland-resort" class="button btn_xs btn_blue">VIEW </a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
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
                        <h2>COMPLIMENTARY SERVICES</h2>
                    </div>
                    <p class="main_description a_center"></p>

                    <div class="row">
                        <div class="col-md-7">
                            <div data-slider-id="features" id="features_slider" class="owl-carousel">
                                <div><img src="images/home/3.jpg" class="img-responsive" alt="Image"></div>
                                <div><img src="images/home/1.jpg" class="img" alt="Image"></div>
                                <div><img src="images/gallery/waterfront/Caribbean%20Shores-45.jpg" class="img-responsive" alt="Image"></div>
                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="owl-thumbs" data-slider-id="features">
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="flaticon-food"></i></span>
                                    <div class="media-body">
                                        <h5>Local Cuisine</h5>
                                        <p>Complimentary breakfast, situated in downtown Jensen Beach surrounded by the best cuisine South Florida has to offer.</p>
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
                        <h2>CARIBBEAN SHORES: IN PHOTOS</h2>
                    </div> 
                        <p class="main_description md_white a_center"></p> 
                </div>
                <div id="gallery_slider" class="owl-carousel image-gallery">
                    <?php  $gallery = DB::table('gallery')->orderBy('id')->limit(7)->get(); ?>
                    @foreach($gallery as $photo)
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/{{$photo->photo_dir}}/{{$photo->photo_file_nm}}.jpg">
                            <img src="images/{{$photo->photo_dir}}/{{$photo->photo_file_nm}}.jpg" alt="Image">
                        </a>
                        
                    </div>
                    @endforeach
                   
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
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user1.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>John Doe</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user2.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>Ina Aldrich</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user3.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>William W.</h5>
                                        <span class="place">Athens, Greece</span>
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
                                            <h6>1-888-123-4567</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="contact-item">
                                            
                                            <h6>contact@caribbeanshoresfl.com</h6>
                                        </div>
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
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <p class="main_description md_white a_center">Subscribe to our newsletter to receive exclusive offers and the latest news.</p>
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