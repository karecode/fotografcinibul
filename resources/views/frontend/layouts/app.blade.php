<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') Fotoğrafçınıbul @show</title>

    <!-- Bootstrap -->
    <link href="/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css (blue color by default) -->
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" media="screen">

    <!-- font awesome for icons -->
    <link href="/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- flex slider css -->
    <link href="/frontend/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="/frontend/css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!-- Revolution Style-sheet -->
    <link rel="stylesheet" type="text/css" href="/frontend/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/rev-style.css">

    <!--owl carousel css-->
    <link href="/frontend/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/frontend/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--mega menu -->
    <link href="/frontend/css/yamm.css" rel="stylesheet" type="text/css">
    <!--popups css-->
    <link href="/frontend/css/magnific-popup.css" rel="stylesheet" type="text/css">


@yield('css')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="top-bar-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 hidden-xs">
                <div class="top-bar-socials">
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-facebook">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-twitter">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus">
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus">
                        <i class="fa fa-youtube"></i>
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-instagram">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-7 text-right">
                <ul class="list-inline top-dark-right">
                    <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> Support@mail.com</li>
                    <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +01 1800 453 7678</li>
                    @if(Auth::guest())
                        <li><a href="/login"><i class="fa fa-lock"></i> Giriş Yap</a></li>
                        <li><a href="/register"><i class="fa fa-user"></i> Kayıt Ol</a></li>
                    @else
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                        class="fa fa-user"></i> Çıkış Yap</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    @endif
                    <li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>
                </ul>
                <div class="search">
                    <form role="form">
                        <input type="text" class="form-control" autocomplete="off"
                               placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div><!--top-bar end here-->
