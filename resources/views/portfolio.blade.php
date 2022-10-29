@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class=" row who-we-header" style="background-image: url('/images/3.JPG')">
            <div class=" container who-we-title">
                <h2>Our Portfolios</h2>
            </div>
        </div>
    </div>
    <div class="container" id="portfolio">
        <div class="row my-4">
            <div class="col-lg-12   text-center">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web"
                            type="button" role="tab" aria-controls="pills-web" aria-selected="false">WEBSITES</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo"
                            aria-selected="false">Logos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-app-tab" data-bs-toggle="pill" data-bs-target="#pills-app"
                            type="button" role="tab" aria-controls="pills-app" aria-selected="false">Mobile App</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-broch-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-broch" type="button" role="tab" aria-controls="pills-broch"
                            aria-selected="false">Flyers & Brochures</button>
                    </li>
                </ul>

            </div>
        </div>

        <div class="row popup-gallery ">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web1.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web1.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4  my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web2.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web2.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web3.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web3.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web4.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web4.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web5.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web5.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web5.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web5.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo1.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo1.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo2.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo2.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo3.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo3.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo4.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo4.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo5.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo5.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo6.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo6.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo7.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo7.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo8.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo8.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo9.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo9.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo0.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo0.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob1.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob1.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob2.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob2.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob3.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob3.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob4.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob4.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob5.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob5.PNG"></a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                {{-- end first tab --}}
                <div class="tab-pane fade " id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row  ">
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web1.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web1.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4  my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web2.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web2.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web3.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web3.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web4.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web4.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4 " data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/web5.png" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/web5.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end second tab --}}
                <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                    <div class="row  ">
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo1.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo1.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo2.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo2.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo3.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo3.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo4.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo4.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo5.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo5.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo6.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo6.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo7.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo7.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo8.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo8.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo9.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo9.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo0.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo0.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/logo.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/logo.jpeg"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="tab-pane fade show" id="pills-app" role="tabpanel" aria-labelledby="pills-app-tab">
                    <div class="row  ">
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob1.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob1.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob2.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob2.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob3.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob3.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob4.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob4.PNG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/mob5.PNG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/mob5.PNG"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-broch" role="tabpanel" aria-labelledby="pills-broch-tab">
                    <div class="row  ">

                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/broch1.jpeg" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/broch1.jpeg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/broch2.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/broch2.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/broch3.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/broch3.JPG"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 my-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="500">
                            <div class="resources-item">
                                <div class="resources-category-image">
                                    <a href="/images/portfoilo/broch4.JPG" title=""><img class="img-responsive" alt=""
                                            src="/images/portfoilo/broch4.JPG"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
