<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Commtechsoft Admin</title>
    @include('/admin/include/headlink')
</head>

<body class="">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>

    <div class="wrapper">
        <!-- sidebar -->
        @include('/admin/include/sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('/admin/include/header')
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                           
                                            <i class="fas fa-globe-americas text-warning"></i>
                                        </div>
                                    </div> -->
                                    <div class="col-12 col-md-12">
                                        <a href="dealer" class="index-card-a">
                                            <div class="numbers">
                                                <div class="icon-big text-center icon-warning">
                                                    <img src="../assets/img1/dealer.png" alt="">

                                                </div>

                                                <p class="card-title">Dealership User's</p>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <a href="#" class="index-card-a">
                                    <div class="stats">

                                        Total Counts : {{$dealershipcount}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                        
                                        <i class="far fa-clipboard text-success"></i>
                                          
                                        </div>
                                    </div> -->
                                    <div class="col-12 col-md-12">
                                        <a href="insurance" class="index-card-a">
                                            <div class="numbers">
                                                <div class="icon-big text-center icon-warning">

                                                    <img src="../assets/img1/insu-user.png" alt="">

                                                </div>
                                                <p class="card-title">Insurance User's</p>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <a href="#" class="index-card-a">
                                    <div class="stats">

                                    Total Counts : {{$insurancecount}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fas fa-exclamation-triangle text-danger"></i>

                                            </div>
                                        </div> -->
                                    <div class="col-12 col-md-12">
                                        <a href="create_vehicle" class="index-card-a">
                                            <div class="numbers">

                                                <div class="icon-big text-center icon-warning">

                                                    <img src="../assets/img1/insu-car.png" alt="">

                                                </div>

                                                <p class="card-title">Registered Vehicle</p>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <a href="#" class="index-card-a">
                                    <div class="stats">

                                    Total Counts : {{$vehiclecount}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fas fa-heartbeat text-primary"></i>

                                            </div>
                                        </div> -->
                                    <div class="col-12 col-md-12">
                                        <a href="create_vehicle" class="index-card-a">
                                            <div class="numbers">
                                                <div class="icon-big text-center icon-warning">
                                                    <img src="../assets/img1/motorcycle.png" alt="">

                                                </div>

                                                <p class="card-title">Registered Motorbike</p>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <a href="#" class="index-card-a">
                                    <div class="stats">

                                    Total Counts : {{$motorcount}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-canvas">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="numbers pull-left">$34,657</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pull-right">
                                            <span class="badge badge-pill badge-success">
                                                +18%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="big-title">total earnings in last ten quarters</h6>
                                <canvas id="activeUsers" width="826" height="380" class="my-canvas"></canvas>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-title">Statistics</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="numbers pull-left">169</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pull-right">
                                            <span class="badge badge-pill badge-danger">
                                                -14%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="big-title">total subscriptions in last 7 days</h6>
                                <canvas id="emailsCampaignChart" width="826" height="380" class="my-canvas"></canvas>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-title">Statistics</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="numbers pull-left">8,960</div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="pull-right">
                                            <span class="badge badge-pill badge-warning">
                                                ~51%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="big-title">total downloads in last 6 years</h6>
                                <canvas id="activeCountries" width="826" height="380" class="my-canvas"></canvas>
                            </div>
                            <div class="card-footer">
                                <hr />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-title">Statistics</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body my-card">
                    <canvas id="chartActivity"></canvas>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Number of Vehicle Registered Today</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut1" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-primary"></i> Open
                                    </div> -->
                                <hr />
                                <div class="stats">
                                    <a href="#"> View Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Number of Motorbike Registered Today</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut2" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer2" style="height: 300px; width: 100%;"></div>

                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-warning"></i> Visited
                                    </div> -->
                                <hr />
                                <div class="stats">

                                    <a href="#"> View report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Number of Vehicle Reported Stolen Today</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut3" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-danger"></i> Completed
                                    </div> -->
                                <hr />
                                <div class="stats">
                                    <a href="#"> View Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-canvas">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Dealers</h5>
                                <p class="card-category">Our Users</p>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut4" class="ct-chart ct-perfect-fourth " width="456"
                                    height="300"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-secondary"></i> Ended
                                </div>
                                <hr />
                                <div class="stats">
                                    <i class="far fa-handshake"></i> Total Dealers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                            
                                <h5 class="card-title">Number of Motorbike Reported Stolen Today</h5>
                    
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut1" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-primary"></i> Open
                                    </div> -->
                                <hr />
                                <div class="stats">
                                    <a href="#"> View Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Number of Engine Registered Today</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut2" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer5" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-warning"></i> Visited
                                    </div> -->
                                <hr />
                                <div class="stats">

                                    <a href="#"> View Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Number of Chassis Registered Today</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut3" class="ct-chart ct-perfect-fourth my-canvas" width="456"
                                    height="300"></canvas>
                                <div id="chartContainer6" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="legend">
                                        <i class="fa fa-circle text-danger"></i> Completed
                                    </div> -->
                                <hr />
                                <div class="stats">
                                    <a href="#"> View Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-canvas">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Dealers</h5>
                                <p class="card-category">Our Users</p>
                            </div>
                            <div class="card-body">
                                <canvas id="chartDonut4" class="ct-chart ct-perfect-fourth " width="456"
                                    height="300"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-secondary"></i> Ended
                                </div>
                                <hr />
                                <div class="stats">
                                    <i class="far fa-handshake"></i> Total Dealers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- locations -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Top Locations</h4>
                                <!-- <p class="card-category">All products that were shipped</p> -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <div class="d-flex">
                                                <div class="w-50">
                                                    <span>Country</span>
                                                </div>
                                                <div class="w-50">
                                                    <span class="users-span">Users</span>
                                                </div>


                                            </div>
                                            <table class="table">
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/bn.png" />
                                                            </div>
                                                        </td>
                                                        <td>Benin</td>
                                                        <td class="text-right">29</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/bf.png" />
                                                            </div>
                                                        </td>
                                                        <td>Burkina Faso</td>
                                                        <td class="text-right">130</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/cv.png" />
                                                            </div>
                                                        </td>
                                                        <td>Cape Verde</td>
                                                        <td class="text-right">760</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/cd.png" />
                                                            </div>
                                                        </td>
                                                        <td>Chad</td>
                                                        <td class="text-right">690</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/ic.png" />
                                                            </div>
                                                        </td>
                                                        <td>Côte D'Ivoire</td>
                                                        <td class="text-right">600</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="flag">
                                                                <img src="../assets/img1/flags/ga.png" />
                                                            </div>
                                                        </td>
                                                        <td>Gambia</td>
                                                        <td class="text-right">550</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <div id="worldMap" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('/admin/include/footlink')

</body>

</html> 

<script>
    var percentyear = <?php echo $percentVehicle; ?>;
    var totalpercent = <?php echo $totalvehiclepercent; ?>;
    var totalmotorpercent = <?php echo $totalmotorpercent; ?>;
    var motorpercent = <?php echo $percentMotor; ?>;
    var motorstolen = <?php echo $percentmotorstolen; ?>;
    var totalmotorstolen = <?php echo $totalstolenmotorpercent; ?>;
    var enginepercent = <?php echo $enginepercent; ?>;
    var totalenginepercent = <?php echo $totalenginepercent; ?>;
    var chassispercent = <?php echo $chassispercent; ?>;
    var totalchassispercent = <?php echo $totalchassispercent; ?>;
    window.onload = function () {

// chart 2
var chart_1 = new CanvasJS.Chart("chartContainer2", {
    // exportEnabled: true,
    animationEnabled: true,
    title: {
        text: ""
    },
    legend: {
        cursor: "pointer",
        itemclick: explodePie
    },
    data: [{
        type: "pie",
        startAngle: 240,
        // showInLegend: true,
        toolTipContent: "{name}: <strong>{y}%</strong>",
        indexLabel: "{name} - {y}%",
        dataPoints: [
            { y: totalmotorpercent, name: "Total Month", exploded: true },
            { y: motorpercent, name: "Current Status" }
            // { y: 5, name: "Debt/Capital" },
            // { y: 3, name: "Elected Officials" },
            // { y: 7, name: "University" },
            // { y: 17, name: "Executive" },
            // { y: 22, name: "Other Local Assistance" }
        ]
    }]
});

// chart 1

var chart = new CanvasJS.Chart("chartContainer1", {
    animationEnabled: true,
    title: {
        text: ""
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [
            { y: percentyear, label: "Total Month" },
            { y: totalpercent, label: "Current status" }
            // { y: 7.06, label: "Baidu" },
            // { y: 4.91, label: "Yahoo" },
            // { y: 1.26, label: "Others" }
        ]
    }]
});

// chart 3
var chart_3 = new CanvasJS.Chart("chartContainer3", {
    animationEnabled: true,
    title: {
        text: "",
        horizontalAlign: "left"
    },
    data: [{
        type: "doughnut",
        startAngle: 60,
        //innerRadius: 60,
        indexLabelFontSize: 17,
        indexLabel: "{label} - #percent%",
        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: [
            // { y: 67, label: "Inbox" },
            { y: totalmotorstolen, label: "Total Month" },
            // { y: 10, label: "Labels" },
            // { y: 7, label: "Drafts" },
            // { y: 15, label: "Trash" },
            { y: motorstolen, label: "Current status" }
        ]
    }]
});

// chart 4

var totalVisitors = 883000;
var visitorsData = {
    "New vs Returning Visitors": [{
        click: visitorsChartDrilldownHandler,
        cursor: "pointer",
        explodeOnClick: false,
        innerRadius: "65%",
        legendMarkerType: "square",
        name: "New vs Returning Visitors",
        radius: "100%",
        showInLegend: true,
        startAngle: 90,
        type: "doughnut",
        dataPoints: [
            { y: totalmotorstolen, label: "Total Month", color: "#E7823A" },
            { y: motorstolen, label: "Current status", color: "#546BC1" }
        ]
    }]
};

var newVSReturningVisitorsOptions = {
    animationEnabled: true,
    theme: "light2",
    title: {
        text: ""
    },
    subtitles: [{
        // text: "Click on Any Segment to Drilldown",
        backgroundColor: "#2eacd1",
        fontSize: 16,
        fontColor: "white",
        padding: 5
    }],
    legend: {
        fontFamily: "calibri",
        fontSize: 14,
        itemTextFormatter: function (e) {
            return e.dataPoint.label + ": " + totalmotorstolen  + "%";
        }
    },
    data: []
};

var visitorsDrilldownedChartOptions = {
    animationEnabled: true,
    theme: "light2",
    axisX: {
        labelFontColor: "#717171",
        lineColor: "#a2a2a2",
        tickColor: "#a2a2a2"
    },
    axisY: {
        gridThickness: 0,
        includeZero: false,
        labelFontColor: "#717171",
        lineColor: "#a2a2a2",
        tickColor: "#a2a2a2",
        lineThickness: 1
    },
    data: []
};

var chart_4 = new CanvasJS.Chart("chartContainer4", newVSReturningVisitorsOptions);
chart_4.options.data = visitorsData["New vs Returning Visitors"];
chart_4.render();

function visitorsChartDrilldownHandler(e) {
    chart_4 = new CanvasJS.Chart("chartContainer4", visitorsDrilldownedChartOptions);
    chart_4.options.data = visitorsData[e.dataPoint.name];
    chart_4.options.title = { text: e.dataPoint.name }
    chart_4.render();
    $("#backButton").toggleClass("invisible");
}

$("#backButton").click(function () {
    $(this).toggleClass("invisible");
    chart_4 = new CanvasJS.Chart("chartContainer4", newVSReturningVisitorsOptions);
    chart_4.options.data = visitorsData["New vs Returning Visitors"];
    chart_4.render();
});

// chart 5
var chart_5 = new CanvasJS.Chart("chartContainer5", {
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    // exportEnabled: true,
    animationEnabled: true,
    title: {
        text: ""
    },
    data: [{
        type: "pie",
        startAngle: 25,
        toolTipContent: "<b>{label}</b>: {y}%",
        // showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - {y}%",
        dataPoints: [
            { y: totalenginepercent, label: "Total counts" },
            // { y: 27.34, label: "Internet Explorer" },
            // { y: 10.62, label: "Cuurent Status" }
            { y: enginepercent, label: "Current status" },
            // { y: 4.07, label: "Safari" },
            // { y: 1.22, label: "Opera" },
            // { y: 0.44, label: "Others" }
        ]
    }]
});

// chart 6

var chart_6 = new CanvasJS.Chart("chartContainer6", {
    animationEnabled: true,
    title: {
        text: ""
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [
            { y: totalchassispercent, label: "Total Month" },
            { y: chassispercent, label: "Current status" }
            // { y: 7.06, label: "Baidu" },
            // { y: 4.91, label: "Yahoo" },
            // { y: 1.26, label: "Others" }
        ]
    }]
});





chart.render();
chart_1.render();
chart_3.render();
chart_4.render();
chart_5.render();
chart_6.render();
}

function explodePie(e) {
if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
} else {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
}
e.chart_1.render();
e.chart.render();
e.chart_3.render();
e.chart_4.render();
e.chart_5.render();
e.chart_6.render();

}
const imgDiv = document.querySelector('profile-img');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');


file.addEventListener('change' , function(){
const choosedFile = this.files[0];
 if(choosedFile){
     const reader = new FileReader();
     reader.addEventListener('load', function(){
         img.setAttribute('src' , reader.result);
     });
     reader.readAsDataURL(choosedFile);
 }
})



</script>