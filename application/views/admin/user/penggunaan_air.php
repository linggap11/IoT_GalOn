<?php $this->load->view('admin/_template/header') ?>
<style media="screen">
  th {
    text-align: center
  }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php $this->load->view('admin/_template/side_menu') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <table id="daftar_pengguna" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="15%">No. RFID</th>
                    <th width="15%">Waktu</th>
                    <th>Nama Pengguna</th>
                    <th width="15%">Jumlah Air (ml)</th>
                    <th width="10%">Jenis Air</th>
                    <th width="10%">Galon</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php if (count($data_pengguna) > 0): ?>
                    <?php foreach ($data_pengguna as $pengguna): ?>
                      <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $pengguna->no_rfid ?></td>
                        <td align="center"><?php echo $pengguna->waktu ?></td>
                        <td><?php echo $pengguna->nama ?></td>
                        <td><?php echo $pengguna->jumlah_air ?></td>
                        <td><?php echo $pengguna->jenis_air ?></td>
                        <td align="center"><?php echo $pengguna->nama_alat ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/_template/footer') ?>

</div>
<!-- ./wrapper -->


</body>
</html>
<script type="text/javascript">
  $('#daftar_pengguna').dataTable({
    "iDisplayLength": 25,
    "bInfo": false,
    "columnDefs":[
       {'bSortable': false, 'aTargets': [ 0, 1, 2, 3, 4, 5, 6 ]}
     ]
  });

</script>
