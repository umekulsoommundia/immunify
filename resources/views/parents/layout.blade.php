<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Admin Panel</title>

        <!-- App CSS -->  
        <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap"
        rel="stylesheet">
</head>
<style>
* {
    font-family: 'Lato', sans-serif;
}




.flatpickr-day.selected {
  background-color: #3A55A4!important;
  color:"white";
  border-color: #3A55A4;
}

/* Change the border and fill color of the today's date */


/* Change the border and fill color of the hovered date */
.flatpickr-day:hover {
  background-color: white;
  border-color: blue;
}
</style>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar" >
            <div  style="background-color:#0a77b1;" class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                  <span class=" align-middle">  
             
                  <img src="./vesctor.png" class="rounded-circle" height="60px" width="60px"></span>
                  
                </span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item " >
                        <a class="sidebar-link" href="parentOverview" style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Home</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentProfile" style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/logout" style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">log out</span>
                        </a>
                    </li>

                    <li class="sidebar-item"> 
                        <a class="sidebar-link" href="parentSchedule" style="background-color:#0a77b1;">
                            	<i class="align-middle me-2" data-feather="calendar"></i></i> <span class="align-middle">Schedule</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>

               

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentHospitals" style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">Hospitals</span>
                        </a>
                    </li>

         

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentVaccine" style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="database"></i> <span
                                class="align-middle">Vaccines</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentMedicalreport"style="background-color:#0a77b1;">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Medical Report</span>
                        </a>
                    </li>
                   


             
                </ul>


            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                    @yield('main')
                </div>
                </main>


        </div>
    </div>





    <script src="js/app.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
    gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
    gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
    // Line chart
    new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "Sales ($)",
                fill: true,
             
                backgroundColor: gradient,
                borderColor:"#0A77B1",
                data: [
                    2115,
                    1562,
                    1584,
                    1892,
                    1587,
                    1923,
                    2566,
                    2448,
                    2805,
                    3438,
                    2917,
                    3327
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                intersect: false
            },
            hover: {
                intersect: true
            },
            plugins: {
                filler: {
                    propagate: false
                }
            },
            scales: {
                xAxes: [{
                    reverse: true,
                    gridLines: {
                        color: "rgba(0,0,0,0.0)"
                    }
                }],
                yAxes: [{
                    ticks: {
                        stepSize: 1000
                    },
                    display: true,
                    borderDash: [3, 3],
                    gridLines: {
                        color: "rgba(0,0,0,0.0)"
                    }
                }]
            }
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
            labels: ["Chrome", "Firefox", "IE"],
            datasets: [{
                data: [4306, 3801, 1689],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.warning,
                    window.theme.danger
                ],
                borderWidth: 5
            }]
        },
        options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            cutoutPercentage: 75
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Bar chart
    new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "This year",
                color:"#3A55A4",
                backgroundColor:"#3A55A4",
                borderColor: "#3A55A4",
                hoverBackgroundColor: "#3A55A4",
                hoverBorderColor:"#3A55A4",
                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                barPercentage: .75,
                categoryPercentage: .5
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    },
                    stacked: false,
                    ticks: {
                        stepSize: 20
                    }
                }],
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        color: "#0A77B1"
                    }
                }]
            }
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var markers = [{
            coords: [31.230391, 121.473701],
            name: "Shanghai"
        },
        {
            coords: [28.704060, 77.102493],
            name: "Delhi"
        },
        {
            coords: [6.524379, 3.379206],
            name: "Lagos"
        },
        {
            coords: [35.689487, 139.691711],
            name: "Tokyo"
        },
        {
            coords: [23.129110, 113.264381],
            name: "Guangzhou"
        },
        {
            coords: [40.7127837, -74.0059413],
            name: "New York"
        },
        {
            coords: [34.052235, -118.243683],
            name: "Los Angeles"
        },
        {
            coords: [41.878113, -87.629799],
            name: "Chicago"
        },
        {
            coords: [51.507351, -0.127758],
            name: "London"
        },
        {
            coords: [40.416775, -3.703790],
            name: "Madrid "
        }
    ];
    var map = new jsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
            initial: {
                r: 9,
                strokeWidth: 7,
                stokeOpacity: .4,
                fill: window.theme.primary
            },
            hover: {
                fill: window.theme.primary,
                stroke: window.theme.primary
            }
        },
        zoomOnScroll: false
    });
    window.addEventListener("resize", () => {
        map.updateSize();
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
    var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
    document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
        nextArrow: "<span title=\"Next month\">&raquo;</span>",
        defaultDate: defaultDate
    });
});
</script>


</body>

</html>