<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hotel Zante - Photo Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="/images/favicon-apple.png" />
    <link rel="icon" href="/images/favicon.png">

    <!-- ========== STYLESHEETS ========== -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/css/famfamfam-flags.css" rel="stylesheet" type="text/css">
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/responsive.css" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">

    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="smoothpage" class="wrapper">

        <!-- ========== TOP MENU ========== -->
        @include('elements.top')

        <!-- ========== HEADER ========== -->
        @include('elements.header')
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>Gallery</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="gallery">
            <div class="container">
                <div class="grid_filters">
                    <a href="#" data-filter="*" class="button btn_sm btn_blue active">ALL</a>
                    <a href="#" data-filter=".g_restaurant" class="button btn_sm btn_blue">Caribbean Shores</a>
                    <a href="#" data-filter=".g_island" class="button btn_sm btn_blue">Landmark Hotel</a>
                    <a href="#" data-filter=".g_swimming_pool" class="button btn_sm btn_blue">Vacation Rentals - Jensen</a>
                    <a href="#" data-filter=".g_spa" class="button btn_sm btn_blue">Sacation Rentals - Stuart</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="grid gallery_items image-gallery">
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_swimming_pool">
                            <a href="images/gallery/gallery1.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery1.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_swimming_pool">
                            <a href="images/gallery/gallery2.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery2.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_restaurant">
                            <a href="images/gallery/gallery3.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery3.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_restaurant">
                            <a href="images/gallery/gallery4.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery4.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_spa">
                            <a href="images/gallery/gallery5.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery5.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_restaurant">
                            <a href="images/gallery/gallery6.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery6.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_island">
                            <a href="images/gallery/gallery7.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery7.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_island">
                            <a href="images/gallery/gallery8.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery8.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_island">
                            <a href="images/gallery/gallery9.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery9.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_island">
                            <a href="images/gallery/gallery10.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery10.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 4 g_spa">
                            <a href="images/gallery/gallery11.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery11.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                        <!-- ITEM -->
                        <figure class="g_item col-md-3 col-sm-6 g_swimming_pool">
                            <a href="images/gallery/gallery12.jpg" class="hover_effect h_lightbox h_blue">
                                <img src="images/gallery/gallery12.jpg" class="img-responsive" alt="Image">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
        @include('elements.footer')
    </div>

    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ========== JAVASCRIPT ========== -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/js/jquery.smoothState.js"></script>
    <script type="text/javascript" src="/js/moment.min.js"></script>
    <script type="text/javascript" src="/js/morphext.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.thumbs.min.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/jPushMenu.js"></script>
    <script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/countUp.min.js"></script>
    <script type="text/javascript" src="/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

</body>

</html>