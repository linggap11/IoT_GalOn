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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data User</button>
            </div>
            <div class="box-body">
              <table id="daftar_pengguna" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="15%">No. RFID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th width="15%">Telp</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($data_pengguna as $pengguna): ?>
                    <tr>
                      <td align="center"><?php echo $no++ ?></td>
                      <td><?php echo $pengguna->no_rfid ?></td>
                      <td><?php echo $pengguna->nama ?></td>
                      <td><?php echo $pengguna->alamat ?></td>
                      <td><?php echo $pengguna->telp ?></td>
                      <td align="center">
                        <a href="#" onclick="return false" data-id="<?php echo $pengguna->id_user ?>" class="edit_btn btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#" onclick="return false" data-id="<?php echo $pengguna->id_user ?>" class="hapus_btn btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
  <div class="modal fade" id="tambahModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah User</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('User/store') ?>" method="post">
            <div class="form-group">
              <label for="RFID">RFID:</label>
              <input type="text" class="form-control" placeholder="RFID" name="rfid">
            </div>
            <div class="form-group">
              <label for="Nama Lengkap">Nama Lengkap:</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
            </div>
            <div class="form-group">
              <label for="Nama Lengkap">Alamat:</label>
              <textarea name="alamat" rows="5" cols="50" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="Telp">Telp:</label>
              <input type="text" class="form-control" placeholder="Telp" name="telp">
            </div>
            <button type="submit" class="btn btn-primary ">Simpan</button>
            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
          </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>

    </div>
  </div>


  <!-- Modal -->
    <div class="modal fade" id="editModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit User</h4>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('User/update') ?>" method="post">
              <div class="form-group">
                <label for="RFID">RFID:</label>
                <input type="text" class="form-control" placeholder="RFID" name="rfid" id="rfid">
              </div>
              <div class="form-group">
                <label for="Nama Lengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama">
                <input type="hidden" name="id" id="id">
              </div>
              <div class="form-group">
                <label for="Nama Lengkap">Alamat:</label>
                <textarea name="alamat" rows="5" cols="50" class="form-control" id="alamat" ></textarea>
              </div>
              <div class="form-group">
                <label for="Telp">Telp:</label>
                <input type="text" class="form-control" placeholder="Telp" name="telp" id="telp">
              </div>
              <button type="submit" class="btn btn-primary ">Simpan</button>
              <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>

      </div>
    </div>
</body>
</html>
<script type="text/javascript">
  $('#daftar_pengguna').dataTable();

  $('.edit_btn').click(function() {
    var id = $(this).data('id');
    $.get('<?php echo base_url(); ?>/User/edit/'+id, function(resp) {
      var data = JSON.parse(resp);
      $('#id').val(data.id_user);
      $('#rfid').val(data.no_rfid);
      $('#nama').val(data.nama);
      $('#alamat').val(data.alamat);
      $('#telp').val(data.telp);
      $('#editModal').modal('show');
    });
  });

  $('.hapus_btn').click(function() {
    var result = confirm("Apakah Anda Yakin ?");
    var id = $(this).data('id');
    if (result == true) {
      window.location = "<?php echo base_url() ?>/User/hapus/"+id;
    }
  });

</script>
