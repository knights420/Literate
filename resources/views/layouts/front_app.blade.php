<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Literate an School Management Software</title>
        <!-- Template CSS -->
        <link rel="stylesheet" href="/assets/frontend/css/style-starter.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <!--header-->
        <section class="w3l-header">
            <header id="site-header" class="fixed-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark stroke">
                        <a class="navbar-brand" href="index.html">
                            <span class="fa fa-pencil-square-o"></span> Literate
                        </a>
                        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {{request()->route()->uri == '/' ? 'active' : '@@home-active'}}">
                                    <a class="nav-link" href="/">Home {!! request()->route()->uri == '/' ? '<span class="sr-only">(current)</span>' : '' !!}</a>
                                </li>
                                <li class="nav-item {{request()->route()->uri == 'about' ? 'active' : '@@about-active'}}">
                                    <a class="nav-link" href="/about">About {!! request()->route()->uri == 'about' ? '<span class="sr-only">(current)</span>' : '' !!}</a>
                                </li>
                                <li class="nav-item {{request()->route()->uri == 'contact' ? 'active' : '@@contact-active'}}">
                                    <a class="nav-link" href="/contact">Contact {!! request()->route()->uri == 'contact' ? '<span class="sr-only">(current)</span>' : '' !!}</a>
                                </li>
                                <li class="nav-item {{request()->route()->uri == 'blog' ? 'active' : '@@blog-active'}}">
                                    <a class="nav-link" href="/blog">Blog {!! request()->route()->uri == 'blog' ? '<span class="sr-only">(current)</span>' : '' !!}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- toggle switch for light and dark theme -->
                        <div class="mobile-position">
                            <label class="theme-selector">
                                <input type="checkbox" id="themeToggle">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </label>
                        </div>
                        <!-- //toggle switch for light and dark theme -->
                    </nav>
                </div>
            </header>
        </section>
        <!--/header-->
        @yield('content')
        <section class="w3l-getstarted py-5">
            <div class="container py-md-3 text-center">
              <div class="header-section mx-auto">
                <h3>Ready to get started? </h3>
                <p class="my-3"> We love conversations, and would love to have one with you! Whether you’re looking for a speaker, an awesome career, or want to get started with a rewards program, we would love hear from you.</p>
              </div>
              <div class="buttons mt-5">
                <a href="/book_demo" class="btn btn-outline-primary mr-2 theme-button">Book a Demo</a>
                <a href="/login" class="btn btn-primary theme-button ml-2">Get Started</a>
              </div>
            </div>
          </section>
          <!-- / getstarted -->
        <footer>
            <!-- footer -->
            <section class="w3l-footer">
                <div class="w3l-footer-16-main py-5">
                    <div class="container">
                        <div class="row footer-border">
                            <div class="col-lg-3 col-md-5 column pr-md-0">
                                <h1>
                                    <a href="index.html" class="footer-brand-logo">
                                        <span class="fa fa-pencil-square-o"></span>Literate
                                    </a>
                                </h1>
                                <p>Mukta Prasad Colony</br> Bikaner, Rajasthan </br>India 334001</p>
                                <ul class="mt-4 contact">
                                    <li>
                                        <p><span class="fa fa-phone" aria-hidden="true"></span> <a href="tel:+91 6350231370">+91 6350231370</a></p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mail:contact@literate.com">contact@literate.com</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 column pl-md-5 mt-md-0 mt-5"></div>
                            <div class="col-lg-2 col-md-4 col-sm-6 column mt-md-0 mt-5"></div>
                            <div class="col-lg-2 col-md-4 col-sm-6 column mt-md-0 mt-5">
                                <h3>Company</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/book_demo">Book Demo</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="below-section pt-4 mt-5 text-center">
                            <div class="columns-2">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="columns mt-3">
                                <p>&copy; 2020 Literate. All rights reserved | Design and Developed by <a href="https://teacoders.in/">TeaCoders</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- move top -->
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-up"></span>
                </button>
                <script>
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function () {
                        scrollFunction()
                    };
                    function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            document.getElementById("movetop").style.display = "block";
                        } else {
                            document.getElementById("movetop").style.display = "none";
                        }
                    }
                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
                <!-- //move top -->
                <script>
                    $(function () {
                        $('.navbar-toggler').click(function () {
                            $('body').toggleClass('noscroll');
                        })
                    });
                </script>
            </section>
        </footer>
        <!-- //footer -->
        <!-- <script src="/assets/js/jquery-3.4.1.slim.min.js"></script> -->
        <script src="/assets/frontend/js/jquery-1.9.1.min.js"></script>
        <script src="/assets/frontend/js/owl.carousel.js"></script>
        <!-- script for testimonials -->
        <script>
            $(document).ready(function () {
                $('.owl-testimonials').owlCarousel({
                    loop: false,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: false
                        },
                        1000: {
                            items: 1,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //testimonials owlcarousel -->
        <!-- logos for customers -->
        <script>
            $(document).ready(function () {
                $('.owl-logos').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: false
                        },
                        480: {
                            items: 2,
                            nav: false
                        },
                        667: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //logos owlcarousel -->
  
        <!-- courses for customers -->
        <script>
            $(document).ready(function () {
                $('.owl-courses').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            })
        </script>
        <!-- //courses owlcarousel -->
  
        <!-- magnific popup -->
        <script src="/assets/frontend/js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
            
                    fixedContentPos: false,
                    fixedBgPos: true,
            
                    overflowY: 'auto',
            
                    closeBtnInside: true,
                    preloader: false,
            
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
        
                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',
            
                    fixedContentPos: false,
                    fixedBgPos: true,
            
                    overflowY: 'auto',
            
                    closeBtnInside: true,
                    preloader: false,
            
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>
  
        <!-- responsive tabs -->
        <script src="/assets/frontend/js/easyResponsiveTabs.js"></script>
  
        <!--Plug-in Initialisation-->
        <script type="text/javascript">
            $(document).ready(function () {
                //Horizontal Tab
                $('#parentHorizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#nested-tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
            });
        </script>
        
        <!-- stats number counter-->
        <script src="/assets/frontend/js/jquery.waypoints.min.js"></script>
        <script src="/assets/frontend/js/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats number counter -->
  
        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->
  
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();
  
      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });
  
    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  
  
  <!--theme switcher dark and light mode script-->
  <script>
    const bodyElement = document.querySelector('body');
    const themeToggle = document.querySelector('#themeToggle');
    const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');
  
    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);
  
    if (currentTheme) {
      bodyElement.classList.add(currentTheme);
  
      if (currentTheme === 'dark') {
        themeToggle.checked = true;
      }
    }
  
    function userPreference(e) {
      if (e.matches) {
        bodyElement.classList.add("dark");
        return "dark"
      } else {
        bodyElement.classList.remove("dark");
        return ""
      }
    }
  
    darkModeMql.addListener(userPreference);
  
    function themeSwitcher(e) {
      if (e.target.checked) {
        bodyElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
      } else {
        bodyElement.classList.remove('dark');
        localStorage.setItem('theme', '');
      }
    }
  
    themeToggle.addEventListener('change', themeSwitcher);
  </script>
  <!--//theme switcher dark and light mode script-->
  
  
  <!-- Bootstrap JS -->
  <script src="/assets/frontend/js/bootstrap.min.js"></script>
  
  </body>
  
  </html>