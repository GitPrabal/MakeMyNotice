<?php //  echo  "<pre>";print_r($pf_claim_list);die; ?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PF Claim Details
        <small>advanced details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notices</a></li>
        <li class="active">PF Claim</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">PF Claim Notice List</h3>
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
                <?php for($i=0;$i<count($pf_claim_list);$i++){ ?>
                 <tr>
                  <td><?php echo $pf_claim_list[$i]->first_name." ".$pf_claim_list[$i]->last_name ?></td>
                  <td><?php echo $pf_claim_list[$i]->email  ?></td>
                  <td><?php echo $pf_claim_list[$i]->phone ?></td>
                  <td><?php echo $pf_claim_list[$i]->added_date ?></td>
                  <td>
                  <button data-foo="pfNoticeDetail" class="btn btn-info noticeDetails" id="<?php echo $pf_claim_list[$i]->id ?>" 
                  >View Details</button>
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
        <h4 class="modal-title">PF Claim Notice Detail</h4>
      </div>
      <div class="modal-body">
      <center><h4 id="loading"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i></h4></center>
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


<!-- page script -->
<script>
 
</script>
</body>
</html>
