{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en" style=" scroll-behavior: smooth;">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Saya Bagas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="description" content="Saya Bagas"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons%7CPoppins:300,300i,400,400i,600,600i%7CPlayfair+Display:400i"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"/>
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <!-- ICONS-->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/content/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="/img/content/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="/img/content/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/img/content/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="/img/content/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="/img/content/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="/img/content/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/img/content/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/content/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="/img/content/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/content/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="/img/content/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/img/content/favicon-16x16.png"/>
    <link rel="manifest" href="/img/content/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="/img/content/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="/img/content/favicon.ico"/>
  </head>
  <body>
    <!-- PAGE PRELOADER -->
    <div class="preloader">
      <div class="preloader__curtain bg-light"></div>
      <div class="preloader__wrapper-logo">
        <div class="preloader__logo"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g fill="none" fill-rule="evenodd">
<rect class="rect" width="100%" height="100%"></rect>
</g>
</svg>
          <div class="logo">
            <div class="logo__text">Saya Bagas</div>
          </div>
        </div>
      </div>
    </div>
    <!-- - PAGE PRELOADER -->
    <div class="page-wrapper" id="in_home">
      <!-- PAGE HEADER -->
      <header class="header site-header js-header-sticky header_light">
        <div class="container-fluid">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto"><a class="logo" href="/">
                <div class="logo__text">{{ App\Homepage::value('navbarNama') }}</div></a>
            </div>
            <div class="col-auto d-xl-block d-none">
              <ul class="menu">
                <li><a href="#in_home">Homepages</a></li>
                <li><a href="#in_portfolio">Portfolio</a></li>
                <li><a href="#in_services">Services</a></li>
                <li><a href="#in_testimonial">Testimonial</a></li>
                <li><a href="#in_contact">Contact</a></li>
              </ul>
            </div>
            <div class="header__overlay-menu-back d-xl-none js-submenu-back">keyboard_arrow_up</div>
            <div class="col-auto d-xl-none">
              <div class="burger js-burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="header__wrapper-overlay-menu d-xl-none">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-auto">
                <ul class="overlay-menu js-overlay-menu">
                  <li class="menu-item-has-children"><a href="#">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">01</div><span>Homepages</span>
                      </div></a>
                    <ul class="overlay-sub-menu">
                      <li><a href="index.html">
                          <div class="overlay-menu__item-wrapper"><span>Landing Page</span>
                          </div></a>
                      </li>
                      <li><a href="homepage-slider-1.html">
                          <div class="overlay-menu__item-wrapper"><span>Fullscreen Slider 1</span>
                          </div></a>
                      </li>
                      <li><a href="homepage-slider-4-light.html">
                          <div class="overlay-menu__item-wrapper"><span>Fullscreen Slider 4 &lt;Light&gt;</span>
                          </div></a>
                      </li>
                      <li><a href="homepage-slider-4-dark.html">
                          <div class="overlay-menu__item-wrapper"><span>Fullscreen Slider 4 &lt;Dark&gt;</span>
                          </div></a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a href="#">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">02</div><span>Inner Pages</span>
                      </div></a>
                    <ul class="overlay-sub-menu">
                      <li><a href="pricing.html">
                          <div class="overlay-menu__item-wrapper"><span>Pricing</span>
                          </div></a>
                      </li>
                      <li><a href="service-details.html">
                          <div class="overlay-menu__item-wrapper"><span>Service Details</span>
                          </div></a>
                      </li>
                      <li><a href="team.html">
                          <div class="overlay-menu__item-wrapper"><span>Team</span>
                          </div></a>
                      </li>
                      <li><a href="404.html">
                          <div class="overlay-menu__item-wrapper"><span>404 Page</span>
                          </div></a>
                      </li>
                      <li class="menu-item-has-children"><a href="#">
                          <div class="overlay-menu__item-wrapper"><span>Submenu Depth Test</span>
                          </div></a>
                        <ul class="overlay-sub-menu">
                          <li class="menu-item-has-children"><a href="#">
                              <div class="overlay-menu__item-wrapper"><span>Depth 2</span>
                              </div></a>
                            <ul class="overlay-sub-menu">
                              <li class="menu-item-has-children"><a href="#">
                                  <div class="overlay-menu__item-wrapper"><span>Depth 3</span>
                                  </div></a>
                                <ul class="overlay-sub-menu">
                                  <li class="menu-item-has-children"><a href="#">
                                      <div class="overlay-menu__item-wrapper"><span>Depth 4</span>
                                      </div></a>
                                    <ul class="overlay-sub-menu">
                                      <li><a href="#">
                                          <div class="overlay-menu__item-wrapper"><span>Depth 5</span>
                                          </div></a>
                                      </li>
                                      <li><a href="#">
                                          <div class="overlay-menu__item-wrapper"><span>Depth 5</span>
                                          </div></a>
                                      </li>
                                      <li><a href="#">
                                          <div class="overlay-menu__item-wrapper"><span>Depth 5</span>
                                          </div></a>
                                      </li>
                                      <li><a href="#">
                                          <div class="overlay-menu__item-wrapper"><span>Depth 5</span>
                                          </div></a>
                                      </li>
                                      <li><a href="#">
                                          <div class="overlay-menu__item-wrapper"><span>Depth 5</span>
                                          </div></a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a href="#">
                                      <div class="overlay-menu__item-wrapper"><span>Depth 4</span>
                                      </div></a>
                                  </li>
                                  <li><a href="#">
                                      <div class="overlay-menu__item-wrapper"><span>Depth 4</span>
                                      </div></a>
                                  </li>
                                  <li><a href="#">
                                      <div class="overlay-menu__item-wrapper"><span>Depth 4</span>
                                      </div></a>
                                  </li>
                                  <li><a href="#">
                                      <div class="overlay-menu__item-wrapper"><span>Depth 4</span>
                                      </div></a>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="#">
                                  <div class="overlay-menu__item-wrapper"><span>Depth 3</span>
                                  </div></a>
                              </li>
                              <li><a href="#">
                                  <div class="overlay-menu__item-wrapper"><span>Depth 3</span>
                                  </div></a>
                              </li>
                              <li><a href="#">
                                  <div class="overlay-menu__item-wrapper"><span>Depth 3</span>
                                  </div></a>
                              </li>
                              <li><a href="#">
                                  <div class="overlay-menu__item-wrapper"><span>Depth 3</span>
                                  </div></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#">
                              <div class="overlay-menu__item-wrapper"><span>Depth 2</span>
                              </div></a>
                          </li>
                          <li><a href="#">
                              <div class="overlay-menu__item-wrapper"><span>Depth 2</span>
                              </div></a>
                          </li>
                          <li><a href="#">
                              <div class="overlay-menu__item-wrapper"><span>Depth 2</span>
                              </div></a>
                          </li>
                          <li><a href="#">
                              <div class="overlay-menu__item-wrapper"><span>Depth 2</span>
                              </div></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a href="#">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">03</div><span>Portfolio</span>
                      </div></a>
                    <ul class="overlay-sub-menu">
                      <li><a href="portfolio-grid.html">
                          <div class="overlay-menu__item-wrapper"><span>Portfolio Grid</span>
                          </div></a>
                      </li>
                      <li><a href="portfolio-details-1-light.html">
                          <div class="overlay-menu__item-wrapper"><span>Portfolio Details 1 &lt;Light&gt;</span>
                          </div></a>
                      </li>
                      <li><a href="portfolio-details-1-dark.html">
                          <div class="overlay-menu__item-wrapper"><span>Portfolio Details 1 &lt;Dark&gt;</span>
                          </div></a>
                      </li>
                      <li><a href="portfolio-details-2-light.html">
                          <div class="overlay-menu__item-wrapper"><span>Portfolio Details 2 &lt;Light&gt;</span>
                          </div></a>
                      </li>
                      <li><a href="portfolio-details-2-dark.html">
                          <div class="overlay-menu__item-wrapper"><span>Portfolio Details 2 &lt;Dark&gt;</span>
                          </div></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="services.html">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">04</div><span>Services</span>
                      </div></a>
                  </li>
                  <li><a href="blog-list.html">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">05</div><span>Blog</span>
                      </div></a>
                  </li>
                  <li><a href="about.html">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">06</div><span>About</span>
                      </div></a>
                  </li>
                  <li><a href="contact.html">
                      <div class="overlay-menu__item-wrapper">
                        <div class="overlay-menu__item-line"></div>
                        <div class="overlay-menu__item-counter">07</div><span>Contact</span>
                      </div></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- - PAGE HEADER -->
      <main class="site-main">
        <!-- section INTRO -->
        <section class="section section-intro bg-dark" data-os-animation="data-os-animation">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1><span class="highlight">{{ App\Homepage::value('navbarNama') }}<span class="highlight__bg"></span></span> – {{ App\Homepage::value('textContent') }}</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- - section INTRO -->
        <!-- section PORTFOLIO -->
        <!-- section MASTHEAD -->
      <section id="in_portfolio" class="section section-masthead section_pt section_pb bg-light">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>Portfolio</h1>
            </div>
          </div>
        </div>
        <div class="section-masthead__line"></div>
      </section>
      <!-- - section MASTHEAD -->
      <!-- - PAGE HEADER -->
      <main class="site-main">
        <!-- section PORTFOLIO -->
        <section class="section section_mt section_mb section-portfolio">
          <div class="container">
            @foreach ($portfolio as  $portfolio)
            <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-end figure-portfolio_horizontal figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="/portfolio/detail/{{ $portfolio->id }}">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="{{ asset('imagesPortfolio/' . $portfolio->img) }}" width="1890" height="1260" loading="lazy" alt="Minimalistic Decoration"/></div>
                </div>
                {{-- <div class="figure-portfolio__info">Photography</div> --}}
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>{{$portfolio->tittle}}</h2>
                </header></a></div>
            </div>
            @endforeach
            {{-- <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-end figure-portfolio_horizontal figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="portfolio-details-2-dark.html">
                  <div class="figure-portfolio__wrapper-img overflow">
                    <div class="overflow__curtain bg-accent"></div>
                    <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-5.jpg" width="1890" height="1260" loading="lazy" alt="Minimalistic Decoration"/></div>
                  </div>
                  <div class="figure-portfolio__info">Photography</div>
                  <header class="figure-portfolio__header">
                    <div class="figure-portfolio__headline"></div>
                    <h2>Minimalistic Decoration</h2>
                  </header></a></div>
            </div> --}}
            {{-- <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-start figure-portfolio_vertical figure-portfolio_left" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-1-dark.html">
                  <div class="figure-portfolio__wrapper-img overflow">
                    <div class="overflow__curtain bg-accent"></div>
                    <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-2.jpg" width="916" height="1374" loading="lazy" alt="Premium Furniture"/></div>
                  </div>
                  <div class="figure-portfolio__info">Studio</div>
                  <header class="figure-portfolio__header">
                    <div class="figure-portfolio__headline"></div>
                    <h2>Premium Furniture</h2>
                  </header></a></div>
            </div> --}}
            {{-- <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-end figure-portfolio_vertical figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-2-light.html">
                  <div class="figure-portfolio__wrapper-img overflow">
                    <div class="overflow__curtain bg-accent"></div>
                    <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-3.jpg" width="916" height="1374" loading="lazy" alt="Wireless Euphoria"/></div>
                  </div>
                  <div class="figure-portfolio__info">Street</div>
                  <header class="figure-portfolio__header">
                    <div class="figure-portfolio__headline"></div>
                    <h2>Wireless Euphoria</h2>
                  </header></a></div>
            </div>
            <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-start figure-portfolio_horizontal figure-portfolio_left" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="portfolio-details-1-light.html">
                  <div class="figure-portfolio__wrapper-img overflow">
                    <div class="overflow__curtain bg-accent"></div>
                    <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-4.jpg" width="1890" height="1260" loading="lazy" alt="Eternal Art"/></div>
                  </div>
                  <div class="figure-portfolio__info">Photography</div>
                  <header class="figure-portfolio__header">
                    <div class="figure-portfolio__headline"></div>
                    <h2>Eternal Art</h2>
                  </header></a></div>
            </div>
            <div class="section-portfolio__wrapper-item">
              <div class="row figure-portfolio justify-content-end figure-portfolio_vertical figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-2-light.html">
                  <div class="figure-portfolio__wrapper-img overflow">
                    <div class="overflow__curtain bg-accent"></div>
                    <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-6.jpg" width="916" height="1374" loading="lazy" alt="Trendy T-Shirt"/></div>
                  </div>
                  <div class="figure-portfolio__info">Street</div>
                  <header class="figure-portfolio__header">
                    <div class="figure-portfolio__headline"></div>
                    <h2>Trendy T-Shirt</h2>
                  </header></a></div>
            </div> --}}
          </div>
        </section>
        <!-- - section PORTFOLIO -->
      </main>
        <!-- - section PORTFOLIO -->
        <!-- section SERVICES -->
        <!-- section MASTHEAD -->
      <section id="in_services" class="section section-masthead section_pt section_pb bg-light">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>Services</h1>
            </div>
          </div>
        </div>
        <div class="section-masthead__line"></div>
      </section>
      <!-- - section MASTHEAD -->
        <section class="section section_mt section_mb-small section-features">
          <div class="container container_25">
            <div class="row">
              <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                  <div class="figure-feature__icon">
                    <div class="lnr lnr-code"></div>
                    <svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-134.000000, -98.000000)">
                            <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                            </g>
                            </g>
                            </svg>
                  </div>
                  <div class="figure-feature__header">
                    <div class="figure-feature__headline"></div>
                    <h3>Software Development</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur totam minus voluptas cumque sunt eaque.</p>
                  </div></a>
              </div>
              <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                  <div class="figure-feature__icon">
                    <div class="lnr lnr-highlight"></div><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g fill="none" fill-rule="evenodd">
                      <g transform="translate(-134.000000, -98.000000)">
                      <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                      </g>
                      </g>
                      </svg>
                  </div>
                  <div class="figure-feature__header">
                    <div class="figure-feature__headline"></div>
                    <h3>Branding</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, harum? Explicabo exercitationem beatae corrupti id?</p>
                  </div></a>
              </div>
              <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                  <div class="figure-feature__icon">
                    <div class="lnr lnr-smartphone"></div>
                    <svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-134.000000, -98.000000)">
                              <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                              </g>
                              </g>
                              </svg>
                  </div>
                  <div class="figure-feature__header">
                    <div class="figure-feature__headline"></div>
                    <h3>Mobile Development</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa pariatur corrupti doloribus rem! Sint.</p>
                  </div></a>
              </div>
            </div>
          </div>
        </section>
        <!-- - section SERVICES -->
        <!-- section TESTIMONIALS -->
        <section id="in_testimonial" class="section section_mt section-testimonials" style="padding-top: 100px">
          <header class="section-header container" data-os-animation="data-os-animation">
            <div class="row">
              <div class="col">
                <div class="section-header__label">
                  <div class="section-header__square"></div><span>Testimonials</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h2>Saya suka bekerja keras dan saya selalu menyenangkan setiap pelanggan. Itu pendekatan berorientasi klien sangat penting.</h2>
              </div>
            </div>
          </header>
          <div class="container-fluid">
            <div class="bg-dark">
              <div class="container slider slider-testimonials">
                <div class="row justify-content-between">
                  <div class="col-lg-10 order-lg-2">
                    <div class="swiper-container swiper js-slider-testimonials">
                      <div class="swiper-wrapper">
                        @foreach ($testimonial as  $testimonial)
                        <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="{{ asset('imagesTestimonial/' . $testimonial->img)  }}" width="160" height="160" loading="lazy" alt=""/>
                          <p class="slider-testimonials__text">{{ $testimonial->description }}</p>
                          <div class="slider-testimonials__author">
                            <div class="slider-testimonials__author-line"></div>
                            <div class="slider-testimonials__author-name">{{ $testimonial->nama }}</div>
                            <div class="slider-testimonials__author-subline">{{ $testimonial->status }}</div>
                          </div>
                        </div>
                        @endforeach
                        {{-- <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-2.jpg" width="160" height="160" loading="lazy" alt=""/>
                          <p class="slider-testimonials__text">Extremity direction existence as dashwoods do up. Securing marianne led welcomed offended but offering six raptures. Conveying concluded newspaper rapturous oh at. Two indeed suffer saw beyond far former mrs remain. Occasional continuing possession we insensible an sentiments as is. Law but reasonably motionless principles she. Has six worse downs far blush rooms above stood.</p>
                          <div class="slider-testimonials__author">
                            <div class="slider-testimonials__author-line"></div>
                            <div class="slider-testimonials__author-name">Vicente de la Cruz</div>
                            <div class="slider-testimonials__author-subline">Developer</div>
                          </div>
                        </div>
                        <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-3.jpg" width="160" height="160" loading="lazy" alt=""/>
                          <p class="slider-testimonials__text">Be an as cordially at resolving furniture preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. Gave led past poor met fine was new.</p>
                          <div class="slider-testimonials__author">
                            <div class="slider-testimonials__author-line"></div>
                            <div class="slider-testimonials__author-name">Linda K. Reeder</div>
                            <div class="slider-testimonials__author-subline">Client</div>
                          </div>
                        </div>
                        <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-4.jpg" width="160" height="160" loading="lazy" alt=""/>
                          <p class="slider-testimonials__text">Feel plan know is he like on pure. See burst found sir met think hopes are marry among. Delightful remarkably new assistance saw literature mrs favourable. Do endeavor he differed carriage is learning my graceful.</p>
                          <div class="slider-testimonials__author">
                            <div class="slider-testimonials__author-line"></div>
                            <div class="slider-testimonials__author-name">Marie Smith</div>
                            <div class="slider-testimonials__author-subline">Partner</div>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 order-lg-1">
                    <div class="slider__controls">
                      <div class="slider__arrow slider-testimonials__arrow js-slider-testimonials__arrow-prev">keyboard_arrow_up</div>
                      <div class="slider__dots js-slider-testimonials__dots">
                        <div class="slider__dot slider__dot_active"></div>
                        <div class="slider__dot"></div>
                        <div class="slider__dot"></div>
                        <div class="slider__dot"></div>
                      </div>
                      <div class="slider__arrow slider-testimonials__arrow js-slider-testimonials__arrow-next">keyboard_arrow_down</div>
                    </div>
                  </div>
                  <div class="col-lg-1 align-self-end order-lg-3 d-none d-lg-block">
                    <div class="slider__counter-big">
                      <div class="swiper-container swiper slider__counter-big-current slider-testimonials__counter-big-current js-slider-testimonials-counter-current">
                        <div class="swiper-wrapper"></div>
                      </div>
                      <div class="slider__counter-big-total js-slider-testimonials-counter-total"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- - section TESTIMONIALS -->
        <!-- section CONTACT -->
        <section id="in_contact" class="section section-contact section_mt" style="padding-top: 100px">
          <header class="section-header container" data-os-animation="data-os-animation">
            <div class="row">
              <div class="col">
                <div class="section-header__label">
                  <div class="section-header__square"></div><span>Contact Me</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h2>Punya proyek yang menarik? Saya dapat membantu Anda dengan itu! Tulis saja aku ke sayabagas@excemple.org</a></h2>
              </div>
            </div>
          </header>
          <div class="container-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-lg-8 ">
                <div class="section-contact__wrapper-form">
                  <form class="form js-ajax-form" action="mail.php" method="POST" data-message-success="Thanks for your message! We will reply you as soon as possible." data-message-error="Something went wrong :( Please contact me directly on arrigo@sabbani.com">
                    <h3>Kirim pesan</h3>
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <input class="input-float__input" type="text" name="visitor_name" required="required" data-msg="Please enter your name"/><span class="input-float__label">Nama kamu</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <input class="input-float__input" type="email" name="visitor_email" required="required" data-msg="Please enter a correct e-mail"/><span class="input-float__label">E-mail kamu</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <textarea class="input-float__input input-float__input_textarea" name="visitor_msg"></textarea><span class="input-float__label">Description kamu</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <div class="row form__row text-right">
                      <div class="col form__col form__col_submit">
                        <button class="button button_accent" type="submit"><span>Kirim Pesan</span></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section-contact__wrapper-contacts">
              <div class="row justify-content-center">
                <div class="col-lg-3 section-contact__wrapper-contact">
                  <div class="figure-contact">
                    <div class="figure-contact__icon">near_me</div>
                    <div class="figure-contact__item">4575 Desa Makmur</div>
                    <div class="figure-contact__item">NY 11206 Indonesia</div>
                  </div>
                </div>
                <div class="col-lg-3 section-contact__wrapper-contact">
                  <div class="figure-contact">
                    <div class="figure-contact__icon">phone</div>
                    <div class="figure-contact__item">+1 (347) 783-92-96</div>
                    <div class="figure-contact__item">+1 (347) 783-19-00</div>
                  </div>
                </div>
                <div class="col-lg-3 section-contact__wrapper-contact">
                  <div class="figure-contact">
                    <div class="figure-contact__icon">mail</div>
                    <div class="figure-contact__item"><a href="#">sayabagas@excemple.com</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- - section CONTACT -->
      </main>
      <!-- PAGE FOOTER -->
      <footer class="footer site-footer">
        <div class="container-fluid">
          <div class="footer__inner">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center footer__column order-lg-2"><a class="logo" href="index.html">
                  <div class="logo__text">Saya Bagas</div></a>
              </div>
              <div class="col-lg-4 text-right footer__column order-lg-3">
                <ul class="social">
                  <li class="social__item"><a class="fa fab fa-facebook-f" href="#" aria-label="facebook-f" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g fill="none" fill-rule="evenodd">
<g transform="translate(-134.000000, -98.000000)">
<path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
</g>
</g>
</svg></a></li>
                  <li class="social__item"><a class="fa fab fa-twitter" href="#" aria-label="twitter" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g fill="none" fill-rule="evenodd">
<g transform="translate(-134.000000, -98.000000)">
<path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
</g>
</g>
</svg></a></li>
                  <li class="social__item"><a class="fa fab fa-instagram" href="#" aria-label="instagram" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g fill="none" fill-rule="evenodd">
<g transform="translate(-134.000000, -98.000000)">
<path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
</g>
</g>
</svg></a></li>
                  <li class="social__item"><a class="fa fab fa-behance" href="#" aria-label="behance" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g fill="none" fill-rule="evenodd">
<g transform="translate(-134.000000, -98.000000)">
<path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
</g>
</g>
</svg></a></li>
                </ul>
              </div>
              <div class="col-lg-4 text-left footer__column order-lg-1"><small>© 2023 portfolio</small></div>
            </div>
          </div>
        </div>
      </footer>
      <!-- - PAGE FOOTER -->
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?callback=Function.prototype&amp;key=AIzaSyArW7jnLU4wdvZGxBMN1jNXAq5dBxVBt4U"></script>
    <!-- VENDOR SCRIPTS -->
    <script src="{{ asset('js/vendor.js') }}"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="{{ asset('js/components.js') }}"></script>
    <!-- - COMPONENTS -->
    <!-- PAGE SCRIPTS-->
    <!-- - PAGE SCRIPTS-->
  </body>
</html>