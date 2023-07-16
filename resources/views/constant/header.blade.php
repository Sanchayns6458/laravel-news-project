<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index</title>

    <!-- CSS LINKS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/hero-banner.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/breaking-news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/featured-news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/top-politician.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/testimonial.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/left-sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/primary.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/secondary.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/section/you-may-have-missed.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

</head>

<body class="home right-sidebar default-design -sticky dark-version">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <div id="loader">
            <div class="loader-container">
                <div id="preloader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div><!-- #loader -->

        <div class="menu-overlay"></div>

        <div class="main-menu">
            <div id="top-navigation" class="relative">
                <div class="wrapper">
                    <button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false">
                        <svg viewBox="0 0 40 40" class="icon-menu">
                            <rect y="7" width="40" height="2"></rect>
                            <rect y="19" width="40" height="2"></rect>
                            <rect y="31" width="40" height="2"></rect>
                        </svg>

                        <svg viewBox="0 0 612 612" class="icon-close">
                            <polygon
                                points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 
                            306,341.411 576.521,611.397 612,575.997 341.459,306.011">
                            </polygon>
                        </svg>
                        <span class="menu-label">Menu</span>
                    </button><!-- .menu-toggle -->

                    <nav id="secondary-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                        <ul id="secondary-menu" class="menu nav-menu" aria-expanded="false">
                            <li><a href="{{ route( 'homepage' ) }}">Home</a></li>
                            <li><a href="{{ route( 'newsCreateForm' ) }}">Create</a></li>
                            {{-- <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact us</a></li> --}}
                            {{-- <li class="contact-info">
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0">
                                            <time class="entry-date published"
                                                datetime="2018-10-24T08:24:51+00:00">Wednesday, Dec 29, 2021</time>
                                            <time class="updated" datetime="2018-10-26T11:02:04+00:00">Wednesday, Dec
                                                29, 2021</time>
                                        </a>
                                    </span><!-- .posted-on -->
                                </div><!-- .entry-meta -->
                            </li>
                            <li class="social-icons">
                                <ul class="menu">
                                    <li>
                                        <a href="www.facebook.com">
                                            <svg viewBox="0 0 96.227 96.227" class="icon-facebook">
                                                <path
                                                    d="M73.099,15.973l-9.058,0.004c-7.102,0-8.477,3.375-8.477,8.328v10.921h16.938l-0.006,17.106H55.564v43.895H37.897V52.332h-14.77V35.226h14.77V22.612C37.897,7.972,46.84,0,59.9,0L73.1,0.021L73.099,15.973L73.099,15.973z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <svg viewBox="0 0 449.956 449.956" class="icon-twitter">
                                                <path
                                                    d="M449.956,85.657c-17.702,7.614-35.408,12.369-53.102,14.279c19.985-11.991,33.503-28.931,40.546-50.819c-18.281,10.847-37.787,18.268-58.532,22.267c-18.274-19.414-40.73-29.125-67.383-29.125c-25.502,0-47.246,8.992-65.24,26.98c-17.984,17.987-26.977,39.731-26.977,65.235c0,6.851,0.76,13.896,2.284,21.128c-37.688-1.903-73.042-11.372-106.068-28.407C82.46,110.158,54.433,87.46,31.403,59.101c-8.375,14.272-12.564,29.787-12.564,46.536c0,15.798,3.711,30.456,11.138,43.97c7.422,13.512,17.417,24.455,29.98,32.831c-14.849-0.572-28.743-4.475-41.684-11.708v1.142c0,22.271,6.995,41.824,20.983,58.674c13.99,16.848,31.645,27.453,52.961,31.833c-7.995,2.091-16.086,3.138-24.269,3.138c-5.33,0-11.136-0.475-17.416-1.42c5.9,18.459,16.75,33.633,32.546,45.535c15.799,11.896,33.691,18.028,53.677,18.418c-33.498,26.262-71.66,39.393-114.486,39.393c-8.186,0-15.607-0.373-22.27-1.139c42.827,27.596,90.03,41.394,141.612,41.394c32.738,0,63.478-5.181,92.21-15.557c28.746-10.369,53.297-24.267,73.665-41.686c20.362-17.415,37.925-37.448,52.674-60.097c14.75-22.651,25.738-46.298,32.977-70.946c7.23-24.653,10.848-49.344,10.848-74.092c0-5.33-0.096-9.325-0.287-11.991C421.785,120.202,437.202,104.306,449.956,85.657z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.plus.google.com">
                                            <span class="screen-reader-text">Google Plus</span>
                                            <svg viewBox="0 0 491.858 491.858" class="icon-google-plus">
                                                <path
                                                    d="M377.472,224.957H201.319v58.718H308.79c-16.032,51.048-63.714,88.077-120.055,88.077
                                                c-69.492,0-125.823-56.335-125.823-125.824c0-69.492,56.333-125.823,125.823-125.823c34.994,0,66.645,14.289,89.452,37.346
                                                l42.622-46.328c-34.04-33.355-80.65-53.929-132.074-53.929C84.5,57.193,0,141.693,0,245.928s84.5,188.737,188.736,188.737
                                                c91.307,0,171.248-64.844,188.737-150.989v-58.718L377.472,224.957L377.472,224.957z">
                                                </path>
                                                <polygon
                                                    points="491.858,224.857 455.827,224.857 455.827,188.826 424.941,188.826 424.941,224.857 388.91,224.857 
                                                388.91,255.74 424.941,255.74 424.941,291.772 455.827,291.772 455.827,255.74 491.858,255.74 ">
                                                </polygon>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.pinterest.com">
                                            <span class="screen-reader-text">Pinterest</span>
                                            <svg viewBox="0 0 486.392 486.392" class="icon-pinterest">
                                                <path
                                                    d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
                                                C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
                                                c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
                                                c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
                                                c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
                                                c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li><!-- .social-icons --> --}}
                        </ul>

                        <div class="site-branding-wrapper">
                            <div class="site-branding">
                                <div class="site-logo">
                                    <a href="index.html"><img src="assets/uploads/logo.png" alt="Logo"></a>
                                </div><!-- .site-logo -->

                                <!-- <div id="site-identity">
                                    <h1 class="site-title"><a href="index.html">Newsstation</a></h1>
                                    <p class="site-description">New Magazine WordPress Theme</p>
                                </div> -->
                            </div>
                        </div><!-- .site-branding-wrapper -->

                        <div class="icon-wrapper">
                            <div class="contact-info">
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="#" rel="bookmark" tabindex="0">
                                            <time class="entry-date published"
                                                datetime="2018-10-24T08:24:51+00:00">Wednesday, Dec 29, 2021</time>
                                            <time class="updated" datetime="2018-10-26T11:02:04+00:00">Wednesday, Dec
                                                29, 2021</time>
                                        </a>
                                    </span><!-- .posted-on -->
                                </div><!-- .entry-meta -->
                            </div>
                            <div class="social-icons">
                                <ul class="menu">
                                    <li>
                                        <a href="www.facebook.com">
                                            <svg viewBox="0 0 96.227 96.227" class="icon-facebook">
                                                <path
                                                    d="M73.099,15.973l-9.058,0.004c-7.102,0-8.477,3.375-8.477,8.328v10.921h16.938l-0.006,17.106H55.564v43.895H37.897V52.332h-14.77V35.226h14.77V22.612C37.897,7.972,46.84,0,59.9,0L73.1,0.021L73.099,15.973L73.099,15.973z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <svg viewBox="0 0 449.956 449.956" class="icon-twitter">
                                                <path
                                                    d="M449.956,85.657c-17.702,7.614-35.408,12.369-53.102,14.279c19.985-11.991,33.503-28.931,40.546-50.819c-18.281,10.847-37.787,18.268-58.532,22.267c-18.274-19.414-40.73-29.125-67.383-29.125c-25.502,0-47.246,8.992-65.24,26.98c-17.984,17.987-26.977,39.731-26.977,65.235c0,6.851,0.76,13.896,2.284,21.128c-37.688-1.903-73.042-11.372-106.068-28.407C82.46,110.158,54.433,87.46,31.403,59.101c-8.375,14.272-12.564,29.787-12.564,46.536c0,15.798,3.711,30.456,11.138,43.97c7.422,13.512,17.417,24.455,29.98,32.831c-14.849-0.572-28.743-4.475-41.684-11.708v1.142c0,22.271,6.995,41.824,20.983,58.674c13.99,16.848,31.645,27.453,52.961,31.833c-7.995,2.091-16.086,3.138-24.269,3.138c-5.33,0-11.136-0.475-17.416-1.42c5.9,18.459,16.75,33.633,32.546,45.535c15.799,11.896,33.691,18.028,53.677,18.418c-33.498,26.262-71.66,39.393-114.486,39.393c-8.186,0-15.607-0.373-22.27-1.139c42.827,27.596,90.03,41.394,141.612,41.394c32.738,0,63.478-5.181,92.21-15.557c28.746-10.369,53.297-24.267,73.665-41.686c20.362-17.415,37.925-37.448,52.674-60.097c14.75-22.651,25.738-46.298,32.977-70.946c7.23-24.653,10.848-49.344,10.848-74.092c0-5.33-0.096-9.325-0.287-11.991C421.785,120.202,437.202,104.306,449.956,85.657z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.plus.google.com">
                                            <span class="screen-reader-text">Google Plus</span>
                                            <svg viewBox="0 0 491.858 491.858" class="icon-google-plus">
                                                <path
                                                    d="M377.472,224.957H201.319v58.718H308.79c-16.032,51.048-63.714,88.077-120.055,88.077
                                                c-69.492,0-125.823-56.335-125.823-125.824c0-69.492,56.333-125.823,125.823-125.823c34.994,0,66.645,14.289,89.452,37.346
                                                l42.622-46.328c-34.04-33.355-80.65-53.929-132.074-53.929C84.5,57.193,0,141.693,0,245.928s84.5,188.737,188.736,188.737
                                                c91.307,0,171.248-64.844,188.737-150.989v-58.718L377.472,224.957L377.472,224.957z">
                                                </path>
                                                <polygon
                                                    points="491.858,224.857 455.827,224.857 455.827,188.826 424.941,188.826 424.941,224.857 388.91,224.857 
                                                388.91,255.74 424.941,255.74 424.941,291.772 455.827,291.772 455.827,255.74 491.858,255.74 ">
                                                </polygon>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.pinterest.com">
                                            <span class="screen-reader-text">Pinterest</span>
                                            <svg viewBox="0 0 486.392 486.392" class="icon-pinterest">
                                                <path
                                                    d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
                                                C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
                                                c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
                                                c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
                                                c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
                                                c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- .social-icons -->
                        </div><!-- .icon-wrapper -->
                    </nav><!-- .main-navigation-->
                </div><!-- .wrapper -->
            </div><!-- #top-navigation -->

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding-container">
                    <div class="wrapper">
                        <div class="site-branding-wrapper">
                            <div class="site-branding">
                                <div class="site-logo">
                                    <a href="index.html"><img src="assets/uploads/logo.png" alt="Logo"></a>
                                </div><!-- .site-logo -->

                                <!-- <div id="site-identity">
                                    <h1 class="site-title"><a href="index.html">Newstation</a></h1>
                                    <p class="site-description">New Magazine WordPress Theme</p>
                                </div> -->
                            </div><!-- .site-branding-wrapper -->
                        </div><!-- .wrapper -->
                    </div><!-- .site-branding-container -->

                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <svg viewBox="0 0 40 40" class="icon-menu">
                            <rect y="7" width="40" height="2"></rect>
                            <rect y="19" width="40" height="2"></rect>
                            <rect y="31" width="40" height="2"></rect>
                        </svg>

                        <svg viewBox="0 0 612 612" class="icon-close">
                            <polygon
                                points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 
                            306,341.411 576.521,611.397 612,575.997 341.459,306.011">
                            </polygon>
                        </svg>
                        <span class="menu-label">News Category</span>
                    </button><!-- .menu-toggle -->

                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                        <div class="wrapper">
                            <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                <li><a href="{{ route( 'homepage' ) }}">Home</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                        </div><!-- .wrapper -->
                    </nav><!-- .main-navigation-->
            </header><!-- #masthead -->
        </div>
