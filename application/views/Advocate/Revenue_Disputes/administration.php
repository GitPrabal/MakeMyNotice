<?php //  echo  "<pre>";print_r($accidental_claim_list);die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notice To Administration
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notices</a></li>
        <li class="active">Notice To Administration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Notice To Administration</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Defendant Name</th>
                  <th>Address Of Defendant</th>
                  <th>Added On</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($administration);$i++){ ?>
                 <tr>
                  <td><?php echo $administration[$i]->department_name; ?></td>
                  <td><?php echo $administration[$i]->address_department;  ?></td>
                  <td><?php echo $administration[$i]->added_date; ?></td>
                  <td><button class="btn btn-info detailNotice" id="<?php echo $administration[$i]->id ?>">View Details</button>
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
        <h4 class="modal-title">Notice Detail</h4>
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
    

    $(".detailNotice").click(function(){

        var id = $(this).attr("id");

        var base_url = window.location.origin;

        $("#viewNoticeDetail").modal('show');

  $.ajax({
    url: base_url+"/Detail_Notice/administration",
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
