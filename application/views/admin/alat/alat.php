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
      <h1>Alat & Sensor
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data Alat</button>
            </div>
            <div class="box-body">
              <table id="daftar_alat" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="12%">No Seri</th>
                    <th>Nama Alat</th>
                    <th width="15%">Penempatan</th>
                    <th width="10%">Status</th>
                    <th width="10%">Kondisi</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($data_alat as $alat): ?>
                    <tr>
                      <td align="center"><?php echo $no++ ?></td>
                      <td align="center"><?php echo $alat->no_seri ?></td>
                      <td><?php echo $alat->nama_alat ?></td>
                      <td align="center"><?php echo $alat->penempatan ?></td>
                      <td align="center"><?php echo $alat->status_alat ?></td>
                      <td align="center"><?php echo $alat->kondisi ?></td>
                      <td align="center">
                        <a href="#" onclick="return false" data-id="<?php echo $alat->id_alat ?>" class="edit_btn btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#" onclick="return false" data-id="<?php echo $alat->id_alat ?>" class="hapus_btn btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"></h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalSensor">Tambah Data Sensor</button>
              </div>
              <div class="box-body">
                <table id="daftar_sensor" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="15%">Sensor</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_sensor as $sensor): ?>
                      <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $sensor->jenis_sensor ?></td>
                        <td align="center">
                          <a href="#" onclick="return false" data-id="<?php echo $sensor->id_sensor ?>" class="editSensor_btn btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                          <a href="#" onclick="return false" data-id="<?php echo $sensor->id_sensor ?>" class="hapusSensor_btn btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Alat Beserta Sensor</h3>

              </div>
              <div class="box-body">
                <table id="daftar_alat_sensor" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="15%">Nama Alat</th>
                      <th width="15%">Sensor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_alat as $alat): ?>
                      <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $alat->nama_alat ?></td>
                        <td align="left">
                        <?php foreach ($det_sensor as $sensor): ?>

                          <?php if ($sensor->id_alat == $alat->id_alat): ?>
                              <?php echo $sensor->jenis_sensor ?> ,
                          <?php endif; ?>

                        <?php endforeach; ?>
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
          <h4 class="modal-title">Tambah Data Alat</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Alat/store') ?>" method="post">
            <div class="form-group">
              <label for="No. Seri">No. Seri:</label>
              <input type="text" class="form-control" name="no_seri">
            </div>
            <div class="form-group">
              <label for="">Nama Alat:</label>
              <input type="text" class="form-control" placeholder="Nama Alat" name="nama_alat">
            </div>
            <div class="form-group">
              <label for="">Penempatan:</label>
              <input type="text" class="form-control" name="penempatan">
            </div>
            <div class="form-group">
              <label for="">Status:</label>
              <select class="form-control" name="status">
                <option value="AKTIF">AKTIF</option>
                <option value="NONAKTIF">NONAKTIF</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Kondisi:</label>
              <select class="form-control" name="kondisi">
                <option value="PENUH">PENUH</option>
                <option value="SEDANG">SEDANG</option>
                <option value="KOSONG">KOSONG</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Sensor: </label>
              <?php $i = 1 ?>
              <?php foreach ($data_sensor as $sensor): ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sensor[]"  value="<?php echo $sensor->id_sensor ?>">
                    <?php echo $sensor->jenis_sensor ?>
                  </label>
                </div>
              <?php endforeach; ?>

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
          <h4 class="modal-title">Edit Data Alat</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Alat/update') ?>" method="post">
            <div class="form-group">
              <label for="No. Seri">No. Seri:</label>
              <input type="text" class="form-control" name="no_seri" id="no_seri">
              <input type="hidden" name="id_alat" id="id_alat">
            </div>
            <div class="form-group">
              <label for="">Nama Alat:</label>
              <input type="text" class="form-control" placeholder="Nama Alat" name="nama_alat" id="nama_alat">
            </div>
            <div class="form-group">
              <label for="">Penempatan:</label>
              <input type="text" class="form-control" name="penempatan" id="penempatan">
            </div>
            <div class="form-group">
              <label for="">Status:</label>
              <select class="form-control" name="status" id="status">

              </select>
            </div>
            <div class="form-group">
              <label for="">Kondisi:</label>
              <select class="form-control" name="kondisi" id="kondisi">

              </select>
            </div>
            <div class="form-group">
              <label for="">Sensor: </label>
              <div id="checkbox">

              </div>
              <?php foreach ($data_sensor as $sensor): ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sensor[]" class="sensor" id="<?php echo 'sensor'.$sensor->id_sensor ?>" value="<?php echo $sensor->id_sensor ?>">
                    <?php echo $sensor->jenis_sensor ?>
                  </label>
                </div>
              <?php endforeach; ?>

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
    <div class="modal fade" id="tambahModalSensor" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Sensor</h4>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('Sensor/store') ?>" method="post">
              <div class="form-group">
                <label for="">Sensor:</label>
                <input type="text" class="form-control" placeholder="Sensor" name="sensor">
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
      <div class="modal fade" id="editModalSensor" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Sensor</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('Sensor/update') ?>" method="post">
                <div class="form-group">
                  <label for="">Sensor:</label>
                  <input type="text" class="form-control" placeholder="Sensor" name="sensor" id="sensor">
                  <input type="hidden" name="id_sensor" id="id_sensor">
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
  $('#daftar_alat').dataTable({
    "bInfo": false,
    "columnDefs":[
       {'bSortable': false, 'aTargets': [ 0, 1, 2, 3, 4, 5, 6 ]}
     ]
  });
  $('#daftar_sensor').dataTable({
    "bInfo": false,
    "columnDefs":[
       {'bSortable': false, 'aTargets': [ 0, 1, 2 ]}
     ]
  });

  $('.edit_btn').click(function() {
    var id = $(this).data('id');
    $.get('<?php echo base_url(); ?>/Alat/edit/'+id, function(resp) {
      var data = JSON.parse(resp);
      $('#id_alat').val(data[0].id_alat);
      $('#no_seri').val(data[0].no_seri);
      $('#nama_alat').val(data[0].nama_alat);
      $('#penempatan').val(data[0].penempatan);
      if (data[0].status_alat == 'AKTIF') {
        $('#status').append('<option value="AKTIF" selected>AKTIF</option><option value="NONAKTIF">NONAKTIF</option>');
      } else {
        $('#status').append('<option value="AKTIF" >AKTIF</option><option value="NONAKTIF" selected>NONAKTIF</option>');
      }
      if (data[0].kondisi == 'PENUH') {
        $('#kondisi').append('<option value="PENUH" selected>PENUH</option><option value="SEDANG">SEDANG</option><option value="KOSONG">KOSONG</option>');
      } else if (data[0].kondisi == 'SEDANG') {
        $('#kondisi').append('<option value="PENUH">PENUH</option><option value="SEDANG" selected>SEDANG</option><option value="KOSONG">KOSONG</option>');
      } else {
        $('#kondisi').append('<option value="PENUH">PENUH</option><option value="SEDANG">SEDANG</option><option value="KOSONG" selected>KOSONG</option>');
      }


      for (var i = 0; i < data.length; i++) {
        $('#sensor'+data[i].id_sensor).attr('checked', true);
      }

      $('#editModal').modal('show');
    });
  });

  $('.hapus_btn').click(function() {
    var result = confirm("Apakah Anda Yakin ?");
    var id = $(this).data('id');
    if (result == true) {
      window.location = "<?php echo base_url() ?>/Alat/hapus/"+id;
    }
  });

  $('.editSensor_btn').click(function() {
    var id = $(this).data('id');
    $.get('<?php echo base_url(); ?>/Sensor/edit/'+id, function(resp) {
      var data = JSON.parse(resp);
      $('#id_sensor').val(data.id_sensor);
      $('#sensor').val(data.jenis_sensor);
      $('#editModalSensor').modal('show');
    });
  });

  $('.hapusSensor_btn').click(function() {
    var result = confirm("Apakah Anda Yakin ?");
    var id = $(this).data('id');
    if (result == true) {
      window.location = "<?php echo base_url() ?>/Sensor/hapus/"+id;
    }
  });

  $(".modal").on("hidden.bs.modal", function(){
    $('#id_alat').val("");
    $('#no_seri').val("");
    $('#nama_alat').val("");
    $('#penempatan').val("");
    $('#status').html("");
    $('#kondisi').attr('selected', false);
    $('.sensor').attr('checked', false);
    $('#id_sensor').val("");
    $('#sensor').val("");
  });

</script>
