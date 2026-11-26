@extends('layouts.main')

@section('content')
 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                        "delay": 4000
                    } 
                }'>

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider__bg" style="background-image: url(images/backgrounds/ls1.jpg);">
                        </div>
                        <!-- <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3"></div>
                        <div class="main-slider__shape-4"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__sub-title-box">
                                            <!-- <div class="main-slider__sub-title-icon">
                                                <img src="images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div> -->
                                            <!-- <p class="main-slider__sub-title">Best shipping</p> -->
                                        </div>
                                        <h2 class="main-slider__title">Premium Visual Appearance <br> Simplicity and Durability</h2>
                                        </p>
                                        <div class="main-slider__btn-and-call-box">
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Read
                                                    more<span></span></a>
                                            </div>
                                            <div class="main-slider__call">
                                                <div class="main-slider__call-icon">
                                                    <span class="icon-phone"></span>
                                                </div>
                                                <div class="main-slider__call-number">
                                                    <p>Need help?</p>
                                                    <h5><a href="tel:307555-0133">(307) 555-0133</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider__bg" style="background-image: url(images/backgrounds/ls2.webp);">
                        </div>
                        <!-- <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3"></div>
                        <div class="main-slider__shape-4"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__sub-title-box">
                                            <!-- <div class="main-slider__sub-title-icon">
                                                <img src="images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div> -->
                                            <!-- <p class="main-slider__sub-title">Best shipping</p> -->
                                        </div>
                                        <h2 class="main-slider__title">Minimalist, functional, <br> revolutionary.
                                        </h2>
                                        <!-- <p class="main-slider__text">Minimalist, functional, revolutionary. </p>     -->
                                        <div class="main-slider__btn-and-call-box">
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Read
                                                    more<span></span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider__bg" style="background-image: url(images/backgrounds/ls3.jpg);">
                        </div>
                        <!-- <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3"></div>
                        <div class="main-slider__shape-4"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__sub-title-box">
                                            <!-- <div class="main-slider__sub-title-icon">
                                                <img src="images/icon/main-slider-sub-title-icon.png" alt="">
                                            </div> -->
                                            <!-- <p class="main-slider__sub-title">Best shipping</p> -->
                                        </div>
                                        <h2 class="main-slider__title">Minimalist, functional, <br> revolutionary.
                                        </h2>
                                        <!-- <p class="main-slider__text">Minimalist, functional, revolutionary. </p>   -->
                                        <div class="main-slider__btn-and-call-box">
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Read
                                                    more<span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->

        <!--Services One Start-->
        <section class="services-one mb-5">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">LATEST SERVICE</span>
                    </div>
                    <h2 class="section-title__title">Your supply chain partner<br> for success</h2>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-postbox"></span>
                            </div>
                            <h3 class="services-one__title"><a href="express-freight-solutions.html">Fast and reliable
                                    logistics
                                    the solutions</a></h3>
                            <div class="services-one__btn-box">
                                <a href="express-freight-solutions.html" class="thm-btn services-one__btn">Read
                                    more<span></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-customer-service"></span>
                            </div>
                            <h3 class="services-one__title"><a href="quick-move-logistics.html">Bridges Construction
                                    is
                                    an
                                    essen industry</a></h3>
                            <div class="services-one__btn-box">
                                <a href="quick-move-logistics.html" class="thm-btn services-one__btn">Read
                                    more<span></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-container"></span>
                            </div>
                            <h3 class="services-one__title"><a href="speedy-dispatch.html">That involves building
                                    adesig
                                    the a structures</a></h3>
                            <div class="services-one__btn-box">
                                <a href="speedy-dispatch.html" class="thm-btn services-one__btn">Read
                                    more<span></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->
@endsection

