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
        <div class="page_title gradient_overlay" style="background: url(/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner"> @foreach($property as $prop)
                    <h1>{{$prop->property_name}} Gallery</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/{{$prop->property_pretty_name}}">{{$prop->property_name}}</a></li>
                        <li>Photos</li>
                    </ol>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="gallery">
            <div class="container">
                <div class="grid_filters">
                    
                    <a href="/waterfront-resort/photos" class="button btn_sm btn_blue {{ request()->is('waterfront-resort/photos') ? 'active ' : '' }}">Waterfront Resort</a>
                    <a href="/jensen-beach-motel/photos" class="button btn_sm btn_blue {{ request()->is('jensen-beach-motel/photos') ? 'active ' : '' }}">Jensen Beach Motel</a>
                    <a href="/vacation-rentals/photos" class="button btn_sm btn_blue {{ request()->is('vacation-rentals/photos') ? 'active ' : '' }}">Vacation Rentals</a>
                    <a href="/waterfront-rentals/photos" class="button btn_sm btn_blue {{ request()->is('waterfront-rentals/photos') ? 'active ' : '' }}">Waterfront Rentals</a>
                   
                </div>
            </div>
            <div class="container">
                <div class="row">
                    
    

                    <div class="grid gallery_items image-gallery">
                        <!-- ITEM -->
                        @foreach ($pictures as $picture) 
                        <figure class="g_item col-md-3 col-sm-6 g_swimming_pool">
                            <a href="/images/{{$picture->photo_dir}}{{$picture->photo_file_nm}}" class="hover_effect h_lightbox h_blue">
                                <img src="/images/{{$picture->photo_dir}}{{$picture->photo_file_nm}}" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                    @endforeach
                                          
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