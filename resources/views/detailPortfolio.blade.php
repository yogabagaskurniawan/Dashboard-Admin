@extends('layoutsUser.main')

@section('content')
  <!-- PAGE PRELOADER -->
  {{-- <div class="preloader">
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
  <!-- - PAGE PRELOADER --> --}}
  <div class="page-wrapper">
    <!-- PAGE HEADER -->
    <header class="header header_fixed site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-auto"><a class="button-close" href="/">
              <div class="button-close__line"></div>
              <div class="button-close__line"></div></a></div>
        </div>
      </div>
    </header>
    <!-- - PAGE HEADER -->
    <!-- PORTFOLIO DETAILS -->
    <article class="portfolio-details bg-light">
      <section class="section section-masthead section_pt section_pb  " data-os-animation="true">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section-masthead__meta">
              </div>
              <h1>{{$portfolio->tittle}}</h1>
            </div>
          </div>
        </div>
        <div class="section-masthead__line"></div>
      </section>
      <div class="container-fluid">
        <!-- featured img -->
        <div class="row text-center">
          <div class="col"><img class="img-fullwidth" src="{{ asset('imagesPortfolio/' . $portfolio->img) }}" width="1760" height="1173" loading="lazy" alt=""/></div>
        </div>
        <!-- - featured img -->
        <!-- options -->
        <div class="portfolio-details__options bg-white">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 portfolio-details__option">
                <div class="figure-info">
                  <div class="figure-info__option">Started</div>
                  <div class="figure-info__value">{{$portfolio->created_at}}</div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 portfolio-details__option">
                <div class="figure-info">
                  <div class="figure-info__option">Completed</div>
                  <div class="figure-info__value">{{$portfolio->updated_at}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- - options -->
        <!-- info -->
        <div class="portfolio-details__info">
          <section class="section section-info" data-os-animation="data-os-animation">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="section-info__quote">
                    <h2>{{$portfolio->description}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- - info -->
      </div>
      <!-- next -->
      <div class="portfolio-details__next">
        <aside class="aside aside-next">
          @if ($previousPortfolio)
              <div class="container-fluid"><a class="aside-next__inner" href="/portfolio/detail/{{ $previousPortfolio->id }}">
          @endif
          @if ($nextPortfolio)
              <div class="container-fluid"><a class="aside-next__inner" href="/portfolio/detail/{{ $nextPortfolio->id }}">
          @endif
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="aside-next__content">
                      <div class="aside-next__label">Next</div>
                      {{-- <h3>
                        @if ($nextPortfolio)
                          {{ $nextPortfolio->tittle }}
                        @endif
                      </h3> --}}
                      <div class="aside-next__wrapper-button">
                        <div class="button-square"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g fill="none" fill-rule="evenodd">
                          <rect class="rect" width="100%" height="100%"></rect>
                          </g>
                          </svg><span>arrow_forward</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            {{-- @if ($previousPortfolio)
          </a></div>
          @endif
          @if ($nextPortfolio)
            </a></div>
            @endif --}}
          </a></div>
        </aside>
      </div>
      <!-- - next-->
    </article>
    <!-- - PORTFOLIO DETAILS -->
    <!-- PAGE FOOTER -->
    <!-- - PAGE FOOTER -->
  </div>
  @endsection
