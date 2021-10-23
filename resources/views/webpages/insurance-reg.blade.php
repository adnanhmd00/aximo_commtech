<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Insurance Company Registration</title>
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
            <div class="row">
                {{-- <div class="col-md-12">
                    <h1 class="text-center insurance-h1">Insurance Company Registration</h1>
                </div> --}}
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-5">
                
                    <div class="insu-div">
                        <img src="assets/img/insu.png" alt="logo" class="dealer-img img-fluid">
                    </div>
                </div>
                <div class="col-md-7 col-sm-12  d-block m-auto">
                    <h1 class="text-center insurance-h1">Insurance Company Registration</h1>
                    <div class="div-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="df-col-cc">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-5 ">

                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-12">
                            @if(session()->has('insurance_company'))
    <div class="alert alert-danger text-center">
        {{ session()->get('insurance_company') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
    </div>
@endif
@if(session()->has('insurance_mobile'))
    <div class="alert alert-danger text-center">
        {{ session()->get('insurance_mobile') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
    </div>
@endif
@if(session()->has('insurance_email'))
    <div class="alert alert-danger text-center">
        {{ session()->get('insurance_email') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
    </div>
@endif
                                <div class="form-1">
                                
                                    <form class="needs-validation" action="vehicle_insurance" method="post">
                                    {{csrf_field()}}
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationServer01" class="form-label">Company
                                                    Name</label>
                                                <input type="text" class="form-control form-control-2"
                                                    id="validationServer01" placeholder="Company Name" required name="company_name">
                                            </div>
                                            <!-- <div class="col-md-6 mb-3">
                                                <label for="validationServer01" class="form-label">Company/Business Reg
                                                    Number</label>
                                                <input type="text" class="form-control form-control-2"
                                                    id="validationServer01" placeholder=" " required>
                                            </div> -->
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <label for="country" class="form-label pr-3">Select Country</label>
                                                <input id="country_selector" type="text" class="ins-reg-country"
                                                    readonly name="country" required> 
                                                {{-- <label for="country" class="form-label pr-3">Select Country</label>
                                                
                                                    <select class="country-drop-my" id="country" onchange="random()" name="country">
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
                                                </select> --}}

                                            </div>
                                        </div>

                                        <div class="form-row">
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


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationServerUsername" class="form-label">Email
                                                    Address</label>
                                                <div class="input-group">
                                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control form-control-2"
                                                        id="validationServerUsername" placeholder="Email Address"
                                                        aria-describedby="inputGroupPrepend3" required name="email_id">
                                                    <div class="invalid-feedback">
                                                        Please enter your email
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 p-0">
                                            <label for="validationpass" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-2"
                                                id="validationServer05" placeholder="Password" required name="password">
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12 mb-3 p-0">
                                            <div>
                                                <a href="dealership-login.php">
                                                    <p class="login">Already a Dealer? Log In </p>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="text-center w-100">
                                            <button class=" mt-4 mb-4 btn btn-primary" type="submit">Save /
                                                Send</button>

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