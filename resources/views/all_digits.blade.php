@include('layouts.inc.header');

<!-- page content -->
<div class="right_col" role="main">
  <div class="row" style="margin-top:10px;">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3>All Phone Numbers</h3>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!--
            <p class="text-muted font-13 m-b-30">
              The total register users are display here.
            </p>-->
            <table id="phone-datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Last Name</th>
                  <th>Other Name</th>
                  <th>Mobile No.</th>
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

  $('#phone-datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: '{!! route('all.digits.data') !!}',
    columns:[
      { data: 'DT_Row_Index', searchable:false, orderable: false},
      { data: 'last_name', name: 'last_name' },
      { data: 'other_names', name: 'other_names' },
      { data: 'phone', name: 'phone' },
    ]
  });
});


</script>
