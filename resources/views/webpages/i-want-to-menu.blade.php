<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>I Want To</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

<!-- header -->
@include('webpages/include/header')
<main>
    <!-- Slider Area Start-->
    <div class="slider-area my-slider-bg">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center  slider-height-4">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h2 class="about-h2" data-animation="fadeInLeft" data-delay=".6s ">About Us</h2>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Slider Shape -->
        <!-- <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
        </div> -->
    </div>
    <!-- Slider Area End -->
    <!--?  Contact Area start  -->
    <section class="i-want-to-section">
        <div class="container">
            <div class="row df-row-cc">
                <div class="col-md-8 col-sm-12">
                    <div class="div-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="df-col-cc">
                                    <img src="./assets/img/add-user.png" alt="" class="mob-icon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-12 mt-3 ">
                                <h2 class="text-center">Please Sign Up</h2>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-12 my-links">
                                <div class="text-left ">
                                    <div class="p-5">
                                     <a href="create-vehicle" class="hvr-underline-from-left">  <h2><i class="fas fa-plus"></i> Create a Vehicle/Bike Account</h2></a>
                                    </div>
                                    <div class="p-5">
                                     <a href="report-stolen" class="hvr-underline-from-left">  <h2><i class="fas fa-plus"></i> Report a Stolen Vehicle/Bike</h2></a>
                                    </div>
                                    <div class="p-5">
                                     <a href="update-recovered" class="hvr-underline-from-left">  <h2><i class="fas fa-plus"></i> Update Recovered Vehicle/Motorbike</h2></a>
                                    </div>
                                    <div class="p-5 mb-5">
                                     <a href="search-before-buying" class="hvr-underline-from-left">  <h2><i class="fas fa-plus"></i> Search before buying Vehicle/Motorbike</h2></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

@include('webpages/include/footer')


@include('webpages/include/foot-link')



<script>
// $('#phone').intlTelInput({
//     initialCountry: "auto",
//     geoIpLookup: function(callback) {
//         jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
//             callback(countryCode);
//         });
//     },
//     utilsScript: 'js/utils.js'
// });
// $("#phone").intlTelInput({
//     utilsScript: "./assets/js/utils.js"
// });
// $("#country_selector").countrySelect();
</script>

</body>

</html>