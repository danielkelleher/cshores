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
                    <h1>Guestbook</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Guestbook</li>
                    </ol>
                </div>
            </div>
        </div>
    
        <!-- =========== MAIN ========== -->
        <main>
           <div class="container">
             <div class="col-md-8">
            <section id="testimonials_style_2">
                        <!-- ITEM -->
                        
                       @foreach($guestbooks as $guestbook)
                           
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>{{$guestbook->title}} </h3>
                                    
                                    <p>{{$guestbook->content}}</p>

                                </div>
                                <div class="review_author">
                                    <img src="images/users/user3.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>{{$guestbook->poster_name}}</h5>
                                        <span class="place">{{$guestbook->location}}</span>
                                    </div>
                                </div>
                            </div><br />@endforeach
                             
                        
                        
                        
                
            </section>
        </div>
                 <div class="col-md-4">
                    <div class="sidebar">
                       <aside class="widget">
                                <div class="vbf">
                                    <h2 class="form_title"><i class="fa fa-edit"></i> SIGN GUESTBOOK</h2>
                                    <form id="guestbook" class="inner">
                                        <div class="form-group">
                                            <input class="form-control" name="guestbook-name" placeholder="Enter Your Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="guestbook-email" placeholder="Enter Your Email Address" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="guestbook-phone" placeholder="Enter Your Phone Number" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="guestbook-message-title" placeholder="Enter Your Title" type="text">
                                        </div>
                                       <div class="form-group">
                                            <input class="form-control" name="guestbook-message" placeholder="Enter Your Message" type="text-area">
                                        </div>
                                        <button class="button btn_lg btn_blue btn_full" type="submit">SIGN BOOK</button>
                                        
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>NEED HELP?</h4>
                                <div class="help">
                                    If you have any question please don't hesitate to contact us
                                    <div class="phone"><i class="fa  fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></div>
                                    <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:contact@site.com">contact@site.com</a> or use <a href="contact.html"> contact form</a></div>
                                </div>
                            </aside>
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