<!--navigation -->
<div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="/img/logo.png" alt="ASSAN"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Sliders </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Revolution Full-width</a></li>
                                <li><a href="home-revolution-boxed.html">Revolution Boxed</a></li>
                                <li><a href="home-revolution-fullscreen.html">Revolution Fullscreen</a></li>
                                <li><a href="ken-burns.html">Ken burns Slider</a></li>
                                <li><a href="home-carousel.html">Carousel Slider</a></li>
                                <li><a href="home-flexslider.html">Flex slider</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Revolution 5 <span class="label new-label">New</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="r5-classic.html">Carousel classic</a></li>
                                <li><a href="r5-gym.html">Slider Gym</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Themes (12+) <span class="label new-label">New</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../default-template/index.html" target="_blank">Default Template</a></li>
                                <li><a href="../real-estate/index.html" target="_blank">Real Estate</a></li>
                                <li><a href="../medical/index.html" target="_blank">Medical Template</a></li>
                                <li><a href="../e-commerce/index.html" target="_blank">E-commerce</a></li>
                                <li><a href="../assan-blog/index.html" target="_blank">Blog Template</a></li>
                                <li><a href="../assan-education/index.html" target="_blank">Education Template</a></li>
                                <li><a href="../one-page/index.html" target="_blank">One page light</a></li>
                                <li><a href="../one-page/one-page-dark.html" target="_blank">One page Dark</a></li>
                                <li><a href="../assan-personal-portfolio/index.html" target="_blank">One page
                                        Personal</a></li>
                                <li><a href="../restaurant/index.html" target="_blank">Restaurant One page light</a>
                                </li>
                                <li><a href="../restaurant/restaurant-one-page-dark.html" target="_blank">Restaurant One
                                        page Dark</a></li>
                                <li><a href="../app-landing/index.html" target="_blank">App landing - I-phone</a></li>
                                <li><a href="../app-landing/index-android.html" target="_blank">App landing -
                                        Android</a></li>
                                <li><a href="../landing-page/index.html" target="_blank">Landing page <span
                                                class="label new-label">New</span></a></li>
                                <li><a href="../minimal-portfolio/index.html" target="_blank">Minimal Portfolio <span
                                                class="label new-label">New</span></a></li>
                            </ul>
                        </li>
                        <li><a href="home-parallax.html">Home - Parallax</a></li>
                        <li><a href="home-video.html">Home -Youtube Video</a></li>
                        <li><a href="home-self-video.html">Home - Video(Self-hosted) <span
                                        class="label new-label">New</span></a></li>
                        <li><a href="home-boxed.html">Home - Boxed</a></li>
                        <li><a href="home-construction.html">Home - Construction</a></li>
                        <li><a href="home-portfolio.html">Home - Portfolio</a></li>
                        <li><a href="home-events.html">Home - Events</a></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Multi level menu </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> menu level 2</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">menu level 2 </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> menu level 3</a></li>
                                        <li><a href="#"> menu level 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--menu home li end here-->
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">Portfolio <i
                                class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu multi-level" role="menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Cube Portfolio </a>
                            <ul class="dropdown-menu">
                                <li><a href="juicy-portfolio.html"> Juicy Projects</a></li>
                                <li><a href="cube-fullwidth.html"> Full Width</a></li>
                                <li><a href="cube-masonry.html"> Masonry</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Grid Text Boxed </a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-2.html"> 2 Columns</a></li>
                                <li><a href="portfolio-3.html"> 3 Columns</a></li>
                                <li><a href="portfolio-4.html"> 4 Columns</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Grid Boxed </a>
                            <ul class="dropdown-menu">
                                <li><a href="grid-portfolio-2-no-text.html">2 Columns</a></li>
                                <li><a href="grid-portfolio-3-no-text.html">3 Columns</a></li>
                                <li><a href="grid-portfolio-4-no-text.html">4 Columns</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">No space Full width </a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-full-width-2.html">2 columns</a></li>
                                <li><a href="portfolio-full-width-3.html">3 columns</a></li>
                                <li><a href="portfolio-full-width-4.html">4 columns</a></li>
                                <li><a href="portfolio-full-width-5.html">5 columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">No Space Boxed </a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-no-space-bx-2.html"> 2 Columns</a></li>
                                <li><a href="portfolio-no-space-bx-3.html"> 3 Columns</a></li>
                                <li><a href="portfolio-no-space-bx-4.html"> 4 Columns</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Portfolio Masonry </a>
                            <ul class="dropdown-menu">
                                <li><a href="masonry-portfolio-3.html"> 3 Columns</a></li>
                                <li><a href="masonry-portfolio-4.html"> 4 Columns</a></li>
                                <li><a href="masonry-portfolio-full.html"> Full Width</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Portfolio Items</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-single.html">Single item</a></li>
                                <li><a href="portfolio-single-2.html">Single item 2</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!--menu Portfolio li end here-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="blog-full.html">Blog - full width</a></li>
                        <li><a href="blog-leftimg.html">Blog - left image</a></li>
                        <li><a href="blog-sidebar.html">Blog - sidebar</a></li>
                        <li><a href="blog-2col.html">Blog - 2 column</a></li>
                        <li><a href="blog-timeline.html">Blog - Timeline</a></li>
                        <li><a href="blog-masonary.html">Blog - Masonry</a></li>
                        <li><a href="blog-single.html">Blog - Single</a></li>
                    </ul>
                </li>
                <!--menu blog li end here-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i
                                class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="me.html">About - Me</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="pricing.html">Our Pricing</a></li>
                        <li><a href="faq.html">FAQS</a></li>
                        <li><a href="email-template.html">Email Template</a></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Contact </a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.html"> Contact default</a></li>
                                <li><a href="contact-advanced.php">Contact advanced</a></li>
                                <li><a href="contact-option.php">Contact option</a></li>
                                <li><a href="contact-flat.php">Contact Flat</a></li>
                            </ul>
                        </li>
                        <li><a href="search-results.html">Search Results</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="gallery.html">Gallery</a></li>

                        <li><a href="process.html">Our Process</a></li>

                    </ul>
                </li>
                <!--menu pages li end here-->


                <!--mega menu-->
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcodes <i
                                class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <h3 class="heading">Shortcode 1</h3>
                                        <ul class="nav mega-vertical-nav">

                                            <li><a href="typography.html"><i class="fa fa-text-height"></i>
                                                    Typography</a></li>
                                            <li><a href="grid-system.html"><i class="fa fa-bars"></i> Grid System</a>
                                            </li>
                                            <li><a href="testimonials.html"><i class="fa fa-comment-o"></i> testimonials
                                                </a></li>
                                            <li><a href="tabs-accordian.html"><i class="fa fa-table"></i> tabs &
                                                    Accordions </a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-3">
                                        <h3 class="heading">Shortcode 2 </h3>
                                        <ul class="nav mega-vertical-nav">
                                            <li><a href="buttons.html"><i class="fa fa-cog"></i> Buttons</a></li>
                                            <li><a href="social-buttons.html"><i class="fa fa-share"></i> Social Buttons</a>
                                            </li>
                                            <li><a href="alerts.html"><i class="fa fa-bell"></i> Alerts </a></li>
                                            <li><a href="other-elements.html"><i class="fa fa-cogs"></i> Other Elements
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h3 class="heading">Shortcode 3</h3>
                                        <ul class="nav mega-vertical-nav">
                                            <li><a href="font-awesome.html"><i class="fa fa-flag"></i> Font Awesome
                                                    icons</a></li>
                                            <li><a href="pe-icons.html"><i class="pe-7s-like"></i> Pe icons</a></li>
                                            <li><a href="carousel-shortcodes.html"><i class="fa fa-sliders"></i>
                                                    Carousel Sliders </a></li>
                                            <li><a href="tables.html"><i class="fa fa-table"></i> Tables </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h3 class="heading">Shortcode 4</h3>
                                        <ul class="nav mega-vertical-nav">
                                            <li><a href="pricing-tables.html"><i class="fa fa-usd"></i> Pricing
                                                    tables</a></li>
                                            <li><a href="videos.html"><i class="fa fa-image"></i> Responsive videos</a>
                                            </li>
                                            <li><a href="cta.html"><i class="fa fa-map-pin"></i> call to cations </a>
                                            </li>
                                            <li><a href="maps.html"><i class="fa fa-map-marker"></i> Google maps </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li> <!--menu Features li end here-->
                <!--mega menu end-->


                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown">{{\Illuminate\Support\Facades\Auth::user()->fullname}} <i
                                    class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Headers </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Header 1 - Default</a></li>
                                    <li><a href="header-dark.html">Header 2 - dark </a></li>
                                    <li><a href="header-transparent.html">header 3 - transparent </a></li>
                                    <li><a href="header-center-logo.html">header 4 - Logo center </a></li>
                                    <li><a href="header-side-panel.html">header 5 - Side panel </a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Footers </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Footer dark - 1</a></li>
                                    <li><a href="footer-2.html">Footer dark - 2</a></li>
                                    <li><a href="footer-3.html">Footer dark - 3 </a></li>
                                    <li><a href="footer-light-1.html">Footer Light - 1</a></li>
                                    <li><a href="footer-light-2.html">Footer Light - 2</a></li>
                                    <li><a href="footer-light-3.html">Footer Light - 3 </a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Page Templates </a>
                                <ul class="dropdown-menu">
                                    <li><a href="full-width.html">Full Width</a></li>
                                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="right-sidebar.html">Right sidebar</a></li>
                                    <li><a href="both-sidebar.html">Both Sidebar</a></li>
                                    <li><a href="both-right-sidebar.html">Both Right sidebar</a></li>
                                    <li><a href="both-left-sidebar.html">Both Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Coming Soon </a>
                                <ul class="dropdown-menu">
                                    <li><a href="coming-soon-1.html">Coming soon 1</a></li>
                                    <li><a href="coming-soon-2.html">Coming soon 2</a></li>
                                    <li><a href="coming-soon-3.html">Coming soon 3</a></li>
                                </ul>
                            </li>
                            <li><a href="side-nav.html">side navigation </a></li>
                            <li><a href="maintenance-page.html">Maintenance page </a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="error.html">Error - 404</a></li>
                            <li><a href="login-ragister.html">Login / Register</a></li>
                            <li><a href="login-ragister-classic.html">Login / Register - Classic </a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="site-map.html">Site Map</a></li>
                        </ul>
                    </li><!--features-->
                @endif

                @if(Auth::guest())
                    <li class="dropdown">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Giriş Yap</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <h4>Giriş Yap</h4>

                                <div class="form-group">
                                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="email" type="email" class="form-control" name="email"
                                               placeholder="Email Adres"
                                               value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password"
                                               required placeholder="Şifre">
                                        @if ($errors->has('password'))
                                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                        @endif
                                    </div>


                                    <div class="checkbox pull-left">
                                        <label>
                                            <input type="checkbox" name="remember"> Beni Hatırla
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-theme-bg pull-right">Giriş Yap</button>
                                    <div class="clearfix"></div>
                                    <p><a href="/password/reset">Şifremi Unuttum</a></p>
                                    <hr>
                                    <p>Hesabın mı yok? <a href="/register">Hemen Kayıt Ol</a></p>
                                </div>
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--container-->
</div><!--navbar-default-->
@if($errors->any())
    <div class="alert-danger alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{$errors->first(1)}}
    </div>
