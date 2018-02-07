@include('layouts.inc.header');

<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-medkit"></i> Total Panic Click</span>
      <div class="count green">{{ $total_clicks }}</div>
      <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Sum Total Download</span>
      <div class="count">{{ $total_users }}</div>
      <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From launch</span>-->
    </div>
  </div>



  <div class="row" style="margin-top:10px;">

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
            <table id="datatable-try" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Last Name</th>
                  <th>Other Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Gender</th>
                  <th>Register Date</th>
                  <th>View</th>
                </tr>
              </thead>



            </table>
          </div>
        </div>
      </div>


  </div>




</div>
@include('layouts.inc.footer');

<!-- js -->

<script type="text/javascript">


$(function(){

  $('#datatable-try').DataTable({
    processing: true,
    serverSide: true,
    ajax: '{!! route('home.data') !!}',
    columns:[
      { data: 'DT_Row_Index', orderable: false, searchable: false},
      { data: 'last_name', name: 'last_name' },
      { data: 'other_names', name: 'other_names' },
      { data: 'email', name: 'email' },
      { data: 'phone', name: 'phone' },
      { data: 'gender', name: 'gender' },
      { data: 'created_at', name:'created_at' },
      { data: 'view', name: 'view', orderable: false, searchable: false },
    ]
  });
});

</script>
