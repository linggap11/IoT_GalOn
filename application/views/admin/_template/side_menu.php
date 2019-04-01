<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="dashboard">
        <a href="<?php echo base_url('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="pengguna">
        <a href="<?php echo base_url('pengguna') ?>">
          <i class="fa fa-user"></i> <span>Pengguna</span>
        </a>
      </li>
      <li class="alat">
        <a href="<?php echo base_url('alat') ?>">
          <i class="fa fa-wrench"></i> <span>Alat & Sensor</span>
        </a>
      </li>
      <li class="penggunaan_air">
        <a href="<?php echo base_url('penggunaan_air') ?>">
          <i class="fa fa-bitbucket"></i> <span>Penggunaan Air</span>
        </a>
      </li>
      <li class="treeview laporan">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('laporan_penggunaan_air') ?>"><i class="fa fa-circle-o"></i> Laporan Penggunaan Air</a></li>
          <li><a href="<?php echo base_url('laporan_pengguna') ?>"><i class="fa fa-circle-o"></i> Laporan Jumlah Pengguna</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
