<div class="sidebar" data-color="default" data-active-color="danger">

    <div class="logo">
        <a class="simple-text logo-mini">
            <div class="logo-image-small">
              {{--  <img src="{{asset('assets/upload/image/')}}" />--}}
                <img src="http://commtechsoft.com/assets/img/logo/logo-3.png" / style="background:#3C3FA2;">
            </div>

        </a>
        <a href="index" class="simple-text logo-normal">
        
            {{session('admin')['data']['name']}}
            <!-- <div class="logo-image-big">
          <img src="../assets/img/user.png" class="head-icon">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!-- <div class="user">
            <div class="photo">
                <img src="../assets/img/user.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                       Team Members
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">AD</span>
                                <span class="sidebar-normal">Admin</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div> -->
        <ul class="nav">
            <li class="">
                <a href="index">
                <i class="fas fa-university"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="">
                <a href="profile">
                <i class="far fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="">
                <a href="team_index">
                <i class="fas fa-users"></i>
                    <p>Team Member</p>
                </a>
            </li>
            <!-- user -->
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                <i class="fas fa-user-friends"></i>
                    <p>User<b class="caret"></b></p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                         
                            <a href="dealer">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal">Dealership</span>
                            </a>
                        </li>
                        <li>
                          
                            <a href="insurance">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal"> Insurance </span>
                            </a>
                        </li>
                        <li>
                            
                            <a href="customer">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit">Customer's</span>
                            </a>
                        </li>
                       
                        
                    </ul>
                </div>
            </li>
            <!-- outstand -->
            <li class="">
                <a href="outstanding">
                <i class="fas fa-money-check-alt"></i>
                    <p class="text-rit">Outstanding Finance <br> Check</p>
                </a>
            </li>
            <!-- stolen -->
            <li class="">
                <a href="stolen_vehicle">
                <i class="fas fa-mask"></i>
                    <p class="text-rit">Stolen Vehicle/Bike <br> Report</p>
                </a>
            </li>
            <!-- created vehicle bike ac -->
            <li class="">
                <a href="create_vehicle">
                <i class="far fa-edit"></i>
                    <p class="text-rit">Created	Vehicle/Bike <br> Account</p>
                </a>
            </li>
            <!-- update recovered -->
            <li class="">
                <a href="update_recovered">
                <i class="fas fa-user-edit"></i>
                    <p class="text-rit">Update Recovered <br> Vehicle/Bike</p>
                </a>
            </li>
             <!-- Search before buying Vehicle/Motorbike -->
            <li class="">
                <a href="searched_vehicle">
                <i class="fas fa-user-edit"></i>
                    <p class="text-rit">Search Before Buying <br> Vehicle/Motorbike</p>
                </a>
            </li>
            <!-- i want to menu -->
            <!-- <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="fas fa-book"></i>
                    <p>I Want To <b class="caret"></b></p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                         
                            <a href="create-vehicle-bike-ac.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal">Create a Vehicle/Bike Account </span>
                            </a>
                        </li>
                        <li>
                          
                            <a href="report-stolen-vehicle.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal"> Report a Stolen Vehicle/Bike </span>
                            </a>
                        </li>
                        <li>
                            
                            <a href="update-recovered.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit"> Update Recovered <br> Vehicle/Motorbike </span>
                            </a>
                        </li>
                        <li>
                           
                            <a href="search-before-buying.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit"> Search before buying <br> Vehicle/Motorbike </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li> -->
           
            <!-- BUY/SELL SEMI KNOCKED DOWN -->
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="fas fa-cubes"></i>
                    <p class="text-rit">SEMI KNOCKED <br> DOWN <b class="caret"></b></p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <!-- <a href="components/buttons.php"> -->
                            <a href="buy_engine">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit"> To buy Vehicle or <br> Bike Engine </span>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="components/grid.php"> -->
                            <a href="buy_chassis">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit"> To buy Vehicle / <br> Bike Chassis </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <!-- CAR FINANCE/INSURANCE -->
            <!-- <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="fas fa-pencil-ruler"></i>
                    <p class="text-rit">CAR FINANCE/ <br> INSURANCE <b class="caret"></b></p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                           <a href="dealership-reg.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal"> Dealership Registration </span>
                            </a>
                        </li>
                        <li>
                           
                            <a href="insurance-reg.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal"> Insurance Registration </span>
                            </a>
                        </li>
                        <li>
                            
                            <a href="finance-check.php">
                                <span class="sidebar-mini-icon"><i class="fas fa-arrow-right fa-rit"></i></span>
                                <span class="sidebar-normal text-rit"> Vehicle/Motorcycle <br> Outstanding Finance Check </span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li> -->
           
            <!-- CONTACT US -->
            <li>
                <a  href="enquiry">
                <i class="fas fa-address-card"></i>
                    <p>Enquiry<b class=""></b></p>
                </a>
                <!-- <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="tables/regular.php">
                                <span class="sidebar-mini-icon">RT</span>
                                <span class="sidebar-normal"> Regular Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="tables/extended.php">
                                <span class="sidebar-mini-icon">ET</span>
                                <span class="sidebar-normal"> Extended Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="tables/datatables.net.php">
                                <span class="sidebar-mini-icon">DT</span>
                                <span class="sidebar-normal"> DataTables.net </span>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </li>
            <!-- <li>
                <a  href="report">
                <i class="far fa-calendar-alt"></i>
                    <p>Report<b class=""></b></p>
                </a>
                
            </li> -->
            <!-- maps -->
            <!-- <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Maps <b class="caret"></b></p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="maps/google.php">
                                <span class="sidebar-mini-icon">GM</span>
                                <span class="sidebar-normal"> Google Maps </span>
                            </a>
                        </li>
                        <li>
                            <a href="maps/fullscreen.php">
                                <span class="sidebar-mini-icon">FSM</span>
                                <span class="sidebar-normal"> Full Screen Map </span>
                            </a>
                        </li>
                        <li>
                            <a href="maps/vector.php">
                                <span class="sidebar-mini-icon">VM</span>
                                <span class="sidebar-normal"> Vector Map </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- widgets -->
            <!-- <li>
                <a href="widgets.php">
                    <i class="fas fa-box"></i>
                    <p>Widgets</p>
                </a>
            </li> -->
            <!-- charts -->
            <!-- <li>
                <a href="charts.php">
                    <i class="fas fa-chart-pie"></i>
                    <p>Charts</p>
                </a>
            </li> -->
            <!-- calender -->
            <!-- <li>
                <a href="calendar.php">
                    <i class="far fa-calendar-alt"></i>
                    <p>Calendar</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>