@endif
@yield('content')
<div class="divide60"></div>
<footer id="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>About assan</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing
                        condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in
                        elementum purus molestie.
                    </p>
                    <ul class="list-inline footer-social">
                        <li>
                            <a href="#" class="social-icon si-dark si-gray-round si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-icon si-dark si-gray-round si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-icon si-dark si-gray-round si-colored-pinterest">
                                <i class="fa fa-pinterest"></i>
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-icon si-dark si-gray-round si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>Contact</h3>

                    <ul class="list-unstyled contact">
                        <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> vaisahali, jaipur, 302012</p>
                        </li>
                        <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">Support@designmylife
                                    .com</a></p></li>
                        <li><p><strong><i class="fa fa-phone"></i> Phone:</strong> +91 1800 2345 2132</p></li>
                        <li><p><strong><i class="fa fa-print"></i> Fax</strong> 1800 2345 2132</p></li>
                        <li><p><strong><i class="fa fa-skype"></i> Skype</strong> assan.856</p></li>

                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>Featured Work</h3>
                    <ul class="list-inline f2-work">
                        <li><a href="portfolio-single.html"><img src="img/img-1.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-2.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-3.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-4.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-5.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-6.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-7.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-8.jpg" class="img-responsive" alt=""></a>
                        </li>
                        <li><a href="portfolio-single.html"><img src="img/img-9.jpg" class="img-responsive" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam,
                    </p>
                    <form role="form" class="subscribe-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                        </div>
                    </form>
                </div>
            </div><!--footer col-->

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-btm">
                    <span>&copy;2014. Theme by Design_mylife</span>
                </div>
            </div>
        </div>
    </div>
