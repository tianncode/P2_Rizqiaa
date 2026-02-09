<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/freya/v2.2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 12:10:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Freya | Website, template crafting machine</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets2/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets2/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets2/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets2/img/favicons/favicon.ico">
    <link rel="manifest" href="assets2/img/favicons/manifest.html">
    <meta name="msapplication-TileImage" content="assets2/img/favicons/mstile-150x150.html">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets2/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendors/hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendors/loaders.css/loaders.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/user.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&amp;family=Jost:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="fixed-top">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-freya navbar-light"> <a class="navbar-brand" href="index.html">
                    <div class="freya-logo">Freya</div>
                </a><button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span
                            class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                    <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator"
                                href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.html">Slider Header</a></li>
                                <li><a class="dropdown-item" href="homes/header-slider-classic.html">Slider Classic</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-lg-auto flex-row justify-content-center py-3 py-lg-0 me-n2">
                        <li>
                            <a class="nav-link px-2" href="#">
                                <span class="fab fa-facebook-f" data-fa-transform="shrink-2"></span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link px-2" href="#">
                                <span class="fab fa-twitter" data-fa-transform="shrink-2"></span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link px-2" href="#">
                                <span class="fab fa-instagram" data-fa-transform="shrink-2"></span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link px-2" href="#">
                                <span class="fab fa-dribbble" data-fa-transform="shrink-2"></span>
                            </a>
                        </li>

                        <!-- Login -->
                        <li>
                            <a class="nav-link px-2 d-flex align-items-center" href="{{ route('login') }}">
                                <span class="fas fa-sign-in-alt me-1" data-fa-transform="shrink-2"></span>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="preloader" id="preloader">
            <div class="loader-box">
                <div class="loader"></div>
            </div>
        </div>
        <section class="py-0">
            <div class="swiper theme-slider min-vh-100"
                data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-zanim-timeline="{}">
                        <div class="bg-holder overlay overlay-freya"
                            style="background-image:url(assets2/img/header_1.jpg);" data-parallax="data-parallax"
                            data-rellax-speed="-3"></div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 justify-content-start align-items-end pt-11 pb-6 text-white"
                                data-zanim-timeline="{}">
                                <div class="col">
                                    <div class="row align-items-end">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    AvePoint Richmond</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="text-white fw-normal mb-4 mb-lg-0"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    More livable spaces</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-end">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="#!">View Case
                                                        Study</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-zanim-timeline="{}">
                        <div class="bg-holder overlay overlay-freya"
                            style="background-image:url(assets2/img/header_2.jpg);" data-parallax="data-parallax"
                            data-rellax-speed="-3"></div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 justify-content-start align-items-end pt-11 pb-6 text-white"
                                data-zanim-timeline="{}">
                                <div class="col">
                                    <div class="row align-items-end">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    French Valley</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="text-white fw-normal mb-4 mb-lg-0"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    Luxurious Apartment</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-end">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="#!">More about
                                                        Freya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-zanim-timeline="{}">
                        <div class="bg-holder overlay overlay-freya"
                            style="background-image:url(assets2/img/header_3.jpg);" data-parallax="data-parallax"
                            data-rellax-speed="-3"></div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 justify-content-start align-items-end pt-11 pb-6 text-white"
                                data-zanim-timeline="{}">
                                <div class="col">
                                    <div class="row align-items-end">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    Upper Chesterfield</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="text-white fw-normal mb-4 mb-lg-0"
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    Sorption Marking Studio</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-end">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="#!">More about
                                                        Sorption</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-white text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h3 class="mb-4">Freya Inc. is the hub for top architects and inventors, ready to turn your
                            imagination into reality</h3>
                        <p>All photographs provided for demo purposes only.</p>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-lg-4">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-12"><img class="img-fluid" src="assets2/img/img_1.jpg"
                                    alt="Residential" /></div>
                            <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                                <h5 class="ls text-uppercase mt-4 mb-3">Residential</h5>
                                <p class="text-justify">From Manitoba to Brooklyn, affordable, comfortable and livable
                                    houses for families of all shapes and sizes are covered by us. Cras justo odio,
                                    dapibus, egestas eget quam lorem ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-12"><img class="img-fluid" src="assets2/img/img_2.jpg"
                                    alt="Commercial" /></div>
                            <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                                <h5 class="ls text-uppercase mt-4 mb-3">Commercial</h5>
                                <p class="text-justify">We have also designing interiors for restaurants, bar or office
                                    spaces. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque
                                    penatibus et magnis dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-12"><img class="img-fluid" src="assets2/img/img_3.jpg"
                                    alt="Hospitality" /></div>
                            <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                                <h5 class="ls text-uppercase mt-4 mb-3">Hospitality</h5>
                                <p class="text-justify">You need your guests to have an unforgettable experience, Freya
                                    Inc. is ready to deliver. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                    dolor auctor. Fusce dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-10 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="bg-holder overlay overlay-1" style="background-image:url(assets2/img/banner_1.jpg);"
                data-parallax="data-parallax" data-rellax-percentage="0.5"></div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="overflow-hidden">
                    <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Museo</h1>
                </div>
                <div class="overflow-hidden">
                    <h4 class="ls fw-light text-uppercase text-300 mb-0" data-zanim-xs='{"delay":0.1}'>Manitoba</h4>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h3 class="mb-4">A coffee shop gains a warmer look</h3>
                        <p class="mb-7">Museo coffees got in touch with Freya for their renovation. We took over and
                            asked them to have a cup of coffee for themselves while the job is done! Sed posuere
                            consectetur est at lobortis. Fusce dapibs, tellus ac cursus commodo, tortor mauris
                            condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, nisi erat porttitor
                            ligula, eget lacinia odio sem nec elit. Pellentsque ornare se lacinia quam venenatis
                            vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4"><img class="w-100" src="assets2/img/img_4.jpg" alt="gallery image">
                    </div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="assets2/img/img_5.jpg" alt="gallery image">
                    </div>
                    <div class="col-12 mb-4"><img class="w-100" src="assets2/img/img_6.jpg" alt="gallery image">
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-10 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="bg-holder overlay overlay-1" style="background-image:url(assets2/img/banner_2.jpg);"
                data-parallax="data-parallax" data-rellax-percentage="0.5"></div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="overflow-hidden">
                    <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>A Touch of Green</h1>
                </div>
                <div class="overflow-hidden">
                    <h4 class="ls fw-light text-uppercase text-300 mb-0" data-zanim-xs='{"delay":0.1}'>in Brooklyn
                    </h4>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h3 class="mb-4">A Brooklyn space becomes greener than ever.</h3>
                        <p class="mb-7">With Freya's magical touch, a office space at Brooklyn becomes greener than
                            ever. Cras matti consectetur purus st amet fermentum. Donec id elit non mi porta gravida at
                            eget metus. Morbi leo risus, consectetur ac, vestibulum at eros. Aenean eu leo quam.
                            Pellentesque ornare sem lacinia qua venenatis vestibulum. Aenean lacinia bibendum nulla sed
                            consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis,
                            est non commodo luctus, nisi erat porttitor ligula neget.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_7.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_8.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_9.jpg') }}"
                            alt="gallery image"></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-10 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="bg-holder overlay overlay-1" style="background-image:url(assets2/img/banner_3.jpg);"
                data-parallax="data-parallax" data-rellax-percentage="0.5"></div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="overflow-hidden">
                    <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Prestana Remereo</h1>
                </div>
                <div class="overflow-hidden">
                    <h4 class="ls fw-light text-uppercase text-300 mb-0" data-zanim-xs='{"delay":0.1}'>Rio De Janeiro
                    </h4>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h3 class="mb-4">Prestana Remereo deserved a coat of paint</h3>
                        <p class="mb-7">Prestana Remereo wanted renovation, we simply delivered. Nullam quis risus
                            eget urna mollis ornare vel leo. Donec sed odio dui. Nullam quis risus eget ua mollis ornare
                            vel eu leo. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_10.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_11.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_13.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_12.jpg') }}"
                            alt="gallery image"></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-10 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="bg-holder overlay overlay-1" style="background-image:url(assets2/img/banner_4.jpg);"
                data-parallax="data-parallax" data-rellax-percentage="0.5"></div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="overflow-hidden">
                    <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Exquisite</h1>
                </div>
                <div class="overflow-hidden">
                    <h4 class="ls fw-light text-uppercase text-300 mb-0" data-zanim-xs='{"delay":0.1}'>Hawaii</h4>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h3 class="mb-4">Luxurious lifestyle in the Mansion</h3>
                        <p class="mb-7">No matter the task, Freya Inc. is up for it. Cum sociis natoque penatibus et
                            magnis dis parturient bee, nascetur ridiculus mus. Nulla vitae elit libero, pharetra.
                            Integer posuere erat ante venenatis posuere velit aliquet. Etiam wagner moura porta
                            malesuada magna mollis euismod mondar alu aflak.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_14.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_16.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-lg-6 mb-4"><img class="w-100" src="{{ asset('assets2/img/img_17.jpg') }}"
                            alt="gallery image"></div>
                    <div class="col-12"><img class="w-100" src="{{ asset('assets2/img/img_15.jpg') }}"
                            alt="gallery image"></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-300 py-4 fs-1 text-center">
        <div class="container"><a class="d-inline-block px-2 text-900 fs-1" href="#!"><span
                    class="fab fa-facebook-f" data-fa-transform="shrink-2"></span></a><a
                class="d-inline-block px-2 text-900 fs-1" href="#!"><span class="fab fa-twitter"
                    data-fa-transform="shrink-2"></span></a><a class="d-inline-block px-2 text-900 fs-1"
                href="#!"><span class="fab fa-instagram" data-fa-transform="shrink-2"></span></a></div>
        <!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <footer class="bg-primary text-center py-6">
        <div class="container">
            <p class="text-uppercase text-300 ls mb-3">Freya Incorporated, 019 Appellation Ave, New Jersey,
                535-118-7056</p>
            <p class="text-700 mb-0">Made with ❤️ by <a class="text-600" href="https://themewagon.com/"
                    target="_blank">ThemeWagon</a></p>
        </div>
    </footer>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets2/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/bigpicture/BigPicture.js') }}"></script>
    <script src="{{ asset('assets2/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/rellax/rellax.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('assets2/vendors/gsap/customEase.js') }}"></script>
    <script src="{{ asset('assets2/js/theme.js') }}"></script>
</body>


<!-- Mirrored from prium.github.io/freya/v2.2.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 12:11:22 GMT -->

</html>
