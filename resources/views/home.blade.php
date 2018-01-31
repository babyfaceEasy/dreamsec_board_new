@include('layouts.inc.header');

<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-android"></i> Android Total Download</span>
      <div class="count">2500</div>
      <span class="count_bottom"><i class="green">4% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-apple"></i> IOS Total Download</span>
      <div class="count">123.50</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-medkit"></i> Total Panic Click</span>
      <div class="count green">2,500</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-thumbs-up"></i> Crime Attended to</span>
      <div class="count">4,567</div>
      <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-thumbs-down"></i> Crime Unttended to</span>
      <div class="count">2,315</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Sum Total Download</span>
      <div class="count">17,325</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From launch</span>
    </div>
  </div>
  <!-- /top tiles -->
<div class="row " >
<div class="col-md-9 col-sm-9 col-xs-12 ">
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
          <div class="x_title">
            <h2>Today Crime Events</h2>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-6">
            <div>
              <p>Panic Button Click</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Crime Attended To</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-6">
            <div>
              <p>Crime Unattended To</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Today Registered User</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                </div>
              </div>
            </div>
          </div>
</div>
  <br/><br/>

  <div class="row" style="margin-top:30px;">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3>Register Users</h3>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!--
            <p class="text-muted font-13 m-b-30">
              The total register users are display here.
            </p>-->
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>gender</th>
                  <th>Phone</th>
                  <th>Register date</th>
                  <th>View</th>
                  <th>Treat View</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User">
                    <a href="profile.php"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></a></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View">
                    <a href="profile.php"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button>
                    </a></i></td>
                </tr>
                <tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr><tr>
                  <td>Fredrick Falana</td>
                  <td>f.falana@dreammesh.ng</td>
                  <td>0900000000000</td>
                  <td>Male</td>
                  <td>IOS</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>

                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>a.g@dreammesh.ng</td>
                  <td>080777777777</td>
                  <td>Female</td>
                  <td>Android</td>
                  <td>2011/04/25</td>
                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="View User"><button class="btn btn-primary btn-sm" style="background-color: #000"><span class="glyphicon glyphicon-eye-open"></span></button></i></td>

                  <td align="center"><i data-placement="top" data-toggle="tooltip" title="Treat View"><button class="btn btn-primary btn-sm" style="background-color: #b10000"><span class="glyphicon glyphicon-compressed"></span></button></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


  </div>




</div>

@include('layouts.inc.footer');