</footer><!--default footer end here-->
<!--scripts and plugins -->
<!--must need plugin jquery-->
<script src="/frontend/js/jquery.min.js"></script>
<!--bootstrap js plugin-->
<script src="/frontend/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<script src="/frontend/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!--sticky header-->
<script type="text/javascript" src="/frontend/js/jquery.sticky.js"></script>
<!--flex slider plugin-->
<script src="/frontend/js/jquery.flexslider-min.js" type="text/javascript"></script>
<!--parallax background plugin-->
<script src="/frontend/js/jquery.stellar.min.js" type="text/javascript"></script>


<!--digit countdown plugin-->
<script src="/frontend/js/waypoints.min.js"></script>
<!--digit countdown plugin-->
<script src="/frontend/js/jquery.counterup.min.js" type="text/javascript"></script>
<!--on scroll animation-->
<script src="/frontend/js/wow.min.js" type="text/javascript"></script>
<!--owl carousel slider-->
<script src="/frontend/js/owl.carousel.min.js" type="text/javascript"></script>
<!--popup js-->
<script src="/frontend/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!--you tube player-->
<script src="/frontend/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>


<!--customizable plugin edit according to your needs-->
<script src="/frontend/js/custom.js" type="text/javascript"></script>
@yield('js')
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71323497-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
