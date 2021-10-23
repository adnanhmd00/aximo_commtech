<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Report a stolen vehicle</title>
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
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">Report a stolen vehicle</h1>
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
                    <h2 class="contact-title text-center">Report a stolen vehicle</h2>

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
                                            <span class="input-group-text my-input" id="basic-addon1">License Plate
                                                Number
                                                :</span>
                                        </div>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input"
                                                for="inputGroupSelect01">Make:</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">
                                                Model:</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input" for="inputGroupSelect01">Initial
                                                Registration:</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input" for="inputGroupSelect01">/</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input"
                                                for="inputGroupSelect01">Displacement (Liter):</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input" for="inputGroupSelect01">Fuel
                                                Type:</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">
                                                Color:</span>
                                        </div>
                                        <input type="color" class="form-control" value="#2D0A31">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Metallic">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">Vehicle ID (VIN)
                                                :</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text my-input"
                                                for="inputGroupSelect01">Color:</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row date-form-report">

                                        <div class="col-12">
                                            <input class="form-control" type="date" value="2021-05-21"
                                                id="example-date-input">
                                        </div>
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
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Don't include my e-mail address in search results">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text my-input" id="basic-addon1">Security Code:
                                            </span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="d-block m-auto">
                                    <div class="form-group mt-3 mb-5 ">
                                        <button type="submit" class="button button-contactForm boxed-btn">Save</button>
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