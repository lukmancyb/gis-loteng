<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
<!--index-->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  
  

<!--bootstrap_card-->
  
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!--bootstrap_modal-->
  <script src="<?php echo base_url(); ?>assets/modules/prism/prism.js"></script>

<!--layout_transparent-->
  <script src="<?php echo base_url(); ?>assets/modules/sticky-kit.js"></script>

<!--components_gallery-->
  

<!--components_statistic-->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>

<!--components_table-->
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!--components_user-->
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>

<!--forms_advanced_form-->
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
  

<!--forms_editor-->
  
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
  

<!--modules_calendar-->
  <script src="<?php echo base_url(); ?>assets/modules/fullcalendar/fullcalendar.min.js"></script>

<!--modules_chartjs-->
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>

<!--userdinas-->
  <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!--modules_owl_carousel-->
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>

<!--modules_sparkline-->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>

<!--modules_sweet_alert-->
  <script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>

<!--modules_toastr-->
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>

<!--modules_vector_map-->

<!--auth_register-->
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!--features_post_create-->
  
  <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<!--features_posts-->
  

<!--features_profile-->
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>

<!--features_setting_detail-->
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/page/features-post-create.js"></script>
<!--features_tickets-->
  
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>



<!-- Page Specific JS File -->
  <!--bootstrap_modal-->
  <script src="<?php echo base_url(); ?>assets/js/page/bootstrap-modal.js"></script>
  <script type="text/javascript">window.onload = date_time('date_time');</script>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script>
    $(function () {
    $("#dinas").select2();
    $("#skpd").select2();
    $("#kategori").select2();
    $("#selectopd").select2();
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  </script>
  <script>
    $(document).ready(function(){
      $('#alert_notif').on('click', function(e){
          e.preventDefault(); //cancel default action

          //Recuperate href value
          var href = $(this).attr('href');
          var message = $(this).data('confirm');

          //pop up
          swal({
              title: "Anda Yakin ??",
              text: message, 
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("User dinas berhasil dihapus!", {
                icon: "success",
              });
              window.location.href = href;
            } else {
              swal("File anda tidak dihapus!");
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $('#logout_notif').on('click', function(e){
          e.preventDefault(); //cancel default action

          //Recuperate href value
          var href = $(this).attr('href');
          var message = $(this).data('confirm');

          //pop up
          swal({
              title: "Anda Yakin Keluar??",
              text: message, 
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Anda Berhasil Logout!", {
                icon: "success",
              });
              window.location.href = href;
            } else {
              swal("Anda masih betah ya -_-");
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $('#sugul_notif').on('click', function(e){
          e.preventDefault(); //cancel default action

          //Recuperate href value
          var href = $(this).attr('href');
          var message = $(this).data('confirm');

          //pop up
          swal({
              title: "Anda Yakin Keluar??",
              text: message, 
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Anda Berhasil Logout!", {
                icon: "success",
              });
              window.location.href = href;
            } else {
              swal("Anda masih betah ya -_-");
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $('#berita_notif').on('click', function(e){
          e.preventDefault(); //cancel default action

          //Recuperate href value
          var href = $(this).attr('href');
          var message = $(this).data('confirm');

          //pop up
          swal({
              title: "Anda Yakin??",
              text: message, 
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Postingan berahasil dihapus!", {
                icon: "success",
              });
              window.location.href = href;
            } else {
              swal("Postingan tidak jadi dihapus -_-");
            }
          });
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $('#hapus_pengaduan_notif').on('click', function(e){
          e.preventDefault(); //cancel default action

          //Recuperate href value
          var href = $(this).attr('href');
          var message = $(this).data('confirm');

          //pop up
          swal({
              title: "Anda Yakin??",
              text: message, 
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Pengaduan berahasil dihapus!", {
                icon: "success",
              });
              window.location.href = href;
            } else {
              swal("Pengaduan tidak jadi dihapus -_-");
            }
          });
      });
    });
  </script>
</body>
</html>