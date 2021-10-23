// window.onload = function () {

//     // chart 2
//     var chart_1 = new CanvasJS.Chart("chartContainer2", {
//         // exportEnabled: true,
//         animationEnabled: true,
//         title: {
//             text: ""
//         },
//         legend: {
//             cursor: "pointer",
//             itemclick: explodePie
//         },
//         data: [{
//             type: "pie",
//             startAngle: 240,
//             // showInLegend: true,
//             toolTipContent: "{name}: <strong>{y}%</strong>",
//             indexLabel: "{name} - {y}%",
//             dataPoints: [
//                 { y: 26, name: "Total Month", exploded: true },
//                 { y: 20, name: "Current Status" }
//                 // { y: 5, name: "Debt/Capital" },
//                 // { y: 3, name: "Elected Officials" },
//                 // { y: 7, name: "University" },
//                 // { y: 17, name: "Executive" },
//                 // { y: 22, name: "Other Local Assistance" }
//             ]
//         }]
//     });

//     // chart 1

//     var chart = new CanvasJS.Chart("chartContainer1", {
//         animationEnabled: true,
//         title: {
//             text: ""
//         },
//         data: [{
//             type: "pie",
//             startAngle: 240,
//             yValueFormatString: "##0.00\"%\"",
//             indexLabel: "{label} {y}",
//             dataPoints: [
//                 { y: 79.45, label: "Total Month" },
//                 { y: 7.31, label: "Current status" }
//                 // { y: 7.06, label: "Baidu" },
//                 // { y: 4.91, label: "Yahoo" },
//                 // { y: 1.26, label: "Others" }
//             ]
//         }]
//     });

//     // chart 3
//     var chart_3 = new CanvasJS.Chart("chartContainer3", {
//         animationEnabled: true,
//         title: {
//             text: "",
//             horizontalAlign: "left"
//         },
//         data: [{
//             type: "doughnut",
//             startAngle: 60,
//             //innerRadius: 60,
//             indexLabelFontSize: 17,
//             indexLabel: "{label} - #percent%",
//             toolTipContent: "<b>{label}:</b> {y} (#percent%)",
//             dataPoints: [
//                 // { y: 67, label: "Inbox" },
//                 { y: 28, label: "Total Month" },
//                 // { y: 10, label: "Labels" },
//                 // { y: 7, label: "Drafts" },
//                 // { y: 15, label: "Trash" },
//                 { y: 6, label: "Current status" }
//             ]
//         }]
//     });

//     // chart 4

//     var totalVisitors = 883000;
//     var visitorsData = {
//         "New vs Returning Visitors": [{
//             click: visitorsChartDrilldownHandler,
//             cursor: "pointer",
//             explodeOnClick: false,
//             innerRadius: "75%",
//             legendMarkerType: "square",
//             name: "New vs Returning Visitors",
//             radius: "100%",
//             showInLegend: true,
//             startAngle: 90,
//             type: "doughnut",
//             dataPoints: [
//                 { y: 519960, name: "New Visitors", color: "#E7823A" },
//                 { y: 363040, name: "Returning Visitors", color: "#546BC1" }
//             ]
//         }],
//         "New Visitors": [{
//             color: "#E7823A",
//             name: "New Visitors",
//             type: "column",
//             dataPoints: [
//                 { x: new Date("1 Jan 2015"), y: 33000 },
//                 { x: new Date("1 Feb 2015"), y: 35960 },
//                 { x: new Date("1 Mar 2015"), y: 42160 },
//                 { x: new Date("1 Apr 2015"), y: 42240 },
//                 { x: new Date("1 May 2015"), y: 43200 },
//                 { x: new Date("1 Jun 2015"), y: 40600 },
//                 { x: new Date("1 Jul 2015"), y: 42560 },
//                 { x: new Date("1 Aug 2015"), y: 44280 },
//                 { x: new Date("1 Sep 2015"), y: 44800 },
//                 { x: new Date("1 Oct 2015"), y: 48720 },
//                 { x: new Date("1 Nov 2015"), y: 50840 },
//                 { x: new Date("1 Dec 2015"), y: 51600 }
//             ]
//         }],
//         "Returning Visitors": [{
//             color: "#546BC1",
//             name: "Returning Visitors",
//             type: "column",
//             dataPoints: [
//                 { x: new Date("1 Jan 2015"), y: 22000 },
//                 { x: new Date("1 Feb 2015"), y: 26040 },
//                 { x: new Date("1 Mar 2015"), y: 25840 },
//                 { x: new Date("1 Apr 2015"), y: 23760 },
//                 { x: new Date("1 May 2015"), y: 28800 },
//                 { x: new Date("1 Jun 2015"), y: 29400 },
//                 { x: new Date("1 Jul 2015"), y: 33440 },
//                 { x: new Date("1 Aug 2015"), y: 37720 },
//                 { x: new Date("1 Sep 2015"), y: 35200 },
//                 { x: new Date("1 Oct 2015"), y: 35280 },
//                 { x: new Date("1 Nov 2015"), y: 31160 },
//                 { x: new Date("1 Dec 2015"), y: 34400 }
//             ]
//         }]
//     };

