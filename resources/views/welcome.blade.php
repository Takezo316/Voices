<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Voices</title>
        <link href="/css/theme-style.css" rel='stylesheet' type='text/css' />
        <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

        <script type="text/javascript" 	src="js/jquery.smint.js"></script>
        <script type="text/javascript">
            $(document).ready( function() {
                $('.subMenu').smint({
                    'scrollSpeed' : 1000
                });
            });
        </script>
    </head>
    <body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
    <!----start-container----->
    <div class="head-bg sTop">
        <div class="conatiner">
            <div class="col-lg-12 header-note">
                <a href="#"><img src="images/logo.png" title="Flat style" /></a>
                <h1>We are a Software Agency</h1>
                <a class="btn btn-primary big-btn" href="#">Learn More <span> </span></a>
                <br>
                <p>We give you the tools to create micro sites for your company</p>
            </div>
        </div>
    </div>
    <!----//End-container----->
    <!----start-top-nav---->
    <nav class="subMenu navbar-custom navbar-scroll-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <img src="images/nav-icon.png" title="drop-down-menu" />
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="active">
                        <a id="sTop" class="subNavBtn" href="#">Home</a>
                    </li>

                    <li class="page-scroll">
                        <a id="s1" class="subNavBtn" href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a id="s2" class="subNavBtn" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a id="s3" class="subNavBtn" href="#testimonials">Testimonials</a>
                    </li>
                    @if (Route::has('login'))
                        @if (Auth::check())
                        <li class="page-scroll">
                            <a id="s3" class="right-msg subNavBtn" href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="page-scroll">
                            <a id="s3" class="right-msg subNavBtn" href="{{ url('/register') }}">Register</a>
                        </li>
                        @endif
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="clearfix"> </div>
        </div>
        <!-- /.container -->
    </nav>
    <!----//End-top-nav---->
    <!---- start-top-grids---->
    <div class="container">
        <div class="row  section s1 top-grids">
            <div class="col-md-3 top-grid">
                <span class="icon1"> </span>
                <h2>Your own design</h2>
                <p>Create and design your own company home page and give a different feel to your contests websites.</p>
            </div>
            <div class="col-md-3 top-grid">
                <span class="icon2"> </span>
                <h2>Manage Sites</h2>
                <p>Create, edit and apply your own style to a different kind of contest.</p>
            </div>
            <div class="col-md-3 top-grid">
                <span class="icon3"> </span>
                <h2>Emailing</h2>
                <p>Mass emailing when prcessing files are finished.</p>
            </div>
            <div class="col-md-3 top-grid">
                <span class="icon4"> </span>
                <h2>All supported</h2>
                <p>Every type of audio recording is supported and then converted to .mp3</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!---- //End-top-grids---->
    <!----start-about---->
    <div class="about" id="about">
        <div class="container">
            <div class="col-md-6 divice">
                <img class="img-responsive" src="images/divice.png" title="divice" />
            </div>
            <div class="col-md-6 divice-info">
                <h3>About us</h3>
                <p>We give you the tool to create edit and administrate your company site and contests sites. The platform let your participants to upload their own audio files in any format, and the system process those files and convert them to .mp3 for portability.</p>

            </div>
        </div>
    </div>
    <!----//End-about---->
    <!----start-portfolio---->
    <div class="portfolio section s2" id="portfolio">
        <div class="container portfolio-head">
            <h3> Portfolio</h3>
            <p>This are the things you can also create.</p>
        </div>
        <!---- start-portfolio-script----->
        <script src="js/hover_pack.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <script type="text/javascript">
            $(function () {
                var filterList = {
                    init: function () {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },
                    hoverEffect: function () {
                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                            function () {
                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                            },
                            function () {
                                $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                            }
                        );

                    }

                };
                // Run the show!
                filterList.init();
            });
        </script>
        <div id="portfoliolist">
            <div class="portfolio logo1 mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p5.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p7.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="portfolio logo1 mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/p8.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
                        </div></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!----//End-portfolio---->
    <!---testmonials---->
    <div  class="testmonials section s3" id="testimonials">
        <div class="container">
            <div class="bs-example">
                <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators pagenate-icons">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <h2><img src="images/people.jpg" title="name" /></h2>
                            <div class="carousel-caption caption">
                                <h3>Dan Cederholm</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                        <div class="item">
                            <h2><img src="images/people.jpg" title="name" /></h2>
                            <div class="carousel-caption caption">
                                <h3>Dan Cederholm</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                        <div class="item">
                            <h2><img src="images/people.jpg" title="name" /></h2>
                            <div class="carousel-caption caption">
                                <h3>Dan Cederholm</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                </div>
            </div>
        </div>
    </div>
    <!---testmonials---->
    <!----start-model-box---->
    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
    <div class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content light-box-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" title="close" /></button>
                <h3>Place Yours content here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque posuere diam et est hendrerit, eget sodales lectus tincidunt. Etiam suscipit orci sapien, at molestie lorem imperdiet vitae. Fusce nunc eros, congue non hendrerit sed, lobortis scelerisque magna. Ut in nunc sem. Integer bibendum enim et erat molestie, sed interdum nisl ultricies. In hac habitasse platea dictumst. Nullam sem diam, tincidunt dapibus tellus pulvinar, pulvinar tempus dui. Integer eu faucibus arcu. Duis adipiscing commodo ipsum dapibus elementum.</p>
            </div>
        </div>
    </div>
    <!----start-model-box---->
    <!----start-contact---->
    <div class="contact section s4">
        <div class="container">
            <h4>Contact</h4>
            <p class="contact-head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            <div class="row contact-form">
                <form>
                    <div class="col-md-6 text-box">
                        <input type="text" placeholder="Name" />
                        <input type="text" placeholder="Email" />
                        <input type="text" placeholder="Subject" />
                    </div>
                    <div class="col-md-6 textarea">
                        <textarea>Message</textarea>
                    </div>
                    <div class="clearfix"> </div><br />
                    <input class="btn btn-primary btn-red-lg" type="submit" value="Submit Message" />
                </form>
            </div>
            <!----start-social-icons--->
            <div class="social-icons">
                <ul>
                    <li><a class="facebook" href="#"> <span> </span></a></li>
                    <li><a class="twitter" href="#"> <span> </span></a></li>
                    <li><a class="dribbble" href="#"> <span> </span></a></li>
                </ul>
            </div>
            <!----//End-social-icons--->
            <!----start-copy-right---->
            <div class="copy-right">
                <p>Copyright &#169; 2014 <span>Flat Style.</span> All Rights Reserved.</p>
                <p>Design by<a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
            <!----//End-copy-right---->
        </div>
    </div>
    <!----//End-contact---->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
