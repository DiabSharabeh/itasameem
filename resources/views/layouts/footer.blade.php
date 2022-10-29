<!-- whatsup icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+48571439117&text=Hi" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- ......... -->
<section class="f-footer  ">
    <footer class="  ">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="footer-widget mb-4">
                        <h2 class="f-heading-2 py-3">
                            <a class="" href="#"><img src="/images/logo2.png" class="custom-logo"
                                    alt=" " /></a>
                        </h2>
                        <p class="footer-text para-text">
                            With good taste, talented team and great technology, we will assist you and your firm in
                            creating best designs and websites that will stand out from all the rest. “IT” is all you
                            need, and Your trust is all we need.
                        </p>
                        <div class="flex footer-icon">
                            <a target="_blank" href="https://www.facebook.com/itasameem" class="fa fa-facebook"></a>
                            <a target="_blank" href="https://twitter.com/itasameem" class="fa fa-twitter"></a>
                            <a target="_blank" href="https://www.linkedin.com/company/itasameem"
                                class="fa fa-linkedin"></a>
                            <a target="_blank" href=" https://www.instagram.com/itasameem" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">

                    <div class="footer-widget mb-4 ml-md-4">
                        <h2 class="f-heading-2 footer-header py-4">Pages</h2>
                        <ul class="list-unstyled line-h-2">
                            <li><a href="/home" class="footer-p para-text ">Home</a></li>
                            <li><a href="/our-services" class="footer-p para-text ">Our Services</a></li>
                            <li><a href="/portfolio" class="footer-p para-text ">Portfolio</a></li>
                            <li><a href="/contact " class="footer-p para-text ">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 mt-4">

                    <div class="footer-widget mb-4 ml-md-4">
                        <h2 class="f-heading-2 footer-header py-4">Contact Us</h2>
                        <ul class="list-unstyled line-h-2">
                            <!-- <li class="pb-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                    <span class="footer-p para-text "> Dubai, United Arab Emirates </span>
                               </li> -->
                            {{-- <li class="pb-1">
                                <i class="fas fa-phone"></i>
                                <span class="footer-p para-text ">Call us,123456789</span>
                            </li> --}}
                            <li class="pb-1">
                                <i class="far fa-envelope-open"></i>
                                <span class="footer-p para-text ">info@itasameem.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </footer>
</section>
<section class="sub-footer p-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center white-1">
                <div href="#" class="sub-footer-p">© Itasameem. 2021. All Rights Reserved</div>
            </div>

        </div>
    </div>
    </div>
</section>












{{-- scripts --}}



{{-- botstrab --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

{{-- swiper --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


{{-- popup --}}
<script src="{{ asset('popup/jquery.magnific-popup.js') }}"></script>
{{-- main Js --}}
<script src="/js/aos.js"></script>
<script src="/js/main.js?v={{ time() }}"></script>


<script>
    const swiper = new Swiper('.swiper1', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        scrollbarHide: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
        },


    });
</script>

<script>
    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        loop: true,
        scrollbarHide: true,



        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2000,
        },


    });
</script>



<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Solodev</small>';
                }
            }
        });
    });
</script>
