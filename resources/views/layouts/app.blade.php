<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Goodsound - Homepage</title>
</head>

<body>
    <!-- Scripts -->
    <script src="/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/swiper-script.js"></script>
    <script src="/js/submit-form.js"></script>
    <script src="/js/vendor/isotope.pkgd.min.js"></script>
    <script src="/js/video_embedded.js"></script>

    <!-- HEADER -->
    <header class="bg-secondary-dark sticky-top">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <div class="logo-container">
                            <img src="/image/logo.png" alt="logo" class="img-fluid">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="podcasts.html">Podcasts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="team.html">Team</a></li>
                                    <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                    <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                    <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog.html">Blog Post</a></li>
                                    <li><a class="dropdown-item" href="single_post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('assets/svg/language.svg') }}" style="width: 28px;" alt="">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/change-language/en">@lang('English')</a></li>
                                    <li><a class="dropdown-item" href="/change-language/ar">@lang('Arabic')</a></li>
                                </ul>
                            </li>
                                    
                        </ul>
                        <div class="social-container mb-lg-0 mb-3">
                            <a href="https://www.youtube.com/@Highnessglob" class="social-item">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
    <a href="https://x.com/Highnessglob" class="social-item" target="_blank">
        <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/Highnessar" class="social-item" target="_blank">
        <i class="fa-brands fa-facebook"></i>
    </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="position-relative bg-attach-fixed" style="background-image: url(/image/image-1920x900-4.jpg);">
            <div class="image-overlay"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="section border-bottom border-white">
                    <div class="row row-cols-1 row-cols-lg-2 w-100">
                        <div class="col col-lg-4 mb-3">
                            <div class="d-flex flex-column gap-3">
                                <img src="/image/logo.png" alt="logo" class="img-fluid w-75">
                                <p>
                                    Praesent ornare volutpat sollicitudin. Nulla vel semper augue, aliquet posuere odio.
                                    Morbi laoreet scelerisque risus vel tempor. Duis sagittis id elit et molestie. Etiam
                                    consectetur ipsum purus, a ornare mi finibus quis. egestas a nulla. Fusce tincidunt
                                    blandit ex, vel placerat odio placerat at.
                                </p>
                                <div class="social-container mb-lg-0 mb-3">
                                    <a href="https://www.youtube.com/@Highnessglob" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/highnessar/" class="social-item" target="_blank">
    <i class="fa-brands fa-linkedin"></i>
</a>
<a href="https://x.com/Highnessglob" class="social-item" target="_blank">
    <i class="fa-brands fa-x-twitter"></i>
</a>
<a href="https://www.instagram.com/highnessglob/" class="social-item" target="_blank">
    <i class="fa-brands fa-instagram"></i>
</a>
<a href="https://www.facebook.com/Highnessar" class="social-item" target="_blank">
    <i class="fa-brands fa-facebook"></i>
</a>

                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-8 mb-3">
                            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                                <div class="col col-lg-3 mb-3">
                                    <div class="d-flex flex-column gap-3 px-4 px-lg-5">
                                        <h5 class="font-1 fw-bold">Pages</h5>
                                        <ul class="list">
                                            <li class="d-flex flex-row align-items-center gap-3">
                                                <i class="fa-solid fa-chevron-right accent-color"></i>
                                                <a href="/" class="link-white">Home</a>
                                            </li>
                                            <li class="d-flex flex-row align-items-center gap-3">
                                                <i class="fa-solid fa-chevron-right accent-color"></i>
                                                <a href="/" class="link-white">About Us</a>
                                            </li>
                                            <li class="d-flex flex-row align-items-center gap-3">
                                                <i class="fa-solid fa-chevron-right accent-color"></i>
                                                <a href="/" class="link-white">Podcasts</a>
                                            </li>
                                            <li class="d-flex flex-row align-items-center gap-3">
                                                <i class="fa-solid fa-chevron-right accent-color"></i>
                                                <a href="/" class="link-white">Gallery</a>
                                            </li>
                                            <li class="d-flex flex-row align-items-center gap-3">
                                                <i class="fa-solid fa-chevron-right accent-color"></i>
                                                <a href="/" class="link-white">Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col col-lg-3 mb-3">
                                    <div class="d-flex flex-column gap-3 px-4">
                                        <h5 class="font-1 fw-bold">Listed On</h5>
                                        <img src="/image/youtube.png" alt="youtube" class="img-fluid">
                                        <img src="/image/spotify.png" alt="spotify" class="img-fluid">
                                        <img src="/image/google_podcast.png" alt="google podcast" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col col-lg-6 mb-3">
                                    <div class="d-flex flex-column gap-3 px-5">
                                        <h5 class="font-1 fw-bold">Information</h5>
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center"
                                                    style="width: 3rem; height: 3rem;">
                                                    <span class="text-white fs-3"><i
                                                            class="fa-solid fa-location-dot"></i></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fs-4 font-1 fw-bold">
                                                        Address</span>
                                                    <span class="accent-color">99 Roving St., Big City, PKU 23456</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center"
                                                    style="width: 3rem; height: 3rem;">
                                                    <span class="text-white fs-3"><i
                                                            class="fa-solid fa-phone"></i></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fs-4 font-1 fw-bold">Call Us</span>
                                                    <span class="accent-color">+123-234-1234</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center"
                                                    style="width: 3rem; height: 3rem;">
                                                    <span class="text-white fs-3"><i
                                                            class="fa-solid fa-envelope"></i></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fs-4 font-1 fw-bold">Email</span>
                                                    <span class="accent-color">hello@awesomesite.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 text-center">
                    <p class="m-0">
                        Copyright
                        <script>document.write(new Date().getFullYear());</script> © All Right Reserved Design by
                        Rometheme
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>