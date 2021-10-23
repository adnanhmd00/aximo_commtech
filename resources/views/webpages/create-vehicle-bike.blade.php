<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>Create a Vehicle/Bike Account</title>
    <!-- headlink -->
    @include('webpages/include/head-link')
</head>

<!-- header -->
@include('webpages/include/header')
<main>
    <!-- Slider Area Start-->
    <div class="slider-area my-slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height-4">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                </div>
            </div>
        </div>

    </div>
    <!-- Slider Area End -->
    <!--?  Contact Area start  -->
    <section class="cvba-section i-want-to-section">
        <div class="container ">
            <div class="row df-row-cc">
                <div class="col-12 ">


                </div>
                <div class="col-lg-4">
                    <div>
                        <div class="create-ac-div">
                            <img src="assets/img/safety-car.png" alt="logo" class="dealer-img img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div>
                        <h2 class="contact-title text-center">Create a Vehicle/Bike Account</h2>
                                <!-- @csrf
                                    <div class="form-row pb-5">
                                    @if(session()->has('createVehicle'))
                                    <div class="alert alert-success text-center">
                                        {{ session()->get('createVehicle') }}
                                    </div>
                                @endif -->

                        <div class="row div-body">
                            <div class="col-12">
                                @if(session()->has('engine'))
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('engine') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                @if(session()->has('chassis'))
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('chassis') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                @if(session()->has('license'))
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('license') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="form-1 df-row-cc">
                                    
                                    <form action="create_vehicle_account" method="post" class="needs-validation">
                                        {{csrf_field()}}
                                        <!--<div class="col-md-12 d-flex radio-col">
                                                <div class="form-check pr-5">
                                                    <input class="form-check-input form-circle" type="radio" name="vehicle" id="flexRadioDefault1" value="vehicle" required="">
                                                    <label class="form-check-label radio-text pl-3" for="flexRadioDefault1">
                                                        Vehicle
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input form-circle" type="radio" name="vehicle" id="flexRadioDefault1" value="motor" required="">
                                                    <label class="form-check-label radio-text pl-3" for="flexRadioDefault1">
                                                        Motorcycle
                                                    </label>
                                                </div>
                                            </div>-->
                                        @csrf

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text my-input"
                                                        for="inputGroupSelect01">Choose Vehicle or Motorcycle:</label>
                                                    <select class="custom-select custom-select-2"
                                                        id="inputGroupSelect01" required name="vehicle">
                                                        <option value="vehicle">Vehicle</option>
                                                        <option value="motor">Motorcycle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="country" class="form-label pr-3">*Select Country</label>
                                                <input id="country_selector" type="text" readonly name="country">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3 mt-5">
                                                    <label class="input-group-text my-input"
                                                        for="inputGroupSelect01">Contacted By:</label>
                                                    <select class="custom-select custom-select-2"
                                                        id="inputGroupSelect01" required name="contacted_by">
                                                        <option selected>Choose...</option>
                                                        <option value="SMS">SMS</option>
                                                        <option value="EMAIL">EMAIL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text my-input"
                                                            for="inputGroupSelect01">*Are you a Dealer:</label>
                                                    </div>
                                                    <select class="custom-select custom-select-2"
                                                        id="inputGroupSelect01" required name="dealer">
                                                        <option value="" selected>Choose...</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input"
                                                            id="basic-addon1">License Plate
                                                            Number
                                                            :</span>
                                                    </div>
                                                    <input type="text" name="license_plate_no"
                                                        class="form-control form-control-3 ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input"
                                                            id="basic-addon1">*Engine
                                                            Number
                                                            :</span>
                                                    </div>
                                                    <input type="text" name="engine_no"
                                                        class="form-control form-control-3 " required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input"
                                                            id="basic-addon1">*VIN/Chassis Number
                                                            :</span>
                                                    </div>
                                                    <input type="text" name="chassis_no"
                                                        class="form-control form-control-3 " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    style="display:block!important;" name="make">
                                                    <option selected>Make :</option>
                                                    <option value="Other">Other</option>
                                                    <option value="ACURA">ACURA</option>
                                                    <option value="ALFA ROMEO">ALFA ROMEO</option>
                                                    <option value="APRILIA">APRILIA</option>
                                                    <option value="ASTON MARTIN">ASTON MARTIN</option>
                                                    <option value="ATOS">ATOS</option>
                                                    <option value="AUDI">AUDI</option>
                                                    <option value="AUSTIN">AUSTIN</option>
                                                    <option value="BENTLEY">BENTLEY</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="BORGWARD">BORGWARD</option>
                                                    <option value="BRILLIANCE">BRILLIANCE</option>
                                                    <option value="BUERSTNER">BUERSTNER</option>
                                                    <option value="BUICK">BUICK</option>
                                                    <option value="CADILLAC">CADILLAC</option>
                                                    <option value="CHEVROLET">CHEVROLET</option>
                                                    <option value="CHRYSLER">CHRYSLER</option>
                                                    <option value="CITROEN">CITROEN</option>
                                                    <option value="CORVETTE">CORVETTE</option>
                                                    <option value="DACIA">DACIA</option>
                                                    <option value="DAEWOO">DAEWOO</option>
                                                    <option value="DAF">DAF</option>
                                                    <option value="DAIHATSU">DAIHATSU</option>
                                                    <option value="DE LOREAN">DE LOREAN</option>
                                                    <option value="DETHLEFFS">DETHLEFFS</option>
                                                    <option value="DODGE">DODGE</option>
                                                    <option value="DUCATI">DUCATI</option>
                                                    <option value="FENDT">FENDT</option>
                                                    <option value="FERRARI">FERRARI</option>
                                                    <option value="FIAT">FIAT</option>
                                                    <option value="FORD">FORD</option>
                                                    <option value="GENERAL MOTORS">GENERAL MOTORS</option>
                                                    <option value="GMC">GMC</option>
                                                    <option value="HARLEY-DAVIDSON">HARLEY-DAVIDSON</option>
                                                    <option value="HOBBY">HOBBY</option>
                                                    <option value="HONDA">HONDA</option>
                                                    <option value="HUMMER">HUMMER</option>
                                                    <option value="HYMER">HYMER</option>
                                                    <option value="HYUNDAI">HYUNDAI</option>
                                                    <option value="INFINITI">INFINITI</option>
                                                    <option value="ISUZU">ISUZU</option>
                                                    <option value="IVECO">IVECO</option>
                                                    <option value="JAGUAR">JAGUAR</option>
                                                    <option value="JEEP">JEEP</option>
                                                    <option value="KAWASAKI">KAWASAKI</option>
                                                    <option value="KIA">KIA</option>
                                                    <option value="KTM">KTM</option>
                                                    <option value="LADA">LADA</option>
                                                    <option value="LAMBORGHINI">LAMBORGHINI</option>
                                                    <option value="LANCIA">LANCIA</option>
                                                    <option value="LAND ROVER">LAND ROVER</option>
                                                    <option value="LANDWIND">LANDWIND</option>
                                                    <option value="LEXUS">LEXUS</option>
                                                    <option value="LINCOLN">LINCOLN</option>
                                                    <option value="LOTUS">LOTUS</option>
                                                    <option value="MAN">MAN</option>
                                                    <option value="MASERATI">MASERATI</option>
                                                    <option value="MAYBACH">MAYBACH</option>
                                                    <option value="MAZDA">MAZDA</option>
                                                    <option value="MERCURY">MERCURY</option>
                                                    <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MINI">MINI</option>
                                                    <option value="MITSUBISHI">MITSUBISHI</option>
                                                    <option value="MORGAN">MORGAN</option>
                                                    <option value="NISSAN">NISSAN</option>
                                                    <option value="OLDSMOBILE">OLDSMOBILE</option>
                                                    <option value="OPEL">OPEL</option>
                                                    <option value="PEUGEOT">PEUGEOT</option>
                                                    <option value="PIAGGIO">PIAGGIO</option>
                                                    <option value="PLYMOUTH">PLYMOUTH</option>
                                                    <option value="PONTIAC">PONTIAC</option>
                                                    <option value="PORSCHE">PORSCHE</option>
                                                    <option value="RANGE ROVER">RANGE ROVER</option>
                                                    <option value="RENAULT">RENAULT</option>
                                                    <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                                    <option value="ROVER">ROVER</option>
                                                    <option value="SAAB">SAAB</option>
                                                    <option value="SCANIA">SCANIA</option>
                                                    <option value="SEAT">SEAT</option>
                                                    <option value="SKODA">SKODA</option>
                                                    <option value="SMART">SMART</option>
                                                    <option value="SSANG YONG">SSANG YONG</option>
                                                    <option value="SUBARU">SUBARU</option>
                                                    <option value="SUZUKI">SUZUKI</option>
                                                    <option value="TABBERT">TABBERT</option>
                                                    <option value="TALBOT">TALBOT</option>
                                                    <option value="TESLA">TESLA</option>
                                                    <option value="TOYOTA">TOYOTA</option>
                                                    <option value="TRABANT">TRABANT</option>
                                                    <option value="TRAILER">TRAILER</option>
                                                    <option value="TRIUMPH">TRIUMPH</option>
                                                    <option value="VESPA">VESPA</option>
                                                    <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                                    <option value="VOLVO">VOLVO</option>
                                                    <option value="WARTBURG">WARTBURG</option>
                                                    <option value="YAMAHA">YAMAHA</option>
                                                </select>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input" id="basic-addon1">
                                                            Model:</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-3" name="model">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input" id="basic-addon1">
                                                            Color:</span>
                                                    </div>
                                                    <input type="color" class="form-control form-control-2"
                                                        value="#3C3FA2" name="color">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input" id="basic-addon1">
                                                            Color:</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-2" value=""
                                                        name="color_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text my-input" id="basic-addon1">Email
                                                            Address
                                                            :</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-2"
                                                        name="email_id" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                    <input type="tel" class="form-control form-control-2" id="phone"
                                                        placeholder="" aria-describedby="inputGroupPrepend3" required
                                                        name="mobile_no">
                                                    <div class="invalid-feedback">
                                                        Please enter your Mobile Number
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
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