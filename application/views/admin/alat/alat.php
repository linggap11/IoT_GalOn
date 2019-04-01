<?php $this->load->view('admin/_template/header') ?>
<style type="text/css">
  th {
    text-align: center;
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
      <h1>Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Alat & Sensor</li>
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
              <table id="daftar_alat" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="12%">No Resi</th>
                    <th>Nama Alat</th>
                    <th width="15%">Penempatan</th>
                    <th width="10%">Status</th>
                    <th width="10%">Kondisi</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_alat as $alat): ?>
                    <tr>
                      <td align="center"><?php echo $alat->no_seri ?></td>
                      <td><?php echo $alat->nama_alat ?></td>
                      <td align="center"><?php echo $alat->penempatan ?></td>
                      <td align="center"><?php echo $alat->status_alat ?></td>
                      <td align="center"><?php echo $alat->kondisi ?></td>
                      <td align="center">
                        <a href="<?php echo base_url('alat/edit/'.$alat->id_alat.'') ?>" class="btn btn-warning btn-xs">Edit</a> &nbsp <a href="<?php echo base_url('alat/hapus/'.$alat->id_alat.'') ?>" class="btn btn-danger btn-xs">Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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
  $('#daftar_alat').dataTable();
</script>