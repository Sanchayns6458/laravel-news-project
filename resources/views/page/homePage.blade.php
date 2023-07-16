@extends('index')
@section('homepage')
    <div id="content" class="site-content">
        <div id="newstation_pro_hero_banner_section">
            <div class="hero-banner-wrapper-post">
                <div id="hero-banner-01" class="tab-content active">
                    <article style="background-image: url('assets/uploads/1.jpg');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <div class="hero-full-width">
                                <span class="cat-links">
                                    <ul class="post-categories">
                                        <li><a href="#">Top News</a></li>
                                    </ul>
                                </span><!-- .cat-links -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#" tabindex="0">Orang Asli: Introduction to
                                                the ‘First People’ of Southeast Asia</a></h2>
                                    </header>
                                </div>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time class="entry-date published"
                                                datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time class="updated"
                                                datetime="2018-10-26T11:02:04+00:00">Dec 26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="min-read">5 min read</span>
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">World</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div id="hero-banner-02" class="tab-content">
                    <article style="background-image: url('assets/uploads/2.jpg');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <div class="hero-full-width">
                                <span class="cat-links">
                                    <ul class="post-categories">
                                        <li><a href="#">Technology</a></li>
                                    </ul>
                                </span><!-- .cat-links -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#" tabindex="0">The era of “Coding” is
                                                ending | Why this is VERY important?</a></h2>
                                    </header>
                                </div>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="min-read">5 min read</span>
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">World</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div id="hero-banner-03" class="tab-content">
                    <article style="background-image: url('assets/uploads/3.jpg');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <div class="hero-full-width">
                                <span class="cat-links">
                                    <ul class="post-categories">
                                        <li><a href="#">Food & Drink</a></li>
                                    </ul>
                                </span><!-- .cat-links -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#" tabindex="0">A recent study has
                                                revealed the long-term impact of drinking</a></h2>
                                    </header>
                                </div>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="min-read">5 min read</span>
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">World</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div> <!-- #newstation_pro_hero_banner_section-->

        <div id="newstation_pro_breaking_news_section" class="relative page-section">
            <div class="wrapper">
                <h2 class="news-title">Breaking News</h2>
                <div class="breaking-news-slider"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": false, "arrows":false, "autoplay": false, "draggable": true, "fade": false, "adaptiveHeight": true }'>
                    <x-BreakingNews dates='Dec 26' category='World' titles='8 Things every person should do before 8 A.M' image='assets/uploads/4.jpg' />
                    <x-BreakingNews dates='Dec 27' category='Nepal' titles='How we are working to build food systems for the future' image='assets/uploads/5.jpg' />
                    <x-BreakingNews dates='Dec 28' category='America' titles='From idea to app store: A design sprint case study' image='assets/uploads/6.jpg' />
                </div><!-- section-content -->
            </div>
        </div><!-- #newstation_pro_breaking_news_section -->

        <div id="newstation_pro_featured_news_section" class="relative page-section">
            <div class="wrapper">
                <div class="featured-news-wrapper">
                    <div class="section-header">
                        <h2 class="section-title">Featured News</h2>
                    </div>
                    <div class="featured-news-side-post featured-news-match-height">
                        <ul class="tabs featured-news-nav clear">
                            <x-FeaturNews category='Technology' titles='The era of “Coding” is ending, why this is VERY important?' dates='Dec 26' location='Pakistan' postTime='5 min read' image='assets/uploads/7.jpg'  />
                            <x-FeaturNews category='Food & Drink' titles='Should you drink coffee before or after breakfast? A recent study has the answer' dates='Dec 27' location='India' postTime='7 min read' image='assets/uploads/4.jpg'  />
                            <x-FeaturNews category='Food & Drink' titles='Why designers should move from px to rem and how to do that in Figma' dates='Dec 28' location='Ingland' postTime='3 min read' image='assets/uploads/3.jpg'  />
                            <x-FeaturNews category='Technology' titles='The era of “Coding” is ending, why this is VERY important?' dates='Dec 29' location='Astrelia' postTime='1 min read' image='assets/uploads/2.jpg'  />
                        </ul>
                    </div>

                    <div class="featured-news-post featured-news-match-height">
                        <div id="header-post-01" class="tab-content active">
                            <article style="background-image: url('assets/uploads/7.jpg');">
                                <div class="entry-container">
                                    <span class="cat-links">
                                        <ul class="post-categories">
                                            <li><a href="#" tabindex="0">Technology</a></li>
                                        </ul>
                                    </span>

                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Repeat After Me: There Are Lots of
                                                Platforms I Can Write and Be Successful On</a></h2>
                                    </header>


                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark" tabindex="0"><time
                                                    class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                    26</time><time class="updated"
                                                    datetime="2018-10-26T11:02:04+00:00">Dec 26</time></a>
                                        </span><!-- .posted-on -->
                                        <span class="min-read">5 min read</span>
                                        <span class="tag-links"><a class="url fn n" href="#"
                                                tabindex="0">World</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="featured-news-sidebar">
                    <div class="sidebar-tab">
                        <ul class="tabs section-header">
                            <li data-tab="latest" class="active">
                                <h2 class="section-title">Latest</h2>
                            </li>
                            <li data-tab="popular">
                                <h2 class="section-title">Popular</h2>
                            </li>
                            <li data-tab="hot-topic">
                                <h2 class="section-title">Hot Topic</h2>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-post">
                        <div id="latest" class="tab-content active">
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='sidebar-post-wrapper' />
                        </div>

                        <div id="popular" class="tab-content">
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='sidebar-post-wrapper' />
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='sidebar-post-wrapper' />
                        </div>

                        <div id="hot-topic" class="tab-content">
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='sidebar-post-wrapper' />
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- #newstation_pro_featured_news_section -->

        <div id="newstation_pro_top_politician_section" class="relative page-section same-background">
            <div class="wrapper">
                <div class="section-header">
                    <h2 class="section-title">Top Politician</h2>
                    <a href="" class="btn">See All
                        <svg version="1.0" viewBox="0 0 14.000000 15.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path
                                    d="M80 105 l23 -25 -51 0 c-29 0 -52 -4 -52 -10 0 -5 23 -10 52 -10 l51
                            0 -24 -28 c-15 -17 -11 -15 14 7 l37 35 -27 28 c-15 15 -31 28 -37 28 -5 0 1
                            -11 14 -25z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="top-politician-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": false, "arrows":false, "autoplay": false, "draggable": true, "fade": false, "adaptiveHeight": true }'>
                    <x-TopPolitician 
                        name='Sanchay Updh' 
                        category='Socialist' 
                        description='This is key to succeeding with a new blog in 2022. The most simple way of explaning it is to look for content opportunities that are low search volume...' 
                        dates='April 12' 
                        image='assets/uploads/14.jpg' 
                        postTime='5 min read'
                    />
                    <x-TopPolitician 
                        name='Sonu Gupta' 
                        category='Republican' 
                        description='This is key to succeeding with a new blog in 2022. The most simple way of explaning
                                    it is to look for content opportunities that are low search volume...' 
                        dates='April 16' 
                        image='assets/uploads/15.jpg' 
                        postTime='8 min read'
                    />
                    <x-TopPolitician 
                        name='Parash Shresth' 
                        category='Democretic' 
                        description='This is key to succeeding with a new blog in 2022. The most simple way of explaning
                                    it is to look for content opportunities that are low search volume...' 
                        dates='April 20' 
                        image='assets/uploads/16.jpg'
                        postTime='10 min read' 
                    />
                </div>
            </div>
        </div> <!-- #newstation_pro_top_politician_section -->

        <div id="newstation_pro_testimonial_section" class="relative page-section">
            <div class="wrapper">
                <div class="section-header">
                    <h2 class="section-title">Testimonials</h2>
                </div>
                <div class="testimonial-slider"
                    data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": false, "arrows":false, "autoplay": false, "draggable": true, "fade": false, "adaptiveHeight": true }'>
                    <x-TestimonialSlider 
                        title='“It took me 15 years to discover I had no talent for writing, but I could not give it up because by that time I was too famous."'
                        date='Dec 26'
                        postedBy='Karun Benchley'
                    />
                    <x-TestimonialSlider 
                        title='“It took me 16 years to discover I had no talent for writing, but I could not give it up because by that time I was too famous."'
                        date='Dec 22'
                        postedBy='Sanchay Upadhyay'
                    />
                    <x-TestimonialSlider 
                        title='“It took me 16 years to discover I had no talent for writing, but I could not give it up because by that time I was too famous."'
                        date='Dec 22'
                        postedBy='Sanchay Upadhyay'
                    />
                </div>
            </div>
        </div> <!-- #newstation_pro_top_politician_section -->

        <div id="main-post-wrapper" class="wrapper">
            <aside id="left-sidebar" class="widget-area" role="complementary">
                <section id="about-us" class="widget widget_about_us">
                    <div class="widget-header">
                        <h2 class="widget-title">About Us</h2>
                    </div><!-- .widget-header -->

                    <ul class="about-us-post">
                        <x-NewsAuthor 
                            image='assets/uploads/17.jpg'
                            name='August Parker'
                            desc='This is key to succeeding with a new blog in 2022. The most simple way of explaning it is to look.'
                            facebook='http://fb.com'
                            twitter='twitter.com'
                            pinterest='pinterest.com'
                        />
                    </ul>
                </section><!-- #about-us -->

                <section id="video-news" class="widget widget_video_news">
                    <div class="widget-header">
                        <h2 class="widget-title">Video News</h2>
                    </div><!-- .widget-header -->

                    <ul class="video-news-post">
                        <li>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The Best Coding Advice I Was Ever Given
                                            copy</a></h2>
                                </header>

                                <div class="featured-image" style="background-image: url('assets/uploads/18.jpg');">
                                    <div class="overlay"></div>
                                    <div class="video-button">
                                        <a href="https://www.youtube.com/watch?v=IMeFI0eVk2w" class="popup-video"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                </div>

                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="min-read">5 min read</span>
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>

                                <div class="entry-content">
                                    <p>The benefits of documenting what you and your people know are manifold but again
                                        these are magnified in remote.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section><!-- #Video News -->

                <section id="most-read" class="widget widget_most_read">
                    <div class="widget-header">
                        <h2 class="widget-title">Most Read</h2>
                    </div><!-- .widget-header -->

                    <ul class="most-read-post">
                        <x-FeaturNews category='Technology' titles='The era of “Coding” is ending, why this is VERY important?' dates='Dec 26' location='Pakistan' postTime='5 min read' image='assets/uploads/7.jpg'  />
                        <x-FeaturNews category='Food & Drink' titles='Should you drink coffee before or after breakfast? A recent study has the answer' dates='Dec 27' location='India' postTime='7 min read' image='assets/uploads/4.jpg'  />
                        <x-FeaturNews category='Food & Drink' titles='Why designers should move from px to rem and how to do that in Figma' dates='Dec 28' location='Ingland' postTime='3 min read' image='assets/uploads/3.jpg'  />
                        <x-FeaturNews category='Technology' titles='The era of “Coding” is ending, why this is VERY important?' dates='Dec 29' location='Astrelia' postTime='1 min read' image='assets/uploads/2.jpg'  />
                    </ul>
                </section><!-- #most-read -->

                <section id="keep-reading" class="widget widget_keep_reading">
                    <div class="widget-header">
                        <h2 class="widget-title">Keep Reading</h2>
                    </div><!-- .widget-header -->

                    <ul class="keep-reading-post">
                        <li>
                            <div class="entry-container">
                                <div class="featured-image" style="background-image: url('assets/uploads/20.jpg');">
                                </div>

                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Understanding the Hardest Problem in
                                            Mathematics</a></h2>
                                </header>

                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="entry-container">
                                <div class="featured-image" style="background-image: url('assets/uploads/21.jpg');">
                                </div>

                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">How to Boost SEO on Your Squarespace
                                            Website</a></h2>
                                </header>

                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="entry-container">
                                <div class="featured-image" style="background-image: url('assets/uploads/22.jpg');">
                                </div>

                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">10 Websites That Pay You for Your
                                            Writing</a></h2>
                                </header>

                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </aside><!-- #left-sidebar -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div id="world-news" class="relative">
                        <div class="section-header">
                            <h2 class="section-title">World News</h2>
                        </div><!-- .section-header -->

                        <div class="world-news-slider"
                            data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": false, "arrows":true, "autoplay": false, "draggable": true, "fade": false }'>
                            <article>
                                <div class="featured-image" style="background-image: url('assets/uploads/23.jpg');">
                                </div>
                                <div class="entry-container">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark" tabindex="0"><time
                                                    class="entry-date published"
                                                    datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                    class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                    26</time></a>
                                        </span><!-- .posted-on -->
                                        <span class="min-read">5 min read</span>
                                        <span class="tag-links"><a class="url fn n" href="#"
                                                tabindex="0">Tech</a></span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">The Best Coding Advice I Was Ever
                                                Given copy</a></h2>
                                    </header>
                                    <div class="entry-content">
                                        <p>The benefits of documenting what you and your people know are manifold but again
                                            these are magnified in remote.</p>
                                    </div>
                                </div><!-- .entry-container -->
                            </article>
                            <article>
                                <div class="featured-image" style="background-image: url('assets/uploads/24.jpg');">
                                </div>
                                <div class="entry-container">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark" tabindex="0"><time
                                                    class="entry-date published"
                                                    datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                    class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                    26</time></a>
                                        </span><!-- .posted-on -->
                                        <span class="min-read">5 min read</span>
                                        <span class="tag-links"><a class="url fn n" href="#"
                                                tabindex="0">Tech</a></span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">The Best Coding Advice I Was Ever
                                                Given copy</a></h2>
                                    </header>
                                    <div class="entry-content">
                                        <p>The benefits of documenting what you and your people know are manifold but again
                                            these are magnified in remote.</p>
                                    </div>
                                </div><!-- .entry-container -->
                            </article>
                            <article>
                                <div class="featured-image" style="background-image: url('assets/uploads/23.jpg');">
                                </div>
                                <div class="entry-container">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark" tabindex="0"><time
                                                    class="entry-date published"
                                                    datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                    class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                    26</time></a>
                                        </span><!-- .posted-on -->
                                        <span class="min-read">5 min read</span>
                                        <span class="tag-links"><a class="url fn n" href="#"
                                                tabindex="0">Tech</a></span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">The Best Coding Advice I Was Ever
                                                Given copy</a></h2>
                                    </header>
                                    <div class="entry-content">
                                        <p>The benefits of documenting what you and your people know are manifold but again
                                            these are magnified in remote.</p>
                                    </div>
                                </div><!-- .entry-container -->
                            </article>
                        </div><!-- .world-news-slider -->

                        <div class="world-news-post">
                            <div class="col-2">
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='world-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='world-news-wrapper' />
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='world-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='world-news-wrapper' />
                            </div>
                        </div>
                    </div><!-- #world-news-aection -->

                    <div id="primary-ad-1" class="relative">
                        <div class="featured-image">
                            <a href=""><img src="assets/uploads/29.jpg"></a>
                        </div>
                    </div> <!-- #primary-ad -->

                    <div id="primary-ad-2" class="relative">
                        <div class="featured-image">
                            <a href=""><img src="assets/uploads/35.jpg"></a>
                        </div>
                    </div> <!-- #primary-ad -->

                    <div id="tech-news" class="relative">
                        <div class="section-header">
                            <h2 class="section-title">Tech News</h2>
                            <a href="" class="btn">See All
                                <svg version="1.0" viewBox="0 0 14.000000 15.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)"
                                        stroke="none">
                                        <path
                                            d="M80 105 l23 -25 -51 0 c-29 0 -52 -4 -52 -10 0 -5 23 -10 52 -10 l51
                                    0 -24 -28 c-15 -17 -11 -15 14 7 l37 35 -27 28 c-15 15 -31 28 -37 28 -5 0 1
                                    -11 14 -25z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div><!-- .section-header -->

                        <div class="tech-news-1 clear">
                            <div class="tech-news-post">
                                <article>
                                    <div class="tech-news-wrapper">
                                        <div class="featured-image"
                                            style="background-image: url('assets/uploads/36.jpg');"></div>
                                        <div class="entry-container">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <span class="screen-reader-text">Posted on</span>
                                                    <a href="#" rel="bookmark" tabindex="0"><time
                                                            class="entry-date published"
                                                            datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                            class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                            26</time></a>
                                                </span><!-- .posted-on -->
                                                <span class="min-read">5 min read</span>
                                                <span class="tag-links"><a class="url fn n" href="#"
                                                        tabindex="0">Tech</a></span>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#" tabindex="0">The Best
                                                        Coding Advice I Was Ever Given copy</a></h2>
                                            </header>
                                            <div class="entry-content">
                                                <p>The benefits of documenting what you and your people know are manifold
                                                    but again these are magnified in remote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="tech-news-sidebar">
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='tech-news-wrapper' />
                            </div>
                        </div>

                        <div class="tech-news-2 clear">
                            <div class="tech-news-sidebar">
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='tech-news-wrapper' />
                                <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='tech-news-wrapper' />
                            </div>

                            <div class="tech-news-post">
                                <article>
                                    <div class="tech-news-wrapper">
                                        <div class="featured-image"
                                            style="background-image: url('assets/uploads/45.jpg');"></div>
                                        <div class="entry-container">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <span class="screen-reader-text">Posted on</span>
                                                    <a href="#" rel="bookmark" tabindex="0"><time
                                                            class="entry-date published"
                                                            datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                            class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                            26</time></a>
                                                </span><!-- .posted-on -->
                                                <span class="min-read">5 min read</span>
                                                <span class="tag-links"><a class="url fn n" href="#"
                                                        tabindex="0">Tech</a></span>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#" tabindex="0">The Best
                                                        Coding Advice I Was Ever Given copy</a></h2>
                                            </header>
                                            <div class="entry-content">
                                                <p>The benefits of documenting what you and your people know are manifold
                                                    but again these are magnified in remote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> <!-- #tech-news -->

                    <div id="primary-ad-3" class="relative">
                        <div class="featured-image">
                            <a href=""><img src="assets/uploads/46.jpg"></a>
                        </div>
                    </div> <!-- #primary-ad -->

                    <div id="sports-news">
                        <div class="section-header">
                            <h2 class="section-title">Sports News</h2>
                            <a href="" class="btn">See All
                                <svg version="1.0" viewBox="0 0 14.000000 15.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)"
                                        stroke="none">
                                        <path
                                            d="M80 105 l23 -25 -51 0 c-29 0 -52 -4 -52 -10 0 -5 23 -10 52 -10 l51
                                    0 -24 -28 c-15 -17 -11 -15 14 7 l37 35 -27 28 c-15 15 -31 28 -37 28 -5 0 1
                                    -11 14 -25z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div><!-- .section-header -->

                        <div class="sports-news-post">
                            <article>
                                <div class="sports-news-wrapper">
                                    <div class="featured-image" style="background-image: url('assets/uploads/47.jpg');">
                                    </div>
                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <a href="#" rel="bookmark" tabindex="0"><time
                                                        class="entry-date published"
                                                        datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                        class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                        26</time></a>
                                            </span><!-- .posted-on -->
                                            <span class="min-read">5 min read</span>
                                            <span class="tag-links"><a class="url fn n" href="#"
                                                    tabindex="0">Sports</a></span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#" tabindex="0">The Best Coding
                                                    Advice I Was Ever Given copy</a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p>The benefits of documenting what you and your people know are manifold but
                                                again these are magnified in remote.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="sports-news-wrapper">
                                    <div class="featured-image" style="background-image: url('assets/uploads/48.jpg');">
                                    </div>
                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <a href="#" rel="bookmark" tabindex="0"><time
                                                        class="entry-date published"
                                                        datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                        class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                        26</time></a>
                                            </span><!-- .posted-on -->
                                            <span class="min-read">5 min read</span>
                                            <span class="tag-links"><a class="url fn n" href="#"
                                                    tabindex="0">Sports</a></span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#" tabindex="0">Papers with Code
                                                    2021 : A Year in Review</a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p>The benefits of documenting what you and your people know are manifold but
                                                again these are magnified in remote.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="sports-news-wrapper">
                                    <div class="featured-image" style="background-image: url('assets/uploads/49.jpg');">
                                    </div>
                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <a href="#" rel="bookmark" tabindex="0"><time
                                                        class="entry-date published"
                                                        datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                        class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                        26</time></a>
                                            </span><!-- .posted-on -->
                                            <span class="min-read">5 min read</span>
                                            <span class="tag-links"><a class="url fn n" href="#"
                                                    tabindex="0">Sports</a></span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#" tabindex="0">10 Websites That
                                                    Pay You for Your Writing</a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p>The benefits of documenting what you and your people know are manifold but
                                                again these are magnified in remote.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="sports-news-wrapper">
                                    <div class="featured-image" style="background-image: url('assets/uploads/50.jpg');">
                                    </div>
                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <a href="#" rel="bookmark" tabindex="0"><time
                                                        class="entry-date published"
                                                        datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                        class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                        26</time></a>
                                            </span><!-- .posted-on -->
                                            <span class="min-read">5 min read</span>
                                            <span class="tag-links"><a class="url fn n" href="#"
                                                    tabindex="0">Sports</a></span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#" tabindex="0">10 Websites That
                                                    Pay You for Your Writing</a></h2>
                                        </header>
                                        <div class="entry-content">
                                            <p>The benefits of documenting what you and your people know are manifold but
                                                again these are magnified in remote.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div> <!-- #sports-news -->
                </main><!-- #main -->
            </div><!-- #primary -->

            <aside id="secondary" class="widget-area right-sidebar" role="complementary">
                <section id="recent-news" class="widget widget_recent_news">
                    <div class="widget-header">
                        <h2 class="widget-title">Recent news</h2>
                    </div><!-- .widget-header -->
                    <ul>
                        <li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='recent-news-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='recent-news-wrapper' />
                        </li><li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='recent-news-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='recent-news-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='recent-news-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='recent-news-wrapper' />
                        </li>
                    </ul>
                </section>

                <section id="slidder-news" class="widget widget_slidder_news">
                    <div class="widget-header">
                        <h2 class="widget-title">Slidder news</h2>
                    </div><!-- .widget-header -->

                    <ul class="slidder-news-post"
                        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": false, "arrows":true, "autoplay": false, "draggable": true, "fade": false, "adaptiveHeight": true }'>
                        <li style="background-image: url(assets/uploads/52.jpg);">
                            <div class="overlay"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">How Google never goes down with World
                                            Class Dev Operations</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Business</a></span>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url(assets/uploads/50.jpg);">
                            <div class="overlay"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">How Google never goes down with World
                                            Class Dev Operations</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Business</a></span>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url(assets/uploads/45.jpg);">
                            <div class="overlay"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">How Google never goes down with World
                                            Class Dev Operations</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Business</a></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>

                <section id="editors-choice" class="widget widget_editors_choice">
                    <div class="widget-header">
                        <h2 class="widget-title">Editor's Choice</h2>
                    </div><!-- .widget-header -->

                    <ul>
                        <li class="editors-choice-full-post">
                            <div class="editors-choice-wrapper">
                                <div class="featured-image" style="background-image: url('assets/uploads/53.jpg');">
                                </div>
                                <div class="entry-container">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark" tabindex="0"><time
                                                    class="entry-date published"
                                                    datetime="2018-10-24T08:24:51+00:00">Dec 26</time><time
                                                    class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                    26</time></a>
                                        </span><!-- .posted-on -->
                                        <span class="min-read">5 min read</span>
                                        <span class="tag-links"><a class="url fn n" href="#"
                                                tabindex="0">Tech</a></span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#" tabindex="0">The Best Coding
                                                Advice I Was Ever Given copy</a></h2>
                                    </header>
                                    <div class="entry-content">
                                        <p>The benefits of documenting what you and your people know are manifold but again
                                            these are magnified in remote.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="editors-choice-sub-post">
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='editors-choice-wrapper' />
                        </li>
                        <li class="editors-choice-sub-post">
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='editors-choice-wrapper' />
                        </li>
                    </ul>
                </section>

                <section id="hot-topic" class="widget widget_hot_topic">
                    <div class="widget-header">
                        <h2 class="widget-title">Hot Topic</h2>
                    </div><!-- .widget-header -->
                    <ul>
                        <li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='hot-topic-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='hot-topic-wrapper' />
                        </li><li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='hot-topic-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='hot-topic-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 24' category='Health' titles='8 Things every person should do before 8 A.M.'  image='assets/uploads/8.jpg' classes='hot-topic-wrapper' />
                        </li>
                        <li>
                            <x-SidebarPost dates='Jun 10' category='Design' titles='Design is not art, and UX is not design'  image='assets/uploads/9.jpg' classes='hot-topic-wrapper' />
                        </li>
                    </ul>
                </section>

                <section id="right-sidebar-ad" class="widget widget_right_sidebar_ad">
                    <a href="#"><img src="assets/uploads/60.jpg" alt="google-ad"></a>
                </section>
            </aside><!-- #secondary -->
        </div><!-- #main-post-wrapper -->

        <div id="newstation_pro_you_may_have_missed_section" class="relative page-section ">
            <div class="wrapper">
                <div class="section-header">
                    <h2 class="section-title">You May Have Missed</h2>
                    <a href="" class="btn">See All
                        <svg version="1.0" viewBox="0 0 14.000000 15.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path
                                    d="M80 105 l23 -25 -51 0 c-29 0 -52 -4 -52 -10 0 -5 23 -10 52 -10 l51
                            0 -24 -28 c-15 -17 -11 -15 14 7 l37 35 -27 28 c-15 15 -31 28 -37 28 -5 0 1
                            -11 14 -25z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="you-may-have-missed-post col-4">
                    <article>
                        <div class="you-may-have-missed-wrapper">
                            <div class="featured-image" style="background-image: url('assets/uploads/61.jpg');"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#" tabindex="0">The Best Coding Advice I
                                            Was Ever Given</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="you-may-have-missed-wrapper">
                            <div class="featured-image" style="background-image: url('assets/uploads/62.jpg');"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#" tabindex="0">Papers with Code 2021 : A
                                            Year in Review</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="you-may-have-missed-wrapper">
                            <div class="featured-image" style="background-image: url('assets/uploads/63.jpg');"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#" tabindex="0">10 Websites That Pay You
                                            for Your Writing</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="you-may-have-missed-wrapper">
                            <div class="featured-image" style="background-image: url('assets/uploads/64.jpg');"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#" tabindex="0">10 Websites That Pay You
                                            for Your Writing</a></h2>
                                </header>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0"><time
                                                class="entry-date published" datetime="2018-10-24T08:24:51+00:00">Dec
                                                26</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">Dec
                                                26</time></a>
                                    </span><!-- .posted-on -->
                                    <span class="tag-links"><a class="url fn n" href="#"
                                            tabindex="0">Tech</a></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div><!-- #content -->
@endsection