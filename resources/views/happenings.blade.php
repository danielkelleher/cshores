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
                    <h1>Local Happenings</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Happenings</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="/images/blog/blog_post1.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="/happenings/post">Example Blog Post</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="/happenings/post"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        
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
                                    <li><a href="#">Hotel Zante Rooms <span class="num_posts">51</span></a></li>
                                    <li><a href="#">Accommodation <span class="num_posts">24</span></a></li>
                                    <li><a href="#">Restaurant <span class="num_posts">9</span></a></li>
                                    <li><a href="#">Swimming Pool <span class="num_posts">12</span></a></li>
                                    <li><a href="#">Holidays in Greece <span class="num_posts">28</span></a></li>
                                    <li><a href="#">Events <span class="num_posts">5</span></a></li>
                                    <li><a href="#">News <span class="num_posts">5</span></a></li>
                                </ul>
                            </aside>
                            <aside class="widget">
                                <h4>Latest Posts</h4>
                                <div class="latest_posts">
                                    <!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/blog/thumb1.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Live your myth in Greece</a></h6>
                                            <span><i class="fa fa-calendar"></i>23/11/2017</span>
                                        </div>
                                    </article>
                                    <!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/blog/thumb2.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                            <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                        </div>
                                    </article>
                                    <!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/blog/thumb3.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/blog/thumb4.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/blog/thumb5.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">10 things you should know</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>Tags</h4>
                                <div class="tagcloud clearfix">
                                    <a href="#"><span class="tag">Hotel Zante</span><span class="num">12</span></a>
                                    <a href="#"><span class="tag">HOLIDAYS</span><span class="num">24</span></a>
                                    <a href="#"><span class="tag">PARTY</span><span class="num">8</span></a>
                                    <a href="#"><span class="tag">GREECE</span><span class="num">4</span></a>
                                    <a href="#"><span class="tag">PARTY</span><span class="num">56</span></a>

                                    <a href="#"><span class="tag">ZAKYNTHOS</span><span class="num">12</span></a>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>ARCHIVE</h4>
                                <ul class="archive">
                                    <li><a href="#">May 2017<span class="num_posts">21</span></a></li>
                                    <li><a href="#">June 2017<span class="num_posts">24</span></a></li>
                                    <li><a href="#">July 2017<span class="num_posts">38</span></a></li>
                                    <li><a href="#">August 2017<span class="num_posts">11</span></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- ========== FOOTER ========== -->
         <!-- ========== FOOTER ========== -->
         @include('elements.footer')
        
    </div>

     @include('elements.footscript')

</body>
</html>