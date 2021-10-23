<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Dealership Registration</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

<!-- header -->
@include('webpages/include/header')
<main>
    <!-- Slider Area Start-->
    <div class="slider-area my-slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center  slider-height-4">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 class="about-h1" data-animation="fadeInLeft" data-delay=".6s ">About Us</h1>
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
    <section class="i-want-to-section mt-5 pt-5">
        <div class="container">

            <div class="row ">
                <div class="col-md-5">
                    <div class="dealer-img-div">
                        <img src="assets/img/rent-a-car.png" alt="logo" class="dealer-img img-fluid">
                        {{-- <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1heeojnu.json"
                            background="transparent" speed="1" style="width:100%; height: 600px;" loop autoplay>
                        </lottie-player> --}}
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="div-body">
                        <div class="row">
                            <div class="col-12">
                                @if (session()->has('dealer_company'))
                                    <div class="alert alert-danger text-center">
                                        {{ session()->get('dealer_company') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session()->has('dealer_mobile'))
                                    <div class="alert alert-danger text-center">
                                        {{ session()->get('dealer_mobile') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session()->has('dealer_email'))
                                    <div class="alert alert-danger text-center">
                                        {{ session()->get('dealer_email') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="df-col-cc">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-5 ">
                                <h2 class="text-center">Dealership Registration</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-1">
                                    <form class="needs-validation" action="store_dealer" method="get">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationServer01" class="form-label">
                                                    Dealership Name</label>
                                                <input type="text" class="form-control form-control-2"
                                                    id="validationServer01" placeholder="Dealership Name" required
                                                    name="company_name">
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="country" class="form-label pr-3">Select Country</label>
                                                <input id="country_selector" type="text" class="ins-reg-country"
                                                    readonly name="country" required> 
                                               
                                            </div>
                                        </div>
                                      
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationMobile" class="form-label">Mobile
                                                    Number</label>
                                                <div class="input-group">
                                                 <input type="number" class="form-control form-control-2" id="phone"
                                                        aria-describedby="inputGroupPrepend3" required name="mobile"> 
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationServerUsername" class="form-label">Email
                                                    Address</label>
                                                <div class="input-group">
                                                    <input type="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                        class="form-control form-control-2"
                                                        id="validationServerUsername" placeholder="Email Address"
                                                        aria-describedby="inputGroupPrepend3" required name="email_id">
                                                    <div class="invalid-feedback">
                                                        Please enter your email
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                        <div class="col-md-12 mb-3 p-0">
                                            <label for="validationpass" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-2"
                                                id="validationServer05" placeholder="Password" required name="password">
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>
                                        
                                        </div>
                                        <!-- <div class="col-md-12 mb-3 p-0">
                                            <label for="validationpass" class="form-label">Password</label>
                                            <input type="text" class="form-control form-control-2"
                                                id="validationServer05" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 p-0">
                                            <div>
                                                <a href="dealership-login.php">
                                                    <p class="login">Already a Dealer? Log In </p>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="text-center w-100">
                                            <button class=" mt-4 mb-4 btn btn-primary" type="submit">Next</button>

                                        </div>
                                    </form>
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



</body>

</html>
