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
                        <li><a href="{{ env('APP_URL') }}/guestbook">GUESTBOOK</a></li>
                        <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">PROPERTIES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega_menu_inner">
                                        <div class="row">
                                            <ul class="col-md-3">
                                                <li class="list_title">Caribbean Shores Hotel</li>
                                                <li><a href="{{ env('APP_URL') }}/caribbean-shores/about">About Caribbean Shores</a></li>
                                                <li><a href="{{ env('APP_URL') }}/caribbean-shores/photos">Photos</a></li>
                                                <li><a href="{{ env('APP_URL') }}/caribbean-shores/rooms">Rooms</a></li>
                                                <li><a href="{{ env('APP_URL') }}/caribbean-shores/guestbook">Guestbook</a></li>
                                                <li><a href="{{ env('APP_URL') }}/contact-us">Location and Contact</a></li>
                                                <li><a href="{{ env('APP_URL') }}/book-now/caribbean-shores">Book Now</a></li>

                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">Landmark</li>
                                                <li><a href="{{ env('APP_URL') }}/landmark/about">About Landmark</a></li>
                                                <li><a href="{{ env('APP_URL') }}/landmark/photos">Photos</a></li>
                                                <li><a href="{{ env('APP_URL') }}/landmark/rooms">Rooms</a></li>
                                                <li><a href="{{ env('APP_URL') }}/landmark/guestbook">Guestbook</a></li>
                                                <li><a href="{{ env('APP_URL') }}/contact-us">Location and Contact</a></li>
                                                <li><a href="{{ env('APP_URL') }}/book-now/landmark">Book Now</a></li>
                                                
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">Vacation Rentals</li>
                                                <li><a href="{{ env('APP_URL') }}/vacation-rentals/about">About Vacation Rentals</a></li>
                                                <li><a href="{{ env('APP_URL') }}/vacation-rentals/photos">Photos</a></li>
                                                <li><a href="{{ env('APP_URL') }}/vacation-rentals/rooms">Rooms</a></li>
                                                <li><a href="{{ env('APP_URL') }}/vacation-rentals/guestbook">Guestbook</a></li>
                                                <li><a href="{{ env('APP_URL') }}/contact-us">Location and Contact</a></li>
                                                <li><a href="/book-now/vacation-rentals">Book Now</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">Inland Resort</li>
                                                <li><a href="{{ env('APP_URL') }}/inland-resort/about">About Inland Resort</a></li>
                                                <li><a href="{{ env('APP_URL') }}/inland-resort/photos">Photos</a></li>
                                                <li><a href="{{ env('APP_URL') }}/inland-resort/rooms">Rooms</a></li>
                                                <li><a href="{{ env('APP_URL') }}/inland-resort/guestbook">Guestbook</a></li>
                                                <li><a href="{{ env('APP_URL') }}/contact-us">Location and Contact</a></li>
                                                <li><a href="{{ env('APP_URL') }}/book-now/inland-resort">Book Now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                        <li><a href="{{ env('APP_URL') }}/contact-us">CONTACT US</a></li>
                        <li><a href="{{ env('APP_URL') }}/happenings">HAPPENINGS</a></li>
                        <li class="menu_button">
                            <a href="{{ env('APP_URL') }}/book-now" class="button  btn_blue"><i class="fa fa-calendar"></i>BOOK ONLINE</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
