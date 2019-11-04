   @include('elements.title')

    @include('elements.headscript')
</head>

<body>
@include('elements.preloader')
    <div id="smoothpage" class="wrapper">

        <!-- ========== TOP MENU ========== -->
        @include('elements.top')

        <!-- ========== HEADER ========== -->
        @include('elements.header')

        <!-- =========== PAGE TITLE ========== -->
        @foreach($rooms as $room)
        <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1>{{ $room->room_name}}</h1>
                            <ol class="breadcrumb">
                                 <?php $property = DB::table('properties')->where('id',$room->properties_id)->first(); ?>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ env('APP_URL') }}/{{ $property->property_pretty_name }}/about">{{$property->property_name}}</a></li>
                                <li><a href="{{ env('APP_URL') }}/{{ $property->property_pretty_name }}/rooms">Rooms</a></li>
                                <li>{{$room->room_name}}</li>
                            </ol>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="price">
                                <div class="inner">
                                    ${{$room->default_price}} <span>per night</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main id="room_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider">
                            <div id="slider-larg" class="owl-carousel image-gallery">
                                <?php
                                $photos = DB::table('gallery')->where('rooms_id',$room->id)->get(); ?>
                                 @foreach($photos as $photo)
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="{{ env('APP_URL') }}/images/{{$photo->photo_dir}}/{{$photo->photo_file_nm}}" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="{{ env('APP_URL') }}/images/{{$photo->photo_dir}}/{{$photo->photo_file_nm}}" alt="Image" style="height: 500px !important;">
                                    </a>
                                </div>
                                @endforeach
                                
                            </div>
                            <div id="thumbs" class="owl-carousel">
                                 <?php
                                $photos2 = DB::table('gallery')->where('rooms_id',$room->id)->get(); ?>
                                 @foreach($photos2 as $photo2)
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="{{ env('APP_URL') }}/images/{{$photo2->photo_dir}}/{{$photo2->photo_file_nm}}" alt="Image"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="main_title mt50">
                            <h2>ABOUT <?php echo strtoupper($room->room_name); ?></h2>
                        </div>
                        <p>{{$room->description}}</p>
                        
                        <p>{{$property->description}}</p>
                        
                        <div class="main_title t_style a_left s_title mt50">
                            <div class="c_inner">
                                <h2 class="c_title">ROOM SERVICES</h2>
                            </div>
                        </div>
                        <div class="room_facilitys_list">
                            <div class="all_facility_list">
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Double Bed Available</li>
                                       
                                        <li><i class="fa fa-check"></i>6 Persons</li>
                                        <li><i class="fa fa-check"></i>Cable TV</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Free Wi-Fi</li>
                                       
                                       
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding_left">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Flat Screen Tv</li>
                                        <li><i class="fa fa-check"></i>A/C</li>
                                        <li><i class="fa fa-check"></i>Waterfront View Available</li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="similar_rooms">
                            <div class="main_title t_style5 l_blue s_title a_left">
                                <div class="c_inner">
                                    <h2 class="c_title">SIMILAR ROOMS</h2>
                                </div>
                            </div>
<!--                             <div class="row">
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="/images/rooms/single-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">€99<span> night</span></div>
                                            <figcaption>
                                                <h4><a href="/room/3">Double Room</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="/room/3" class="hover_effect h_blue h_link"><img src="/images/rooms/double-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">€129<span> night</span></div>
                                            <figcaption>
                                                <h4><a href="/room/1">Single Room </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="/room/3" class="hover_effect h_blue h_link"><img src="/images/rooms/deluxe-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">€189<span> night</span></div>
                                            <figcaption>
                                                <h4><a href="/room/3">Deluxe Room </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="vbf">
                                    <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
                                    <form id="booking-form" class="inner">
                                       
                                        <a href="{{ env('APP_URL') }}/book-now/{{ $property->property_pretty_name }}">
                                        <button class="button btn_lg btn_blue btn_full" type="submit">BOOK A ROOM NOW</button>
                                        </a>
                                    </form>
                                </div>
                            </aside>
                            @endforeach
                            <aside class="widget">
                                <h4>NEED HELP?</h4>
                                <div class="help">
                                    If you have any questions, please don't hesitate to contact us:
                                    <div class="phone"><i class="fa  fa-phone"></i><a href="tel:7729191030"> 1-772-910-1030 </a></div>
                                    <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:contact@caribbeanshoresproperties.com">contact@caribbeanshoresproperties.com</a>.</div>
                                </div>
                            </aside>
                            <!-- <aside class="widget">
                                <h4>Latest Posts</h4>
                                <div class="latest_posts">
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="/images/blog/thumb1.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Live your myth in Greece</a></h6>
                                            <span><i class="fa fa-calendar"></i>23/11/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="/images/blog/thumb2.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                            <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="/images/blog/thumb3.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="/images/blog/thumb4.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="/images/blog/thumb5.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">10 things you should know</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                </div>
                            </aside> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>

          <!-- ========== FOOTER ========== -->
        @include('elements.footer')
    </div>

    @include('elements.footscript')

</body>
</html>