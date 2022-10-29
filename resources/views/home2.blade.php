@extends('layouts.master')
@section('content')

    <style>

    </style>

    <div>
        <!-- Slider main container -->
        <div class="swiper swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url(/images/slide1.JPG)">
                </div>
                <div class="swiper-slide" style="background-image: url(/images/slide2.JPG)">
                </div>
                <div class="swiper-slide" style="background-image: url(/images/slide3.JPG)">
                </div>
                <div class="swiper-slide" style="background-image: url(/images/slide4.JPG)">
                </div>
                <div class="swiper-slide" style="background-image: url(/images/slide5.JPG)">
                </div>
                <div class="swiper-slide" style="background-image: url(/images/slide6.JPG)">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination">
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>


    <section class="sec-sec">
        <div class=" container">

            <div class="row">
                <div class="col-md-8 col-lg-8 section_2">
                    <h2 class="main_title">What we do?</h2>
                    <p class="para-text">
                        With good taste, talented team and great technology, we will assist you and your firm in creating
                        best designs and websites that will stand out from all the rest. “IT” is all you need, and Your
                        trust is all we need.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid orange">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-lg-6 ">
                    <h2 class="main_title">Who are we? </h2>
                    <p class="para-text">
                        We are a young and dynamic team with years of expertise in Website and App Development, Graphic
                        designing and Social Media Management. Check our packages below or customize packages as per your
                        needs. Just get in touch and we will be there for you and your business.
                    </p>

                    <button class="custom-btn my-4 btn-5"><span>Contact Us</span></button>

                </div>
                <div class="col-md-6 col-lg-6 ">
                    <div class="">
                        <img src="/images/3.JPG">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="my-10">

        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-12   mb-10 text-center">
                    <h2 class="main_title"> Our Services</h2>
                </div>
                <div class="service col-md-4">
                    <img src="/images/web-dev.PNG">
                    <h2>Websites Designing & Development</h2>
                    <p class="para-text">
                        Our Websites are customized from scratch especially for you. No ready templates used, so we make
                        sure your website is unique.
                    </p>
                </div>
                <div class="service col-md-4">
                    <img src="/images/graphic.PNG">
                    <h2>Graphic Designing</h2>
                    <p class="para-text">
                        We design from scratch everything, starting from Logos, business cards, brochures and flyers, even
                        your Social Media digital art.
                    </p>
                </div>
                <div class="service col-md-4">
                    <img src="/images/media.PNG">
                    <h2>Social Media Management</h2>
                    <p class="para-text">
                        Let us handle your social media for you, starting with a monthly Plan for all your social media
                        accounts, designing your posts and stories, and monthly reports of how your sm account is doing.
                    </p>
                </div>
                <div class="service col-md-4">
                    <img src="/images/app-dev.PNG">
                    <h2>Mobile App Designing & Development</h2>
                    <p class="para-text">
                        We create rich, unique and innovative applications for iOS and Android platforms. We develop native
                        apps for both Android as well as iOS devices in both English and Arabic languages. Our apps are
                        extensively researched and tested to ensure they function perfectly and respond to all the criteria
                        that our clients set.
                    </p>
                </div>
                <div class="service col-md-4">
                    <img src="/images/translation.PNG">
                    <h2>Content Translation</h2>
                    <p class="para-text">
                        We are a multilingual team who speak 5 Languages, English, Arabic, Polish, Persian and …….. So we
                        can offer translating your Social Media Content or Websites/ Application Content from and to any of
                        the above languages.
                    </p>
                </div>
 

            </div>
        </div>
    </section>


    <section>
        <div class="container plans">
            <div class="row">
                <div class="col-lg-12 mt-10 mb-10 text-center">
                    <h2 class="main_title"> Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-10 text-center">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">WEBSITES</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">SOCIAL MEDIA MANGMENT</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">GRAPHIC DESIGN</button>
                        </li>
                        
                    </ul>

                </div>
            </div>
            <div class="row my-24">

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="col-lg-4">

                            <div class="pricing__table plan1 ">
                                <div class="icon type-01">
                                    <span class="fa fa-paper-plane" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 1</h3>
                                <h1 class="service__price">
                                    25
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>
                        <div class="col-lg-4" style="z-index: 1">

                            <div class="pricing__table  plan2">
                                <div class="icon type-02">
                                    <span class="fa fa-plane" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 2</h3>
                                <h1 class="service__price">
                                    50
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing__table plan3">
                                <div class="icon type-03">
                                    <span class="fa fa-rocket" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 3</h3>
                                <h1 class="service__price">
                                    100
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>
                    </div>
                    {{-- end first tab --}}
                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-lg-4">

                            <div class="pricing__table plan1 ">
                                <div class="icon type-01">
                                    <span class="fa fa-paper-plane" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 1</h3>
                                <h1 class="service__price">
                                    25
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>
                        <div class="col-lg-4" style="z-index: 1">

                            <div class="pricing__table  plan2">
                                <div class="icon type-02">
                                    <span class="fa fa-plane" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 2</h3>
                                <h1 class="service__price">
                                    50
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing__table plan3">
                                <div class="icon type-03">
                                    <span class="fa fa-rocket" aria-hidden="true">
                                    </span>
                                </div>
                                <h3 class="heading">Plan 3</h3>
                                <h1 class="service__price">
                                    100
                                    <sup class="dollar__sign">$</sup>
                                </h1>
                                <ul class="features__list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>
                                        Lorem Ipsum
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Lorem Ipsum
                                    </li>
                                </ul>
                                <a href="#" class="cta_btn">Request</a>
                            </div>
                        </div>

                    </div>
                    {{-- end second tab --}}
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="port-sec">
        <div class="container ">

            <div class="row  ">
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/3.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/2.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/1.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/3.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/2.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 container1 my-4 col-lg-4">
                    <div class="content">
                        <a href="3" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="/images/1.JPG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </div>
                </div>
         

                <div class="col-lg-12 text-center">
                    <button class="custom-btn my-4 btn-5"><a href="/portfolio" target="_blank"><span>All
                                Portfolio</span></a></button>


                </div>

            </div>
        </div>
    </section>




@endsection