//     var newVSReturningVisitorsOptions = {
//         animationEnabled: true,
//         theme: "light2",
//         title: {
//             text: ""
//         },
//         subtitles: [{
//             // text: "Click on Any Segment to Drilldown",
//             backgroundColor: "#2eacd1",
//             fontSize: 16,
//             fontColor: "white",
//             padding: 5
//         }],
//         legend: {
//             fontFamily: "calibri",
//             fontSize: 14,
//             itemTextFormatter: function (e) {
//                 return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
//             }
//         },
//         data: []
//     };

//     var visitorsDrilldownedChartOptions = {
//         animationEnabled: true,
//         theme: "light2",
//         axisX: {
//             labelFontColor: "#717171",
//             lineColor: "#a2a2a2",
//             tickColor: "#a2a2a2"
//         },
//         axisY: {
//             gridThickness: 0,
//             includeZero: false,
//             labelFontColor: "#717171",
//             lineColor: "#a2a2a2",
//             tickColor: "#a2a2a2",
//             lineThickness: 1
//         },
//         data: []
//     };

//     var chart_4 = new CanvasJS.Chart("chartContainer4", newVSReturningVisitorsOptions);
//     chart_4.options.data = visitorsData["New vs Returning Visitors"];
//     chart_4.render();

//     function visitorsChartDrilldownHandler(e) {
//         chart_4 = new CanvasJS.Chart("chartContainer4", visitorsDrilldownedChartOptions);
//         chart_4.options.data = visitorsData[e.dataPoint.name];
//         chart_4.options.title = { text: e.dataPoint.name }
//         chart_4.render();
//         $("#backButton").toggleClass("invisible");
//     }

//     $("#backButton").click(function () {
//         $(this).toggleClass("invisible");
//         chart_4 = new CanvasJS.Chart("chartContainer4", newVSReturningVisitorsOptions);
//         chart_4.options.data = visitorsData["New vs Returning Visitors"];
//         chart_4.render();
//     });
  
//     // chart 5
//     var chart_5 = new CanvasJS.Chart("chartContainer5", {
//         theme: "light2", // "light1", "light2", "dark1", "dark2"
//         // exportEnabled: true,
//         animationEnabled: true,
//         title: {
//             text: ""
//         },
//         data: [{
//             type: "pie",
//             startAngle: 25,
//             toolTipContent: "<b>{label}</b>: {y}%",
//             // showInLegend: "true",
//             legendText: "{label}",
//             indexLabelFontSize: 16,
//             indexLabel: "{label} - {y}%",
//             dataPoints: [
//                 { y: 51.08, label: "Total counts" },
//                 // { y: 27.34, label: "Internet Explorer" },
//                 // { y: 10.62, label: "Cuurent Status" }
//                 { y: 5.02, label: "Current status" },
//                 // { y: 4.07, label: "Safari" },
//                 // { y: 1.22, label: "Opera" },
//                 // { y: 0.44, label: "Others" }
//             ]
//         }]
//     });

//     // chart 6
 
//     var chart_6 = new CanvasJS.Chart("chartContainer6", {
//         animationEnabled: true,
//         title: {
//             text: ""
//         },
//         data: [{
//             type: "pie",
//             startAngle: 240,
//             yValueFormatString: "##0.00\"%\"",
//             indexLabel: "{label} {y}",
//             dataPoints: [
//                 { y: 79.45, label: "Total Month" },
//                 { y: 7.31, label: "Current status" }
//                 // { y: 7.06, label: "Baidu" },
//                 // { y: 4.91, label: "Yahoo" },
//                 // { y: 1.26, label: "Others" }
//             ]
//         }]
//     });





//     chart.render();
//     chart_1.render();
//     chart_3.render();
//     chart_4.render();
//     chart_5.render();
//     chart_6.render();
// }

// function explodePie(e) {
//     if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
//         e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
//     } else {
//         e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
//     }
//     e.chart_1.render();
//     e.chart.render();
//     e.chart_3.render();
//     e.chart_4.render();
//     e.chart_5.render();
//     e.chart_6.render();

// }
// const imgDiv = document.querySelector('profile-img');
// const img = document.querySelector('#photo');
// const file = document.querySelector('#file');
// const uploadBtn = document.querySelector('#uploadBtn');
 

// file.addEventListener('change' , function(){
//     const choosedFile = this.files[0];
//      if(choosedFile){
//          const reader = new FileReader();
//          reader.addEventListener('load', function(){
//              img.setAttribute('src' , reader.result);
//          });
//          reader.readAsDataURL(choosedFile);
//      }
// })


