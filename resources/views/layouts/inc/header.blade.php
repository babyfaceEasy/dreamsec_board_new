<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/ico" />

    <title>Dream Secure Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- NProgress -->
    <link href="{{ asset('vendor/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
  </head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light2",
  title: {
    text: "Crime Network Graph"
  },
  axisX: {
    valueFormatString: "MMM"
  },
  axisY: {
    prefix: "$",
    labelFormatter: addSymbols
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  data: [
  {
    type: "column",
    name: "Panic Button Click",
    showInLegend: true,
    xValueFormatString: "MMMM YYYY",
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2016, 0), y: 20000 },
      { x: new Date(2016, 1), y: 30000 },
      { x: new Date(2016, 2), y: 25000 },
      { x: new Date(2016, 3), y: 70000, indexLabel: "Highest Crime" },
      { x: new Date(2016, 4), y: 50000 },
      { x: new Date(2016, 5), y: 35000 },
      { x: new Date(2016, 6), y: 30000 },
      { x: new Date(2016, 7), y: 43000 },
      { x: new Date(2016, 8), y: 35000 },
      { x: new Date(2016, 9), y:  30000},
      { x: new Date(2016, 10), y: 40000 },
      { x: new Date(2016, 11), y: 50000 }
    ]
  },
  {
    type: "line",
    name: "Crime Attended To",
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2016, 0), y: 40000 },
      { x: new Date(2016, 1), y: 42000 },
      { x: new Date(2016, 2), y: 45000 },
      { x: new Date(2016, 3), y: 45000 },
      { x: new Date(2016, 4), y: 47000 },
      { x: new Date(2016, 5), y: 43000 },
      { x: new Date(2016, 6), y: 42000 },
      { x: new Date(2016, 7), y: 43000 },
      { x: new Date(2016, 8), y: 41000 },
      { x: new Date(2016, 9), y: 45000 },
      { x: new Date(2016, 10), y: 42000 },
      { x: new Date(2016, 11), y: 50000 }
    ]
  },
  {
    type: "area",
    name: "Crime Unattended To",
    markerBorderColor: "white",
    markerBorderThickness: 2,
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2016, 0), y: 5000 },
      { x: new Date(2016, 1), y: 7000 },
      { x: new Date(2016, 2), y: 6000},
      { x: new Date(2016, 3), y: 30000 },
      { x: new Date(2016, 4), y: 20000 },
      { x: new Date(2016, 5), y: 15000 },
      { x: new Date(2016, 6), y: 13000 },
      { x: new Date(2016, 7), y: 20000 },
      { x: new Date(2016, 8), y: 15000 },
      { x: new Date(2016, 9), y:  10000},
      { x: new Date(2016, 10), y: 19000 },
      { x: new Date(2016, 11), y: 22000 }
    ]
  }]
});
chart.render();

function addSymbols(e) {
  var suffixes = ["", "K", "M", "B"];
  var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

  if(order > suffixes.length - 1)
    order = suffixes.length - 1;

  var suffix = suffixes[order];
  return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
}

}


</script>

<!--Total download Modal -->

 <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#exampleModal').trigger('focus')
});





<!-- Modal --></script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Total download</h4>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <h3><span aria-hidden="true" style="color:#000">&times;</span></h3>
        </button>-->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5" style="height:120px;vertical-align:middle; background-color: #000; color:#fff; padding:15px 20px 15px 20px; margin-left:20px;">   <span class="count_top"><i class="fa fa-android"></i> Android Total Download</span>
              <div class="count"><h3>2500<h3></div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5" style="height:120px;vertical-align:middle; background-color: #b01000; color:#fff; padding:15px 20px 15px 20px; margin-right:20px;">   <span class="count_top"><i class="fa fa-apple"></i> IOS Total Download</span>
              <div class="count"><h3>30000<h3></div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Exit</button>
      </div>
    </div>
  </div>
</div>


<!--Total Request -->

<!--Total download Modal -->

 <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#totalRequest').trigger('focus')
});





<!-- Modal --></script>
<div class="modal fade" id="totalRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Total Request</h4>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <h3><span aria-hidden="true" style="color:#000">&times;</span></h3>
        </button>-->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5" style="height:120px;vertical-align:middle; background-color: #000; color:#fff; padding:15px 20px 15px 20px; margin-left:20px;">   <span class="count_top"><i class="fa fa-android"></i> Android Total Request</span>
              <div class="count"><h3>2500<h3></div>
              <span class="count_bottom"><i class="green">74% </i> From last Week</span>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5" style="height:120px;vertical-align:middle; background-color: #b01000; color:#fff; padding:15px 20px 15px 20px; margin-right:20px;">   <span class="count_top"><i class="fa fa-apple"></i> IOS Total Request</span>
              <div class="count"><h3>30000<h3></div>
              <span class="count_bottom"><i class="green">54% </i> From last Week</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Exit</button>
      </div>
    </div>
  </div>
</div>




  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><span><img src="{{ asset('images/logo.png') }}"/></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#exampleModal">Total Download</a></li>
                      <li><a href="register_user.php">Register Users</a></li>
                      <li><a href="email_all.php">All E-mails</a></li>
                      <li><a href="phone_all.php">All Phone Numbers</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_report.php">General Report</a></li>



                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Request <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" data-toggle="modal" data-target="#totalRequest">Total Request</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Location Tracker <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="location.php">Crime Area</a></li>

                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <!--<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>-->
            </div>

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Fredrick Head
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <!--<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>-->
                    <li>
                      <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          <span class="fa fa-sign-out pull-right" aria-hidden="true"></span> Log Out
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
