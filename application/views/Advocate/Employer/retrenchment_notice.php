<?php //  echo  "<pre>";print_r($pf_claim_list);die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Retrenchment Notice Details
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notices</a></li>
        <li class="active">Retrenchment Notice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Retrenchment Notice List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Added On</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($retrenchment_notice);$i++){ ?>
                 <tr>
                  <td><?php echo $retrenchment_notice[$i]->first_name." ".$retrenchment_notice[$i]->last_name ?></td>
                  <td><?php echo $retrenchment_notice[$i]->email  ?></td>
                  <td><?php echo $retrenchment_notice[$i]->phone ?></td>
                  <td><?php echo $retrenchment_notice[$i]->added_date ?></td>
                  <td><button class="btn btn-info notice_details" id="<?php echo $retrenchment_notice[$i]->id ?>">View Details</button>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- Modals -->

  <div id="viewNoticeDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ESI Claim Detail</h4>
      </div>
      <div class="modal-body">
      <div id="result"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/dist/js/demo.js"></script>
<script src="../../public/main.js"></script>

<!-- page script -->
<script>
  $(function () {

    $("#addBankniftyModal").click(function(){
        $("#bankniftyModal").modal('show');
    });
    

    $(".notice_details").click(function(){

      var id = $(this).attr("id");

      var base_url = window.location.origin;

      $("#viewNoticeDetail").modal('show');

  $.ajax({
    url: base_url+"/Detail_Notice/retrenchment_notice",
    type: "post",
    data:{'id':id},
    success: function (response) {
     $("#result").html(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }
});

    });



    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
