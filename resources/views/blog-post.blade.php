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
                    <h1>Example Blog  Post</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="/happenings">Happenings</a></li>
                        <li>Example Blog Post</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="blog_post">
                            <figure>
                                <a href="/images/blog/blog_post1.jpg" class="hover_effect h_lightbox h_blue" data-rel="magnific-popup">
                                    <img src="/images/blog/blog_post1.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="/happenings/post">Example Happening</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <p>Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.</p>
                                <blockquote>
                                    <i class="fa fa-quote-left"></i>
                                    <span class="quote_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit Mauris non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</span>

                                </blockquote>
                                <p> Mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <div class="meta_post">
                                    <div class="tags">
                                        <span><i class="fa fa-tags"></i> TAGS</span>
                                        <a href="#" rel="tag">Florida</a>
                                        <a href="#" rel="tag">Holidays</a>
                                        <a href="#" rel="tag">Local</a>
                                    </div>
                                    <div class="share">
                                        <span><i class="fa fa-share-alt"></i> SHARE</span>
                                        <div class="social_media">
                                            <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a class="googleplus" href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="comments">
                            <div class="main_title t_style3">
                                <h2>COMMENTS (4)</h2>
                            </div>
                            <ol class="comments_list clearfix">
                                <li class="comment single_comment">
                                    <!-- Comment -->
                                    <div class="comment-container comment-box">
                                        <a href="#" class="avatar">
                                            <img width="80" height="80" src="/images/users/user1.jpg" alt="Image">
                                        </a>
                                        <div class="comment_content">
                                            <h4 class="author_name"><a href="#">John Doe</a></h4>
                                            <a href="#comment-form" class="reply_link">Reply</a>
                                            <span class="comment_info">
                                              <i class="fa fa-calendar"></i>
                                              <a href="#">
                                                 <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at 7:56 pm</time>
                                              </a>
                                            </span>
                                            <div class="comment_said_text">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment single_comment">
                                            <!-- Comment -->
                                            <div class="comment-box">
                                                <a href="#" class="avatar">
                                                    <img width="80" height="80" src="/images/users/user2.jpg" alt="Image">
                                                </a>
                                                <div class="comment_content">
                                                    <h4 class="author_name"><a href="#">Ina Aldrich</a></h4>
                                                    <a href="#comment-form" class="reply_link">Reply</a>
                                                    <span class="comment_info">
                                                        <i class="fa fa-calendar"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">August 1, 2017 at 10:56 pm</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment single_comment">
                                                    <!-- Comment -->
                                                    <div class="comment-box">
                                                        <a href="#" class="avatar">
                                                            <img width="80" height="80" src="/images/users/user3.jpg" alt="Image">
                                                        </a>
                                                        <div class="comment_content">
                                                            <h4 class="author_name"><a href="#">William Whiten</a></h4>
                                                            <a href="#comment-form" class="reply_link">Reply</a>
                                                            <span class="comment_info">
                                                                <i class="fa fa-calendar"></i>
                                                                <a href="#">
                                                                    <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at 7:56 pm</time>
                                                                </a>
                                                            </span>
                                                            <div class="comment_said_text">
                                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ol class="children">
                                                        <li class="comment single_comment">

                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment single_comment">
                                    <!-- Comment -->
                                    <div class="comment-box">
                                        <a href="#" class="avatar">
                                            <img width="80" height="80" src="/images/users/user4.jpg" alt="Image">
                                        </a>
                                        <div class="comment_content">
                                            <h4 class="author_name"><a href="#">Amy Ellison</a></h4>
                                            <a href="#comment-form" class="reply_link">Reply</a>
                                            <span class="comment_info">
                                                <i class="fa fa-calendar"></i>
                                                <a href="#">
                                                    <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at 7:56 pm</time>
                                                </a>
                                            </span>
                                            <div class="comment_said_text">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <div class="main_title mt40">
                                <h2>LEAVE YOUR COMMENT</h2>
                            </div>
                            <div class="row">
                                <form id="comment-form" class="comment-form">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Name"> </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email"> </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Write Your Comment"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="button  btn_blue pull-right"><i class="fa fa-paper-plane-o"></i> POST YOUR COMMENT </button>
                                        <span class="a_left">*Your email address will not be published.</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="search">
                                    <form method="get" class="widget_search">
                                        <input type="search" placeholder="Start Searching...">
                                        <button class="search_btn" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>CATEGORIES</h4>
                                <ul class="categories">
                                    <li><a href="#">Caribbean Shores News <span class="num_posts">51</span></a></li>
                                    <li><a href="#">Accommodation <span class="num_posts">24</span></a></li>
                                    <li><a href="#">Restaurant <span class="num_posts">9</span></a></li>
                                    <li><a href="#">Swimming Pool <span class="num_posts">12</span></a></li>
                                    <li><a href="#">Holidays in Florida <span class="num_posts">28</span></a></li>
                                    <li><a href="#">Events <span class="num_posts">5</span></a></li>
                                    <li><a href="#">News <span class="num_posts">5</span></a></li>
                                </ul>
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