@include('layouts.inc.header');

<style media="screen">
  #map-canvas {
    height: 300px;
    width: 100%;
  }
</style>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Acitivity</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <!--  <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>-->
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User Report <!--<small>Activity report</small>--></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-10 col-sm-10 col-xs-12">

              <div class="profile_title">
                <div class="col-md-6">
                  <h2>Map Activity Report</h2>
                </div>

              </div>
              <!-- start of user-activity-graph -->
              <div style="width:100%; height:280px;">

                <div id="map-canvas"/></div>
              </div>
              <!-- end of user-activity-graph -->

              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Treat Log</a>
                  </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                    <!-- start recent activity -->
                    <ul class="messages">

                      <!-- Write it here -->

                      @foreach ($panic_data as $data)
                        <li>
                          <?php
                            $phpdate = strtotime($data->created_at);
                          ?>
                          <div class="message_date">
                            <h3 class="date text-info">{{date('d', $phpdate)}}</h3>
                            <p class="month">{{date('M', $phpdate)}}</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">{{ $data->last_name }} {{ $data->other_names }}</h4>
                            <blockquote class="message">{{$data->message }}.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </p>
                          </div>
                        </li>
                      @endforeach


                    </ul>
                    <!-- end recent activity -->

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

@include('layouts.inc.footer');

<!-- js -->
<script type="text/javascript">
function initMap() {
      var uluru = {lat: -25.363, lng: 131.044};
      var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTqyDjboWtpBfa-nJqIx92hc9JVKl9TjI&callback=initMap"></script>
