<!-- jQuery 3 -->
<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js/notify.min.js') ?>"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    /** add active class and stay opened when selected */

    var url = window.location;
    if (url == "<?php echo base_url('/dashboard') ?>") {
      $('.dashboard').addClass('active')
    } else if (url == "<?php echo base_url('/pengguna') ?>") {
      $('.pengguna').addClass('active')
    } else if (url == "<?php echo base_url('/alat') ?>") {
      $('.alat').addClass('active')
    } else if (url == "<?php echo base_url('/penggunaan_air') ?>") {
      $('.penggunaan_air').addClass('active')
    } else if (url == "<?php echo base_url('/laporan_penggunaan_air') ?>") {
      $('.laporan_penggunaan_air').addClass('active')
    }

  });
  <?php
     if($this->session->flashdata('sukses')) {
       echo alert_sukses($this->session->flashdata('sukses'));
     }
     if($this->session->flashdata('warning')) {
       echo alert_warning($this->session->flashdata('warning'));
     }
     if($this->session->flashdata('error')) {
       echo alert_error($this->session->flashdata('error'));
     }
     if($this->session->flashdata('info')) {
       echo alert_info($this->session->flashdata('info'));
     }
   ?>
</script>
