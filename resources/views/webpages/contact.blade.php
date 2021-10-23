
<!doctype html>
<html class="no-js" lang="zxx">

<head>

<title>Contact Us</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

 <!-- header -->
 @include('webpages/include/header')
<main>
    <!-- Slider Area Start-->
    <div class="slider-area ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3 slider-height-contact">
            <div class="container">
                <!-- <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">Contact us</h1>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Slider Shape -->
        <!-- <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
        </div> -->
    </div>
    <!-- Slider Area End -->
    <!--?  Contact Area start  -->
    <section class="">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Contact Us</h2>
                </div>
                
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="store_contact" method="post" id="contactForm">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12"> 
                                @if (session()->has('contact-message'))
                                    <div class="alert alert-danger text-center">
                                        {{ session()->get('contact-message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session()->has('contact-subject'))
                                    <div class="alert alert-danger text-center">
                                        {{ session()->get('contact-subject') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if(session()->has('successreport'))
                                    <div class="alert alert-success text-center">
                                         {{ Session::pull('successreport') }} 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                        placeholder=" Enter Message" required></textarea>
                                </div>
                                <div class="col-12">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email_id" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                        required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center w-100">
                                   <button class="mb-4 new-btn btn-primary" type="submit">Send</button>

                                </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>London EC1V2NX</h3>
                            <p>Kemp House 160 City Road</p>
                        </div>
                    </div>
                   <!--<div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+44 7404 375023</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>-->
                    <!-- <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>operations@commtechsoft.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div> -->
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