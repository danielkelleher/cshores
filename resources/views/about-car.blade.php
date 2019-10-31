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
        <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">

                    <h1>About Waterfront Resort</h1>
                     <span class="f_right"> <a href="{{ env('APP_URL') }}/book-now/caribbean-shores" class="button  btn_blue"><i class="fa fa-calendar"></i>BOOK ONLINE</a></span>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Waterfront Resort</li>
                         
                    </ol>

                </div>
            </div>
        </div>
    
        <!-- =========== MAIN ========== -->
        <main>
            <div class="container">
                
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div id="about">
                                <div class="main_title mt_wave a_left">
                                    <h2>About Caribbean Shores: Waterfront Resort</h2>
                                </div>
                                <p class="main_description a_left">Newly remolded vacation property with 18 hotel rooms and 4 cottages on the beautiful Indian River. The property includes a pool, large tiki hut, pier and fishing/boat dock with many moreamazoing amentiies such aspinici areas and bbq grills in the works. . Our rooms feature water views, a large king or queen size bed and queen size pull out couch.
Our cottages feature the same amazing waterfront views and are 2/2 or 1/2 with king or queen size beds and a queen size pull out couch. We are 1 mile from downtown Jensen Beach with plenty of shopping, restaurants and entertainment and just across the bridge from the Jensen Beachbeach access.<br>
 
<b>Parking onsite and free laundry available.</b>
</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div id="rooms">
                                <div class="main_title mt_wave a_left">
                                    <h2>AVAILABLE ROOMS</h2>
                                </div> 
                                     
                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                
                                                
                                                    <img src="{{ env('APP_URL') }}/images/gallery/waterfront/rooms/double-queen.jpg" class="img-responsive" alt="Image">
                                                
                                                <figcaption>
                                                    <h5>Double Queen</h5>
                                                    
                                                </figcaption>
                                            </figure>
                                        </article><br />
                                        <ul class="list-inline">
   <li class="list-inline-item"><i class="fa fa-check"></i>Maximum Capacity: 5</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Lounge area</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Dinette</li>
<li class="list-inline-item"><i class="fa fa-check"></i>2 bathrooms</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Flat screen TV</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Studio rooms</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Onsite Pool</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
</ul>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                
                                                
                                                    <img src="{{ env('APP_URL') }}/images/gallery/waterfront/rooms/king.jpg" class="img-responsive" alt="Image">
                                                
                                                <figcaption>
                                                    <h5>King</h5>
                                                    
                                                </figcaption>
                                            </figure>
                                        </article><br />
                                        <ul class="list-inline">
    <li class="list-inline-item"><i class="fa fa-check"></i>Maximum Capacity: 4</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Lounge area</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Dinette</li>
<li class="list-inline-item"><i class="fa fa-check"></i>2 bathrooms</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Flat screen TV</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Studio rooms</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Onsite Pool</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
</ul>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                
                                                
                                                    <img src="{{ env('APP_URL') }}/images/gallery/waterfront/rooms/queen.jpg" class="img-responsive" alt="Image">
                                                
                                                <figcaption>
                                                    <h5>Queen</h5>
                                                    
                                                </figcaption>
                                            </figure>
                                        </article><br />
                                        <ul class="list-inline">
    <li class="list-inline-item"><i class="fa fa-check"></i>Maximum Capacity: 2</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Lounge area</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Dinette</li>
<li class="list-inline-item"><i class="fa fa-check"></i>2 bathrooms</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Flat screen TV</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Studio rooms</li>
   <li class="list-inline-item"><i class="fa fa-check"></i>Onsite Pool</li>
<li class="list-inline-item"><i class="fa fa-check"></i>Onsite Laundry</li>
</ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
                <br />
                <div class="container">
                   <div class="row">
                    
    

                    <div class="grid gallery_items image-gallery">
                        <!-- ITEM -->
                        <?php $pictures = DB::table('gallery')->where('properties_id','1')->inRandomOrder()->limit(8)->get(); ?>
                        @foreach ($pictures as $picture) 
                        <figure class="g_item col-md-3 col-sm-6 g_swimming_pool">
                            <a href="/images/{{$picture->photo_dir}}{{$picture->photo_file_nm}}.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="/images/{{$picture->photo_dir}}{{$picture->photo_file_nm}}.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                    @endforeach
                                          
                    </div>
                </div>
            </div>
             <div class="container">
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_dark upper" href="{{ env('APP_URL') }}/caribbean-shores/photos">View Full Gallery</a>
                    </div>


                
        </main>

        <!-- ========== FOOTER ========== -->
         @include('elements.footer')
        
    </div>

     @include('elements.footscript')

</body>
</html>