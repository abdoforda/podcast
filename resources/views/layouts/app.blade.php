{{-- 
__("English")
__("Arabic")
__("Kurdish")
--}}
<!DOCTYPE html>
<html lang="{{  App::getLocale() }}" @if (App::getLocale() == 'en')
    dir="ltr"
@else
    dir="rtl"
@endif>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    @if (App::getLocale() == 'en')
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    @endif
    
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Icon font -->
    <link rel="stylesheet" href="/webfont/tabler-icons.min.css">

    @if (App::getLocale() != 'en')
    {{-- bootstrap rtl --}}
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/rtl.css">

    @endif

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/icon/favicon-32x32.png">

    <meta name="description" content="Arbitrage trading HTML Template">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>{{ setting('site.title') }}</title>
</head>

<body class="body body--home">
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- btn -->
                        <button class="header__btn" type="button" aria-label="header__nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end btn -->

                        <!-- logo -->
                        <a href="/" class="header__logo">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                        <!-- end logo -->

                        <!-- tagline -->
                        <span class="header__tagline"></span>
                        <!-- end tagline -->

                        <!-- navigation -->
                        <ul class="header__nav" id="header__nav">
                            <li>
                                <a href="/">@lang('Home')</a>
                            </li>

                            <li>
                                <a href="{{ route('recommendations') }}">@lang('Recommendations')</a>
                            </li>

                            <li>
                                <a href="{{ route('trading-courses') }}">@lang('Courses')</a>
                            </li>
                            <li>
                                <a href="{{ route('webinars') }}">@lang('Webinars')</a>
                            </li>

                            <li>
                                <a href="{{ route('news') }}">@lang('News')</a>
                            </li>
                            <li>
                                <a href="{{ route('articles') }}">@lang('Articles')</a>
                            </li>





                            <li class="header__dropdown">
                                <a class="dropdown-link dropdown-link--menu" href="javascript::void(0)" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots"></i></a>

                                <ul class="dropdown-menu header__dropdown-menu">
                                    <li><a href="{{ route('contact') }}">@lang('Contact us')</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">@lang('Privacy policy')</a></li>
                                    <li><a href="{{ route('terms-conditions') }}">@lang('Terms & conditions')</a></li>

                                </ul>
                            </li>
                        </ul>
                        <!-- end navigation -->

                        <!-- language -->
                        <div class="header__language">
                            <a class="dropdown-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ config('app.locale') }} <i class="ti ti-point-filled"></i></a>

                            <ul class="dropdown-menu header__language-menu">
                                @foreach (config('app.available_locales') as $langCode => $language)
                                    <li><a href="{{ route('change.language', $langCode) }}">{{ __($language) }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- end language -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 order-1 order-lg-4 order-xl-1">
                    <!-- footer logo -->
                    <div class="footer__logo">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <!-- end footer logo -->

                    <!-- footer tagline -->
                    <p class="footer__tagline">
                        @lang('Unlock New Trading Opportunities with Our Cutting-Edge Solutions.')
                    </p>
                    <!-- end footer tagline -->

                </div>

                <!-- navigation -->
                <div
                    class="col-6 col-md-4 col-lg-3 col-xl-2 order-3 order-md-2 order-lg-2 order-xl-3 offset-md-2 offset-lg-0">
                    <h6 class="footer__title">@lang('Services & Features')

                    </h6>
                    <div class="footer__nav">
                        <a href="{{ route('news') }}">@lang('News')</a>
                        <a href="{{ route('articles') }}">@lang('Articles')</a>
						<a href="{{ route('trading-courses') }}">@lang('Courses')</a>

                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-6 col-xl-4 order-2 order-md-3 order-lg-1 order-xl-2">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="footer__title">@lang('Company')</h6>
                        </div>

                        <div class="col-6">
                            <div class="footer__nav">

                                <a href="/">@lang('Home')</a>
                                <a href="https://www.facebook.com/bullisherbil" target="_blank">@lang('Facebook')</a>
                                <a href="https://www.instagram.com/bullisherbil/?fbclid=IwZXh0bgNhZW0CMTEAAR268ma8qIvwEGxbkSyaeHICcd2vkb1NVvsXh3B8bgL2xG5SoQADj2Jagt0_aem_Rf0JUtw61yCHB06Er3R4Rg" target="_blank">@lang('instagram')</a>
                                
                            </div>
                        </div>
						<div class="col-6">
                            <div class="footer__nav">
                                <a href="{{ route('recommendations') }}">@lang('Recommendations')</a>
                                <a href="{{ route('trading-courses') }}">@lang('Courses')</a>
                                <a href="{{ route('webinars') }}">@lang('Webinars')</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-4 order-md-4 order-lg-3 order-xl-4">
                    <h6 class="footer__title">@lang('Support')</h6>
                    <div class="footer__nav">
                        <a href="{{ route('contact') }}">@lang('Help center')</a>
                        <a href="{{ route('privacy-policy') }}">@lang('Privacy policy')</a>
                        <a href="{{ route('terms-conditions') }}">@lang('Terms & conditions')</a>
                    </div>
                </div>
                <!-- end navigation -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <!-- footer social -->
                        <div class="footer__social">
                            <a href="https://www.facebook.com/bullisherbil" target="_blank"><i class="ti ti-brand-facebook"></i></a>
                            <a href="https://www.instagram.com/bullisherbil/?fbclid=IwZXh0bgNhZW0CMTEAAR268ma8qIvwEGxbkSyaeHICcd2vkb1NVvsXh3B8bgL2xG5SoQADj2Jagt0_aem_Rf0JUtw61yCHB06Er3R4Rg" target="_blank"><i class="ti ti-brand-instagram"></i></a>
                        </div>
                        <!-- end footer social -->

                        <!-- footer copyright -->
                        <small class="footer__copyright">© Bullish Market, 2025.</small>
                        <!-- end footer copyright -->
                    </div>
                </div>
            </div>
        </div>

        <!-- design elements -->
        <span class="screw screw--footer screw--footer-bl"></span>
        <span class="screw screw--footer screw--footer-br"></span>
        <span class="screw screw--footer screw--footer-tr"></span>
        <span class="screw screw--footer screw--footer-tl"></span>
    </footer>
    <!-- end footer -->

    <!-- ask modal -->
    <div class="modal modal--auto fade" id="modal-ask" tabindex="-1" aria-labelledby="modal-ask"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal__content">
                    <button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>

                    <h4 class="modal__title">Ask a question</h4>

                    <p class="modal__text">Our support team is always on call, and ready to help with all your
                        questions!</p>

                    <form action="/" class="modal__form">
                        <div class="form__group">
                            <input name="name" type="text" class="form__input" placeholder="Name">
                        </div>

                        <div class="form__group">
                            <input name="mail" type="text" class="form__input" placeholder="Email">
                        </div>

                        <div class="form__group">
                            <textarea name="question" class="form__textarea" placeholder="Your question"></textarea>
                        </div>

                        <button class="form__btn" type="button">Send</button>
                    </form>

                    <!-- design elements -->
                    <span class="screw screw--big-tl"></span>
                    <span class="screw screw--big-bl"></span>
                    <span class="screw screw--big-br"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end ask modal -->

    <!-- JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/smooth-scrollbar.js"></script>
    <script src="/js/splide.min.js"></script>
    <script src="/js/three.min.js"></script>
    <script src="/js/vanta.fog.min.js"></script>
    <script src="/js/main.js"></script>
    @yield('scripts')
</body>

</html>
