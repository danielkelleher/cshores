<header class="fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <b>Caribbean</b> Shores
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        <li class="{{ request()->is('/') ? 'active ' : '' }}">
                            <a href="{{ env('APP_URL') }}/">HOME</a>
                           
                        </li>
                        <li class="{{ request()->is('gallery') ? 'active ' : '' }}">
                            <a href="{{ env('APP_URL') }}/gallery">GALLERY</a>
                           
                        </li>
                       <!-- <li><a href="{{ env('APP_URL') }}/guestbook">GUESTBOOK</a></li>-->
                        <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">PROPERTIES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega_menu_inner">
                                        <div class="row">
                                            <ul class="col-md-3">
                                               <a href="{{ env('APP_URL') }}/caribbean-shores/about"> <img src="{{ env('APP_URL') }}/images/gallery/waterfront/Caribbean Shores-1.jpg" class="rounded thumbnail" style="height:100px !important; width: 100px !important;" />
                                                <li class="list_title">Caribbean Shores: Waterfront Resort</li></a>
                                               

                                            </ul>
                                             <ul class="col-md-3">
                                               <a href="{{ env('APP_URL') }}/inland-resort/about"> <img src="{{ env('APP_URL') }}/images/featured/Inland-Resort.JPG" class="rounded thumbnail" style="height:100px !important; width: 100px !important;" />
                                                <li class="list_title">Caribbean Shores: Waterfront Rentals</li></a>
                                               

                                            </ul>

                                             <ul class="col-md-3">
                                               <a href="{{ env('APP_URL') }}/landmark/about"> <img src="{{ env('APP_URL') }}/images/gallery/landmark/landmark-6.JPG" class="rounded thumbnail" style="height:100px !important; width: 100px !important;" />
                                                <li class="list_title">Caribbean Shores: Jensen Beach Motel</li></a>
                                               

                                            </ul>

                                            <!--  <ul class="col-md-3">
                                               <a href="{{ env('APP_URL') }}/caribbean-shores/about"> <img src="/images/gallery/waterfront/Caribbean Shores-1.jpg" class="rounded thumbnail" style="height:100px !important; width: 100px !important;" />
                                                <li class="list_title">Caribbean Shores Hotel</li></a>
                                               

                                            </ul> -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                        <li><a href="{{ env('APP_URL') }}/contact-us">CONTACT US</a></li>
                       <!-- <li><a href="{{ env('APP_URL') }}/happenings">HAPPENINGS</a></li>-->
                        <li class="menu_button">
                            <a href="tel:7729191030" class="button btn_lrg btn_blue"><i class="fa fa-phone"></i>(772) 919-1030</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
