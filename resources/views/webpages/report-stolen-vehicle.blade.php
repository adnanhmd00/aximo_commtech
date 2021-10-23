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
                <div class="col-8 ">
                    <h2 class="contact-title text-center">Report a Stolen Vehicle / Motorcycle to us</h2>
                </div>
                <div class="col-lg-8">
                    <div>
                        <div class="row div-body">
                            <div class="row div-body">
                                <div class="col-12">
                                    @if (session()->has('report-engine'))
                                        <div class="alert alert-danger text-center">
                                            {{ session()->get('report-engine') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (session()->has('report-chassis'))
                                        <div class="alert alert-danger text-center">
                                            {{ session()->get('report-chassis') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (session()->has('report-license'))
                                        <div class="alert alert-danger text-center">
                                            {{ session()->get('report-license') }}
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
                                    <div class="col-12">
                                        <div class="form-1 df-row-cc mt-5">
                                            <form class="needs-validation" method="get" action="store_report_stolen">
                                                <!-- <div class="form-row">
                                            
                                            
                                        </div> -->
                                               <!-- <div class="form-row pb-5">
                                                    <div class="col-md-12 d-flex radio-col">
                                                        <div class="form-check pr-5">
                                                            <input class="form-check-input form-circle" type="radio"
                                                                name="vehicle" id="flexRadioDefault1" value="vehicle">
                                                            <label class="form-check-label radio-text pl-3"
                                                                for="flexRadioDefault1">
                                                                Vehicle
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input form-circle" type="radio"
                                                                name="vehicle" id="flexRadioDefault1" value="motor">
                                                            <label class="form-check-label radio-text pl-3"
                                                                for="flexRadioDefault1">
                                                                Motorcycle
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>-->
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text my-input"
                                                        for="inputGroupSelect01">Choose Vehicle or Motorcycle:</label>
                                                    <select class="custom-select custom-select-2"
                                                        id="inputGroupSelect01" required name="vehicle">
                                                        <!--<option selected>Choose...</option>-->
                                                        <option value="vehicle">Vehicle</option>
                                                        <option value="motor">Motorcycle</option>
                                                    </select>
                                                </div>
                                                </div>
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text my-input"
                                                                    for="inputGroupSelect01">*Are you a Dealer:</label>
                                                            </div>
                                                            <select class="custom-select custom-select-2"
                                                                id="inputGroupSelect01" name="dealer" required>
                                                                <option value="" selected>Choose...</option>
                                                                <option value="1">Yes</option>
                                                                <option value="2">No</option>
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
                                                            <input type="text" class="form-control form-control-3 "
                                                                name="license_plate_no">
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
                                                            <input type="text" class="form-control form-control-3 "
                                                                name="engine_no" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">*VIN/Chassis Number
                                                                    :</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-3 "
                                                                name="chassis_no" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <select class="form-select mb-3"
                                                            aria-label="Default select example"
                                                            style="display:block!important;" name="make" required>
                                                            <option selected>Make :</option>
                                                            <option value="0">Other</option>
                                                            <option value="1">ACURA</option>
                                                            <option value="2">ALFA ROMEO</option>
                                                            <option value="3">APRILIA</option>
                                                            <option value="4">ASTON MARTIN</option>
                                                            <option value="5">ATOS</option>
                                                            <option value="6">AUDI</option>
                                                            <option value="7">AUSTIN</option>
                                                            <option value="8">BENTLEY</option>
                                                            <option value="9">BMW</option>
                                                            <option value="10">BORGWARD</option>
                                                            <option value="11">BRILLIANCE</option>
                                                            <option value="12">BUERSTNER</option>
                                                            <option value="13">BUICK</option>
                                                            <option value="14">CADILLAC</option>
                                                            <option value="15">CHEVROLET</option>
                                                            <option value="16">CHRYSLER</option>
                                                            <option value="17">CITROEN</option>
                                                            <option value="18">CORVETTE</option>
                                                            <option value="19">DACIA</option>
                                                            <option value="20">DAEWOO</option>
                                                            <option value="21">DAF</option>
                                                            <option value="22">DAIHATSU</option>
                                                            <option value="23">DE LOREAN</option>
                                                            <option value="24">DETHLEFFS</option>
                                                            <option value="25">DODGE</option>
                                                            <option value="26">DUCATI</option>
                                                            <option value="27">FENDT</option>
                                                            <option value="28">FERRARI</option>
                                                            <option value="29">FIAT</option>
                                                            <option value="30">FORD</option>
                                                            <option value="31">GENERAL MOTORS</option>
                                                            <option value="32">GMC</option>
                                                            <option value="33">HARLEY-DAVIDSON</option>
                                                            <option value="34">HOBBY</option>
                                                            <option value="35">HONDA</option>
                                                            <option value="36">HUMMER</option>
                                                            <option value="37">HYMER</option>
                                                            <option value="38">HYUNDAI</option>
                                                            <option value="39">INFINITI</option>
                                                            <option value="40">ISUZU</option>
                                                            <option value="41">IVECO</option>
                                                            <option value="42">JAGUAR</option>
                                                            <option value="43">JEEP</option>
                                                            <option value="44">KAWASAKI</option>
                                                            <option value="45">KIA</option>
                                                            <option value="46">KTM</option>
                                                            <option value="47">LADA</option>
                                                            <option value="48">LAMBORGHINI</option>
                                                            <option value="49">LANCIA</option>
                                                            <option value="50">LAND ROVER</option>
                                                            <option value="51">LANDWIND</option>
                                                            <option value="52">LEXUS</option>
                                                            <option value="53">LINCOLN</option>
                                                            <option value="54">LOTUS</option>
                                                            <option value="55">MAN</option>
                                                            <option value="56">MASERATI</option>
                                                            <option value="57">MAYBACH</option>
                                                            <option value="58">MAZDA</option>
                                                            <option value="59">MERCURY</option>
                                                            <option value="60">MERCEDES-BENZ</option>
                                                            <option value="61">MG</option>
                                                            <option value="62">MINI</option>
                                                            <option value="63">MITSUBISHI</option>
                                                            <option value="64">MORGAN</option>
                                                            <option value="65">NISSAN</option>
                                                            <option value="66">OLDSMOBILE</option>
                                                            <option value="67">OPEL</option>
                                                            <option value="68">PEUGEOT</option>
                                                            <option value="69">PIAGGIO</option>
                                                            <option value="70">PLYMOUTH</option>
                                                            <option value="71">PONTIAC</option>
                                                            <option value="72">PORSCHE</option>
                                                            <option value="73">RANGE ROVER</option>
                                                            <option value="74">RENAULT</option>
                                                            <option value="75">ROLLS-ROYCE</option>
                                                            <option value="76">ROVER</option>
                                                            <option value="77">SAAB</option>
                                                            <option value="78">SCANIA</option>
                                                            <option value="79">SEAT</option>
                                                            <option value="80">SKODA</option>
                                                            <option value="81">SMART</option>
                                                            <option value="82">SSANG YONG</option>
                                                            <option value="83">SUBARU</option>
                                                            <option value="84">SUZUKI</option>
                                                            <option value="85">TABBERT</option>
                                                            <option value="86">TALBOT</option>
                                                            <option value="87">TESLA</option>
                                                            <option value="88">TOYOTA</option>
                                                            <option value="89">TRABANT</option>
                                                            <option value="90">TRAILER</option>
                                                            <option value="91">TRIUMPH</option>
                                                            <option value="92">VESPA</option>
                                                            <option value="93">VOLKSWAGEN</option>
                                                            <option value="94">VOLVO</option>
                                                            <option value="95">WARTBURG</option>
                                                            <option value="96">YAMAHA</option>
                                                        </select>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">
                                                                    Model:</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-3"
                                                                name="model">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">
                                                                    Color:</span>
                                                            </div>
                                                            <input type="color" class="form-control form-control-2"
                                                                value="#3C3FA2" name="colour" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">
                                                                    Color:</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-2"
                                                                value="" name="color_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">*Email
                                                                    Address
                                                                    :</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-2"
                                                                name="email_id" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input id="country_selector" class="my-country-report"
                                                            type="text" readonly name="country" required>
                                                        {{-- <select class="country-drop-my" id="country" onchange="random()"
                                                            name="country">
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
                                                    {{-- <div class="col-md-6 mb-3">

                                                        <div class="input-group">
                                                            <input type="tel" class="form-control form-control-2"
                                                                id="mobile" title="" required name="mobile"
                                                                placeholder="Mobile">
                                                            <div class="invalid-feedback">
                                                                Please enter your Mobile Number
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">*Where
                                                                    Stolen
                                                                    :</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-2"
                                                                placeholder="City/Town" name="city_whereStolen"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        {{-- <label for="validationMobile" class="form-label">*Mobile</label> --}}
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-2" id="phone-1"
                                                                 aria-describedby="inputGroupPrepend3"
                                                                required name="mobile">
                                                            <div class="invalid-feedback">
                                                                Please enter your Mobile Number
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">*Name of Police Station where
                                                                    reported
                                                                    :</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-2"
                                                                name="police_station" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text my-input"
                                                                    id="basic-addon1">*Police Crime Number
                                                                    :</span>
                                                            </div>
                                                            <input type="number" class="form-control form-control-2"
                                                                name="police_crime_no" required>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="text-center w-100">
                                            <button class="mb-4 btn btn-primary" type="submit">Send</button>

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
