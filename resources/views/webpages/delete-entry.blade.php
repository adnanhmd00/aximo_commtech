<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Delete Entry</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

<!-- header -->
@include('webpages/include/header')
<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">Delete Entry</h1>
                            <h2 class="delete-h2">Remove a previously registered database entry</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
        </div>
    </div>
    <!-- Slider Area End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container form-container">
            <div class="row df-row-cc">
                <div class="col-12">
                    <h2 class="contact-title text-center">Delete previously registered entry from database </h2>
                </div>
                <div class="col-lg-8">
                    <div>
                        <form class="form-contact contact_form" action="contact_process.php" method="post"
                            id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">Vehicle ID (VIN)
                                                :</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">Email Address
                                                :</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                               
                                <div class="col-md-12">
                                    <div>
                                        <h4>Enter the Vehicle ID (VIN) of the car and your e-mail address (the same you
                                            entered when you created the entry)</h4>
                                            <br>
                                            <h4>
                                            After pressing the 'Delete' button, we will send you an acceptance e-mail to your e-mail address.</h4>
                                            <br>
                                            <h4 class="delete-text-h4">Your entry will be removed from our database after your confirmation (please follow the instructions in that e-mail).</h4>
                                    </div>
                                </div>
                                <div class="d-block m-auto">
                                    <div class="form-group mt-3 mb-5 ">
                                        <button type="submit"
                                            class="button button-contactForm boxed-btn">Delete</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
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


</body>

</html>