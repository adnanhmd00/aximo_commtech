<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Sign Up</title>
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
                <div class="col-md-10 col-sm-12">
                    <div class="div-body">
                        <div class="row">
                            <div class="col-12">
                            @if(session()->has('exist_email'))
                            <div class="alert alert-danger text-center">
                                {{ session()->get('exist_email') }}
                            </div>
                            @endif
                            @if(session()->has('registrationsuccess'))
                            <div class="alert alert-success text-center">
                                 {{ Session::pull('registrationsuccess') }} 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif 
                                <div class="df-col-cc">
                                    <img src="./assets/img/mob-icon.png" alt="" class="mob-icon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3 ">
                                <h2 class="text-center">Sign Up Here</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-1 df-row-cc">
                                    <form class="needs-validation" action="/api/register" method="post">
                                    <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="country" class="form-label pr-3">Select Country</label>
                                                <input id="country_selector"  type="text" readonly name="country" title="" onchange="random()">
                                                <!-- <select class="country-drop-my" id="country" onchange="random()" name="country">
                                                    <option value="">Select Country</option>
                                                    <option value="+229"> Benin</option>
                                                    <option value="+226">Burkina Faso</option>
                                                    <option value="+238">Cape Verde</option>
                                                    <option value="+235">Chad</option>
                                                    <option value="+225">Cote d'Ivoire</option>
                                                    <option value="+220">Gambia</option>
                                                    <option value="+233">Ghana</option>
                                                    <option value="+224">Guinea</option>
                                                    <option value="+245">Guinea-Bissau</option>
                                                    <option value="+231">Liberia</option>
                                                    <option value="+223">Mali</option>
                                                    <option value="+222">Mauritania</option>
                                                    <option value="+227">Niger</option>
                                                    <option value="+234">Nigeria</option>
                                                    <option value="+290">Saint Halena</option>
                                                    <option value="+221">Senegal</option>
                                                    <option value="+232">Sierra Leone</option>
                                                    <option value="+228">Togo</option>
                                                </select> -->
                                                

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="validationServer01" class="form-label">Name</label>
                                                <input type="text" class="form-control form-control-2"
                                                    id="" placeholder="Name" title="Name should be A-Z" required name="name">
                                                <div class="invalid-feedback">
                                                    Please enter your Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="validationServerUsername" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control form-control-2"
                                                        id="validationServerUsername" placeholder="Email"
                                                        aria-describedby="inputGroupPrepend3" required name="email">
                                                    <div class="invalid-feedback">
                                                        Please enter your email
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="validationMobile" class="form-label">Mobile</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-2" id="phone"
                                                         aria-describedby="inputGroupPrepend3"
                                                        required name="mobile">
                                                    <div class="invalid-feedback">
                                                        Please enter your Mobile Number
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12 mb-3">
                                                <label for="validationMobile" class="form-label">Mobile</label>
                                                <div class="input-group">
                                                   
                                                    <input type="tel" class="col-11 mob-inp1 form-control readonly form-control-2" 
                                                         title=""
                                                        required name="mobile" placeholder="Mobile">
                                                    <div class="invalid-feedback">
                                                        Please enter your Mobile Number
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12 mb-3">
                                                <label for="validationpass" class="form-label">Password</label>
                                                <input type="password" class="form-control form-control-2"
                                                    id="validationServer05" placeholder="Password" required name="password">
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                               <div>
                                                  <a href="login" ><p class="login">Already a member? Log In </p></a>
                                               </div>
                                            </div>
                                           


                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck3" required>
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="text-center w-100">
                                          <button class=" mt-4 btn btn-primary" type="submit">  Sign Up </button>

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
<script>
    $(".readonly").keydown(function(e){
        e.preventDefault();
    });
</script>