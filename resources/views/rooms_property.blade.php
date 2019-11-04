

 @include('elements.title')

    @include('elements.headscript')
</head>

<body>

    <div id="smoothpage" class="wrapper">

        <!-- ========== TOP MENU ========== -->
        @include('elements.top')

        <!-- ========== HEADER ========== -->
        @include('elements.header')
        
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    @foreach($property as $prop)

                    <h1>{{$prop->property_name}} Rooms</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/{{$prop->property_pretty_name}}/about">{{$prop->property_name}}</a></li>
                        <li>Rooms</li>
                    </ol>
                    @endforeach
                </div>
            </div>
        </div> 
 
        <!-- ========== MAIN ========== -->
        <main id="rooms_block_view">
           <div class="container">
              <div class="row">
                 <!-- ITEM -->
                 @foreach($rooms as $room)
                 <div class="col-md-6 col-sm-6">
                    <article class="room_block_item">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <a href="/room/{{$room->id}}" class="hover_effect h_link h_blue">
                              <?php
                                $photos = DB::table('gallery')->where('rooms_id',$room->id)->inRandomOrder()->limit(1)->get(); ?>
                              @foreach($photos as $photo)
                             <img src="/images/{{$photo->photo_dir}}/{{$photo->photo_file_nm}}" class="img-responsive" alt="Image" style="height: 180px !important;">
                             @endforeach
                             
                             </a>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="room_info">
                                <h3><a href="room.html">{{$room->room_name}}</a></h3>
                                <span>${{$room->default_price}}/ night</span>
                                <p>{{$room->description}}</p>
                                
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 @endforeach
                 
              </div>
           </div>
        </main>

         <!-- ========== FOOTER ========== -->
         @include('elements.footer')
    
    </div>

    @include('elements.footscript')

   @include('elements.revel')


</body>
</html>