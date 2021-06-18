
<script src="../../public/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../public/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../public/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../public/AdminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="../../public/AdminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../public/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../public/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../public/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../public/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../public/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="../../public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../public/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../public/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../public/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/AdminLTE/dist/js/demo.js"></script>

<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="../../public/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../public/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<!-- FastClick -->
<!-- AdminLTE App -->



<script src="../../public/AdminLTE/main.js"></script>


<script type="text/javascript">
  $("#addBankniftyModal").click(function(){
        $("#bankniftyModal").modal('show');
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




// $(".consumerNoticeDetails").click(function(){

//       var consumer_list_id = $(this).attr("id");

//       var base_url = window.location.origin;

//       $("#viewNoticeDetail").modal('show');

//       $.ajax({
//         url: base_url+"/Admin/consumerNoticeDetails",
//         type: "post",
//         data:{'consumer_list_id':consumer_list_id},
//         success: function (response) {
//          $("#result").html(response);
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//            console.log(textStatus, errorThrown);
//         }
//     });

// });


$(".noticeDetails").click(function(){

      var id         = $(this).attr("notice_id");
      var table_name = $(this).attr("table-name");
      var user_id    = $(this).attr("user_id");
      var base_url   = window.location.origin;


      $("#viewNoticeDetail").modal('show');
      $("#loading").show();

  $.ajax({
    url: base_url+"/Advocate_Detail_Notice/"+table_name,
    type: "post",
    data:{'id':id},
    success: function (response) {

     $("#loading").hide();
     $("#result").html(response);
     
    },
    error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
    }
 });

});


</script>
<script src="../../public/advocate.js"></script>

</body>
</html>
