@extends('layouts.master')
@section('content')

<section>
    <div class="container plans">
        <div class="row mt-24">
            <div class="col-lg-12 mt-10 text-center">
                <h2 class="main_title"> Packages</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">

                <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
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
                        <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                            aria-selected="false">Marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-combo-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-combo" type="button" role="tab" aria-controls="pills-combo"
                            aria-selected="false">COMBO</button>
                    </li>

                </ul>

            </div>
        </div>
        <div class="row my-6"> 
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="col-lg-4">

                        <div class="pricing__table plan1 ">
                            <div class="icon type-01">

                            </div>
                            <h3 class="heading">BRONZE</h3>
                            <h1 class="service__price">
                                899
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Up to 4 Pages
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Static Content
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Mobile Friendly
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    One Month Free Service
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    SEO
                                </li>

                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing__table  plan2">
                            <div class="icon type-02">

                            </div>
                            <h3 class="heading">SILVER</h3>
                            <h1 class="service__price">
                                1699
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Up to 6 Pages
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Dashboard
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Dynamic Content
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Mobile Friendly
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Social Media Account
                                </li>
                                {{-- <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                   SEO
                                </li> --}}
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing__table plan3">
                            <div class="icon type-03">

                            </div>
                            <h3 class="heading">GOLD</h3>
                            <h1 class="service__price">
                                2499
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    10+ Pages
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Dashboard
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Dynamic Content
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Multilingual
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Social Media Account
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                </div>
                {{-- end first tab --}}
                <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col-lg-4">
                        <div class="pricing__table plan1 ">
                            <div class="icon type-01">

                            </div>
                            <h3 class="heading">BRONZE</h3>
                            <h1 class="service__price">
                                270
                                <sup class="dollar__sign"> $</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    15 Posts/Stories
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Up to 3 Designs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Social Media Management/Posting
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Report
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4" style="z-index: 1">

                        <div class="pricing__table  plan2">
                            <div class="icon type-02">

                            </div>
                            <h3 class="heading">SILVER</h3>
                            <h1 class="service__price">
                                399
                                <sup class="dollar__sign"> $</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    20 Posts/Stories
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Up to 5 Designs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Social Media Management/Posting
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Report
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing__table plan3">
                            <div class="icon type-03">

                            </div>
                            <h3 class="heading">GOLD</h3>
                            <h1 class="service__price">
                                699
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    30 Posts/Stories
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Up to 5 Designs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    SM Management
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    SM Communication
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>

                </div>
                {{-- end second tab --}}
                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
                    <div class="col-lg-4">
                        <div class="pricing__table plan1 ">
                            <div class="icon type-01">

                            </div>
                            <h3 class="heading">BRONZE</h3>
                            <h1 class="service__price">
                                25
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                   Instagram Account
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Number of posts: Up to 12 Posts
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Designs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Posting/ Replying
                                </li>
                                                                    <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Reports
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4" style="z-index: 1">

                        <div class="pricing__table  plan2">
                            <div class="icon type-02">

                            </div>
                            <h3 class="heading">SILVER</h3>
                            <h1 class="service__price">
                                50
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Facebook,Instagram Accounts
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Number of posts: Up to 16 Posts
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Designs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Posting/ Replying
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Reports
                                </li>
                            </ul>
                            <a href="/contact" class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing__table plan3">
                            <div class="icon type-03">

                            </div>
                            <h3 class="heading">GOLD</h3>
                            <h1 class="service__price">
                                100
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                   Facebook,Instagram,Twitter Accounts
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Number of posts: Up to 20 Posts
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Theme Designs 
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Posting/ Replyings
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Reports
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                </div>

                {{-- end second tab --}}
                <div class="tab-pane fade" id="pills-combo" role="tabpanel" aria-labelledby="pills-combo-tab">
                    <div class="col-lg-4">
                        <div class="pricing__table plan1 ">
                            <div class="icon type-01">

                            </div>
                            <h3 class="heading">BRONZE</h3>
                            <h1 class="service__price">
                                999
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Bronze Plan Website
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Logo Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    15 SM Posts/Stories
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    SM Management
                                  </li>
                                  <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Monthly Report
                                  </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4" style="z-index: 1">

                        <div class="pricing__table  plan2">
                            <div class="icon type-02">

                            </div>
                            <h3 class="heading">SILVER</h3>
                            <h1 class="service__price">
                                1999
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Silver Plan Website
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Logo Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Business Card Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    20 SM Posts/Stories
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    SM Management
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing__table plan3">
                            <div class="icon type-03">

                            </div>
                            <h3 class="heading">GOLD</h3>
                            <h1 class="service__price">
                                2999
                                <sup class="dollar__sign">$</sup>
                            </h1>
                            <ul class="features__list">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Gold Plan Website
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    2 Languages Website
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true">
                                    </i>
                                    Logo Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Business Card Design
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    30 SM Posts/Stories
                                </li>
                            </ul>
                            <a href="/contact"  class="cta_btn">Request</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


@endsection