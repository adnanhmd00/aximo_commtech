<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Log In</title>
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
            <div class="row df-row-cc">
                <div class="col-md-8 col-sm-12">
                    <div class="div-body">
                    @if(session()->has('message'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if(session()->has('forgetPassword'))
                    <div class="alert alert-success text-center">
                         {{ Session::pull('forgetPassword') }} 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif  
                        <div class="row">
                            <div class="col-12">
                                <div class="df-col-cc">
                                    <img src="./assets/img/mob-icon.png" alt="" class="mob-icon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3 ">
                                <h2 class="text-center">Forget-Password</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-1 df-row-cc">
                                    <form class="needs-validation" method="post"  action="forget_password">
                                        {{csrf_field()}}
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="validationServerUsername" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input type="text" name="email" class="form-control form-control-2"
                                                        id="validationServerUsername" placeholder="Please enter your register email"
                                                        aria-describedby="inputGroupPrepend3" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your email
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 p-0">
                                            <div>
                                                <a href="login">
                                                    <p class="login">Sign in </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center w-100">
                                            <button class=" mt-4 btn btn-primary" type="submit">
                                                    Submit </button>

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