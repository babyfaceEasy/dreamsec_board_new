@include('layouts.inc.header');

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Treat Report </h3>
      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">

          <div class="x_content">

            <p></p>

            <!-- start project list -->
            <table class="table table-responsive projects" id="reports-datatable">
              <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th style="width: 20%">Last Name</th>
                  <th>Other Names</th>
                  <th>Total Request </th>
                  <th style="width: 20%">Actions</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
            <!-- end project list -->

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


$(function(){

  $('#reports-datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: '{!! route('general.report.data') !!}',
    columns:[
      { data: 'DT_Row_Index', searchable:false, orderable: false},
      { data: 'last_name', name: 'last_name' },
      { data: 'other_names', name: 'other_names' },
      { data: 'total_panics', name: 'total_panics' },
      { data: 'actions', name: 'actions', orderable: false, searchable: false },
    ]
  });
});


</script>
