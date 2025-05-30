@extends('layouts.app')

@section('content')
    <main>
        <!-- BANNER -->
        <section class="section position-relative"
            style="background-image: url(image/image-1920x900-1.jpg); height: 90vh;">
            <div class="image-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-2 w-100 h-100">
                    <div class="col h-100 p-lg-0">
                        <div class="d-flex flex-column gap-3 justify-content-center h-100">
                            <h1 class="font-1 fw-bold lh-1">
                                @lang('The Voice of Decision in the') <span class="accent-color">@lang('Trading World')</span>
                            </h1>
                            <p class="text-gray fs-5">
								@lang('Tune in to deep analysis, expert insights, and rich conversations in the world of trading and investment.')
							</p>
							<p class="text-gray fs-5 mt-0">
								@lang("Highness Podcast opens new windows into the market like you've never seen before.")
							</p>
							
                            <div class="d-flex flex-lg-row flex-column gap-lg-5 gap-4">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-play ms-1"></i>
                                    </button>
                                    <span class="font-1 ls-2 fw-bold">Start listening now.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade bg-overlay" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content bg-dark-color">
                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative py-5 px-3" style="margin-top: -80px;">
            <div class="position-absolute top-0 start-0 w-75 h-100 bg-accent-color rounded-end-3"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-4 ps-5 ps-lg-0">
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">20<sup>M</sup></h2>
                            <p class="fs-5 m-0">Our Subscribers</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">150<sup>+</sup></h2>
                            <p class="fs-5 m-0">Podcast Episodes</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">83<sup>K</sup></h2>
                            <p class="fs-5 m-0">Our Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Favorite Podcast -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h3 class="font-1 fw-bold">@lang("The :Favourite Podcast for Professional Traders", ["Favourite"=>'<span class="accent-color">Favourite</span>'])</h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">
						@lang('Listen to episodes shaped by real market experience and grounded in deep investment thinking. In every episode, we explore opportunities, analyse trends, and shed light on what headlines often miss.')
					</p>
                    <div class="row row-cols-1 row-cols-lg-3 w-100 text-start">
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#modal-1">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-1.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        1hr 24m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">
                                    @lang('Try your strategy on demo before trading live')
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/ItyPvaJXvgc?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#modal-2">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-2.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        0hr 58m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">
                                    @lang('Learn charting and understanding patterns — technical analysis is your weapon in trading.')
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-2" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/bhso1ItCfxI?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#modal-3">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-3.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        0hr 48m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">
                                    @lang('Fundamental analysis helps you understand trends and gives you deeper insights into the market.')
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-3" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/chcE2NOi4v8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2 w-100">
                    <div class="col mb-lg-0 mb-5">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                            <span class="fs-5">@lang('About Us')</span>
                            <h3 class="font-1 fw-bold lh-1">
								@lang('A trading platform with over 13 years of experience, now bringing knowledge to a new dimension.')
							</h3>
                            <p class="text-gray">
								@lang('Highness is a globally licensed trading company, established in 2009 to serve traders with professional tools, secure environments, and precise analysis.')
							</p>
							<p class="text-gray">
								@lang('After years in the market, we’ve decided to share our expertise through audio content that reflects our vision, offering real understanding, not empty promises.')
							</p>
                            <h5 class="font-1 fw-bold ">@lang('Highness Podcast, the stories no platform tells.')</h5>
                            <div class="d-flex flex-lg-row gap-3">
                                <div class="col  mb-3">
                                    <a href="https://www.youtube.com/@Highnessglob" target="_blank"><img src="image/youtube.png" alt="youtube" class="img-fluid"></a>
                                </div>
                                <div class="col  mb-3">
                                    <a href="#" target="_blank"><img src="image/spotify.png" alt="spotify" class="img-fluid"></a>
                                </div>
                                <div class="col  mb-3">
                                    <a href="#" target="_blank"><img src="image/google_podcast.png" alt="google podcast" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col  mb-3">
                        <div class="position-relative">
                            <div class="position-absolute top-0 end-0 bg-accent-color px-5 py-4 rounded-3 shadow"
                                style="z-index: 3; margin-top: -50px;">
                                <div class="d-flex flex-column text-center">
                                    <h2 class="font-1 fw-bold m-0">13<sup>th</sup></h2>
                                    <p class="fs-5 m-0">Experience</p>
                                </div>
                            </div>
                            <div class="position-relative me-5">
                                <div class="image-overlay-2 rounded-4"></div>
                                <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                            data-bs-target="#modal-about">
                                            <i class="fa-solid fa-play ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                                <img src="image/image-600x700-1.jpg" alt="image" class="img-fluid w-100 rounded-4">
                            </div>
                        </div>
                        <div class="modal fade bg-overlay" id="modal-about" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-dark-color">
                                    <iframe class="ifr-video"
                                        src="https://www.youtube.com/embed/zFLy74WG2XA?autoplay=1"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="fs-5">Our Team</span>
                    <h3 class="font-1 fw-bold">Meet Our <span class="accent-color">Host</span></h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.</p>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-002.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Khader Malkawi</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-2.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Yusef</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-003.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Khader Malkawi</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL -->
        <section class="section position-relative bg-attach-fixed"
            style="background-image: url(image/image-1920x900-2.jpg);">
            <div class="image-overlay"></div>
            <div class="r-container  position-relative" style="z-index: 2;">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-6">
                        <div class="overflow-hidden">
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-1.jpg" alt="testimonials"
                                                        class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Jhon Burton</p>
                                                        <p class="accent-color m-0">Actor</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i
                                                            class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-2.jpg" alt="testimonials"
                                                        class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Danilla</p>
                                                        <p class="accent-color m-0">Musician</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i
                                                            class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-3.jpg" alt="testimonials"
                                                        class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Jenny</p>
                                                        <p class="accent-color m-0">Blogger</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i
                                                            class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="d-flex flex-column gap-3">
                            <span class="fs-5">Testimonials</span>
                            <h3 class="font-1 fw-bold lh-1">What <span class="accent-color">Listener</span> Says</h3>
                            <p class="text-gray">
                                Phasellus facilisis, neque id dapibus commodo, est libero ultricies felis, venenatis
                                pulvinar eros magna dapibus turpis. Donec eleifend dui nec dui malesuada, id
                                consectetur.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam. consectetur adipiscing elit.
                            </p>
                            <div>
                                <a href="/" class="btn button font-1 ls-2">ALL TESTIMONIALS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Podcast -->
        <section class="section position-relative">
            <div class="texture-overlay"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="d-flex flex-column text-center gap-3">
                    <span class="fs-5">Our Podcast</span>
                    <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Recent</span> Episodes</h3>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e119">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('Dollar comeback? Jobless claims impact?')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e119" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/bhso1ItCfxI?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e118">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('Will inflation persist in Europe and the U.S. dollar continue to decline?')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e118" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/chcE2NOi4v8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e117">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('Will inflation continue in Europe, and will the US dollar keep declining?')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e117" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/chcE2NOi4v8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e116">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('A crucial week awaits the markets!')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e116" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/KGQF0v4GiXE?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e115">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('Everything you need to know about the Forex market in 60 seconds')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e115" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/tWp3J4YIlkw?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="overlay rounded-3"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                                data-bs-target="#e114">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('image/normal_video.jpg') }}" alt="image" class="img-fluid rounded-3">
                                    <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                        <h5 class="font-1 fw-bold lh-1">
                                            @lang('Here’s all the Forex market news you need in just one minute!')
                                        </h5>
                                        <div class="d-flex flex-row justify-content-center gap-5">
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-regular fa-clock accent-color"></i>
                                                1hr 24m
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-2">
                                                <i class="fa-solid fa-calendar-days accent-color"></i>
                                                13 October 2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bg-overlay" id="e114" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video"
                                            src="https://www.youtube.com/embed/EZj9YWfdPzo?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/" class="btn button font-1 ls-2">VIEW ALL PODCASTS
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section class="section">
            <div class="r-container">
                <div class="section position-relative rounded-4 overflow-hidden bg-attach-fixed"
                    style="background-image: url(image/image-1920x900-3.jpg);">
                    <div class="image-overlay-2"></div>
                    <div class="row row-cols-1 row-cols-lg-2 position-relative" style="z-index: 2;">
                        <div class="col  mb-3">
                            <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Subscribe</span> For The Latest
                                Episodes</h3>
                            <p class="text-gray">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex h-100 flex-column justify-content-center">
                                <h5 class="font-1 fw-bold">Newsletter</h5>
                                <form class="w-100 form needs-validation">
                                    <input type="text" name="action" value="subscribe" hidden>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control py-3 px-4 form-white"
                                            placeholder="Your Email" aria-label="Recipient's username"
                                            aria-describedby="button-addon2" required>
                                        <button class="btn button btn_submit-subscribe font-1  fw-bold px-5"
                                            type="submit" id="button-addon2">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast success_msg_subscribe bg-dark-transparent text-white"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Your Subscribe Send Successfully!.
                                        </div>
                                        <button type="button" class="btn me-2 m-auto text-white" data-bs-dismiss="toast"
                                            aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Partners -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="d-flex flex-column text-center gap-3">
                    <span class="fs-5">Our Partners</span>
                    <h3 class="font-1 fw-bold lh-1">In <span class="accent-color">Collaboration</span> With</h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.
                    </p>
                    <div class="row row-cols-1 row-cols-lg-6 justify-content-center align-items-center">
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-1.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-2.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-3.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-4.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col  mb-3">
                            <img src="image/logo-ipsum-5.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-6.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Blog -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-7 mb-3">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col mb-3">
                                <div class="card border-0 bg-secondary-color p-3 shadow">
                                    <img src="image/image-600x500-5.jpg" class="img-fluid" alt="image">
                                    <div class="card-body">
                                        <h5 class="font-1 fw-bold ">@lang('Youssef Eid – Financial Markets Analyst')</h5>
                                        <p class="card-text">@lang('Youssef Eid is a seasoned financial markets analyst with over six years of experience in both fundamental and technical analysis…')</p>
                                        <a href="/blog/youssef-eid" class="btn link font-1 fw-bold">@lang('LEARN MORE') <i
                                                class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="card border-0 bg-secondary-color p-3 shadow">
                                    <img src="image/image-600x500-6.jpg" class="img-fluid" alt="image">
                                    <div class="card-body">
                                        <h5 class="font-1 fw-bold ">@lang('Khader Malkawi') <br><br></h5>
                                        <p class="card-text">@lang('A TV host and radio voice with over 11 years of experience in television, voice-over, and podcasting. He began his media journey driven…')</p>
                                        <a href="/blog/khader-malkawi" class="btn link font-1 fw-bold">@lang('LEARN MORE') <i
                                                class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5 ps-lg-5 mb-3">
                        <div class="d-flex flex-column h-100 justify-content-center gap-3">
                            <span class="fs-5">Our Blog</span>
                            <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Latest</span> News For You</h3>
                            <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet,
                                Phasellus facilisis, neque id dapibus commodo, est libero ultricies felis, venenatis
                                pulvinar eros magna dapibus turpis.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam.
                            </p>
                            <div>
                                <a href="/" class="btn button font-1 ls-2">ALL BLOGS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection