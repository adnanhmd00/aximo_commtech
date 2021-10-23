<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Commtechsoft</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

<body>
    <!-- header -->
    @include('webpages/include/header')

    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider d-flex align-items-center slider-height index-hei ">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-9 ">
                                <div class="hero__caption">
                                    <!-- <span data-animation="fadeInLeft" data-delay=".3s">Best Domain & hosting service provider</span> -->
                                  <!--@if(session()->has('success'))
                                    <div class="alert alert-success text-center">
                                         {{ Session::pull('success') }} 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif -->
                                    @if(session()->has('registrationsuccess'))
                                    <div class="alert alert-success text-center">
                                         {{ Session::pull('registrationsuccess') }} 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif  
                                    <h1 data-animation="fadeInLeft" data-delay=".6s ">Check if a car was reported stolen
                                        to us</h1>
                                    <p>Commtechsoft is an Independent Global Motor Vehicle Database. </p>
                                    <ul>
                                        <li> <i class="fas fa-arrow-right pr-4"></i>Secure your vehicle by providing details on our database.</li>
                                        <li><i class="fas fa-arrow-right pr-4"></i>You can provide details of your stolen cars or bike to us to &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prevent 
                                              sales around the world.</li>
                                        <li><i class="fas fa-arrow-right pr-4"></i>Avoid buying a stolen car or bike , search before you buy.</li>
                                    </ul>
                                    {{-- <p data-animation="fadeInLeft" data-delay=".8s">Enter the Vehicle ID (VIN) and press
                                        the 'Search' button.</p>
                                    
                                    <div class="slider-btns">
                                        <form action="#" class="search-box">
                                            <div class="input-form">
                                                <input type="text" placeholder="Enter VIN ">
                                                <!-- icon search -->
                                                <div class="search-form">
                                                    <button><i class="ti-search"></i></button>
                                                </div>
                                                <!-- icon search -->
                                                <div class="world-form">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_mq11wjtp.json"
                                        background="transparent" speed="1" style="width: 700px; height: 300px;" loop
                                        autoplay></lottie-player>
                                    <!-- <img src="assets/img/globe-map.gif" alt="" data-animation="fadeInRight"
                                        data-delay="1s"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <!-- <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".3s">Best Domain & hosting service
                                        provider</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Powerful web hosting</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">Supercharge your WordPress hosting
                                        with detailed
                                        website analytics, marketing tools, security, and data
                                        backups all in one place.</p>
                                   
                                    <div class="slider-btns">
                                        
                                        <a data-animation="fadeInLeft" data-delay="1s" href="industries.html"
                                            class="btn radius-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="assets/img/hero/hero_right.png" alt="" data-animation="fadeInRight"
                                        data-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
            </div> -->
        </div>
        <div class="domain-search-area section-bg1">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h2>Why Commtechsoft ?</h2>
                        <p>Car theft has become a globally pronounced crime as investigation activities and operations
                            concerning vehicle recovery are increasing across borders. The development and improvement
                            of available physical and technological anti-car theft devices and system software have not
                            deterred the increase in the number of vehicles under the clutches of thieves. Recently, top
                            of the range cars have been the favourites of the criminals, and developments indicate that
                            the leading anti-car theft deterrents - police, are handicapped in thwarting the pace of the
                            criminal gangs cashing on the automobile theft. However, the civilisation that encourages
                            and promotes the easy movement of citizens across borders has become a contributory factor
                            to trans-border car theft. It is an observation that no country has prioritised a crime as
                            car theft like immigration crime. Hence automobiles quickly escaped the ubiquitous eyes of
                            the law at sea and land border as human identity is the target of law enforcers.
                            <br>

                            Protection of life and properties is the primary priority of governments but a fundamental
                            responsibility of the police. In this regard, promoting a crime prevention methodology
                            should be considered citizens' contribution to promoting peaceful co-existence. Such can
                            also be described as allegiance to communities to achieve the general well-being of the
                            populace. Therefore, we urge the moral support of the people by enrolling their vehicles and
                            motorcycles on this database as an obligation to reduce incidents of car theft and the use
                            of stolen cars in organised national and transborder crimes.
                        </p>
                    </div>
                    <div class="col-md-12">
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_khm3kzeu.json"
                            background="transparent" speed="1" style="width: 100%; height: 300px;" loop autoplay>
                        </lottie-player>
                    </div>

                </div>
            </div>
        </div>
        <!-- Domain-search End -->
        <!--? Team -->
        {{-- <section class="team-area section-padding40 section-bg1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-105">
                            <h2>Most amazing features</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6"">
                    <div class=" single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Employee Owned</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services2.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Commitment to Security</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services3.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Passion for Privacy</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services4.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Employee Owned</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services5.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">24/7 Support</a></h5>
                            <p>We understand the importance of our service to daily activities, therefore, we are working on various applications to ensure prompt service delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services6.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">100% Uptime Guaranteed</a></h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic!</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section> --}}
        <!-- Services End -->



        <!-- About-1 Area End -->
        <!--? About-2 Area Start -->
        <div class="about-area1 pb-bottom">
            <div class="container pt-5 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="about-caption about-caption3 mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2 class="dedi-head">Dedicated 24/7 support</h2>
                            </div>
                            <p class="mb-40">We Understand the importance of our service to daily activities. Therefore,
                                we are working on various applications to ensure automated prompt service delivery.</p>

                            <a href="contact" class="btn"><i class="fas fa-phone-alt"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                        <!-- about-img -->
                        <!-- <div class="about-img ">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div> -->
                        <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_7z3j6ycb.json"
                            background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-2 Area End -->
        <!-- ask questions -->
        <section class="ask-questions section-bg1 section-padding30 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-90">
                            <h2>Frequently ask questions</h2>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, hic! Our
                                experts are just part of the reason Bluehost is the ideal home for your WordPress
                                website. We're here to help you succeed!</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why are customers names not required in the process of keeping Vehicle/Bike details? </h2>
                                <p>Customers names are not necessary, but email and mobile numbers (for SMS) are required as means of contact.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why should I register my vehicle details on this website?</h2>
                                <p>Car theft has become a crime across borders. Its success can be attributed to the lack of a resourceful service to flag out stolen cars to protect vehicle owners of their property and help innocent buyers avoid ignorantly aiding and abetting a crime.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why the need for payments?</h2>
                                <p>The need for payment is essential to enable us to maintain the service system and to communicate to registrants wherever they are located when necessary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why is my Mobile or Email necessary?</h2>
                                <p>You are not obliged to provide your Mobile or Email, but the registrant should provide at least a means of contact, either Email or Mobile Number - for SMS for ease of reference.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>How can you help to recover my vehicle?</h2>
                                <p>We have a goal to protect registrant's vehicle, so we will facilitate recovery wherever we discover a stolen car is located worldwide. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Must I pay to report a vehicle stolen? </h2>
                                <p>You don't need to pay to report a vehicle stolen, but it is advisable to register a vehicle before reporting it stolen so that you can be contacted if found.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>What is the available service for dealers, insurance, and hire purchase companies?</h2>
                                <p>We have very remarkable support for corporate customers as we do not charge them like an individual but an annual one-off charge to register vehicles on our database.  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>How long do you keep a vehicle and owner's details on your database? </h2>
                                <p>We hope to keep vehicle and ownership data for five years.  However, we will inform owners before taken off their records and registrants can request for their details to be removed/deleted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Can a registrant voluntarily request the removal of their records?</h2>
                                <p>A registrant can request the removal of their records from the database at any time.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End ask questions -->
        <!--? Testimonial Area Start -->
     <!--   <section class="testimonial-area section-bg1">
            <div class="container">
                <div class="testimonial-wrapper">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-10 col-md-12 col-sm-11">
                           
                            <div class="h1-testimonial-active">
                               
                                <div class="single-testimonial text-center mt-55">
                                    <div class="testimonial-caption">
                                       
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts.
                                            You can select your favorite layouts & elements for cular ts with unlimited
                                            ustomization possibilities. Pixel-perfect replica;ition of thei designers
                                            ijtls intended csents your se.</p>
                                    </div>
                                   
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/testimonial.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jacson Miller</span>
                                            
                                        </div>
                                    </div>
                                </div>-->
                                <!-- Single Testimonial -->
                             <!--   <div class="single-testimonial text-center mt-55"">
                                <div class=" testimonial-caption">-->
                                    <!-- <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign"> -->
                                <!--    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                </div>-->
                                <!-- founder -->
                             <!--   <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jacson Miller</span>
                                        <!-- <p>Designer @Colorlib</p> -->
                            <!--</div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                 <!-- </div>
                </div>
            </div>
            </div>
        </section>-->
        <!--? Testimonial Area End -->
    </main>
    @include('webpages/include/footer')


    @include('webpages/include/foot-link')



</body>

</html>
