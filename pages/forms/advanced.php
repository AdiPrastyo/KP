<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php include "../../component/title.php"; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!--Add style CSS-->
    <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../dist/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- jQuery 2.2.3 -->
<!-- <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
$imgAdmin="../../dist/img/user2-160x160.jpg";
$general="../../pages/forms/general.php";
$advanced="../../pages/forms/advanced.php";
$editor="../../pages/forms/editor.php";
$index="../../index.php";
$s="active";
$b="active";
include "../../component/header.php";


  /*<!-- Left side column. contains the logo and sidebar -->*/
  include "../../component/sidebar.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Masukkan Data Magang
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Magang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Example Nama 1 -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nama Anggota 1</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama1" class="form-control" placeholder="Masukkan Nama Lengkap">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>NIM</label>
                 <input type="text" name="nim1" class="form-control" placeholder="Masukkan NIM">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Jurusan/Prodi</label>
                 <input type="text" name="jur1" class="form-control" placeholder="Masukkan Nama Jurusan/Prodi">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Fakultas</label>
                 <input type="text" name="fakultas1" class="form-control" placeholder="Masukkan Nama Fakultas">
              </div>
              
              <div class="form-group">
                <label>Institusi/Universitas</label>
                <input type="text" name="inst1" class="form-control" placeholder="Masukkan Nama Institusi/Universitas">
              </div>
               <!-- /.form-group -->
               <div class="form-group">
                <label>Email</label>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email1" class="form-control" placeholder="Email">
              </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
               <label for="exampleInputFile">Upload Tanda Pengenal/KTP</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="ktp1" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Tanda Pengenal/KTP harus dalam ekstensi jpg, jpeg, atau png.
            </span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>Capture Foto Magang</label>
              <div class="content2">
    <video id="video" autoplay></video>
  <button id="snap">Capture</button>
    <button id="new">New</button>
  <canvas id="canvas" width="600" height="460"></canvas>
    <button id="upload" style="display:none;">Upload</button>
</div>
</div>
  <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                <label>No.HP</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no1" placeholder="Masukkan Nomer Handphone" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label>Alamat Di Semarang</label>
                  <textarea class="form-control" name="al_smg1" rows="2" placeholder="Masukkan Alamat Di Semarang"></textarea>
                </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label>Nama Orangtua</label>
                  <input text="text" class="form-control" name="ortu1" placeholder="Masukkan Nama Orangtua">
              </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat Orangtua</label>
                  <textarea class="form-control" name="al_ortu1" rows="2" placeholder="Masukkan Alamat Orangtua"></textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>No. Telp Orangtua</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no_ortu1" placeholder="Masukkan Nomer Handphone/Telepon Orangtua" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Untuk Mengisi Kelengkapan Magang Kelompok atau Tim, Pilih/Pindah ke Kolom<a href="#berkas"> Berkas Magang Tim</a></div>
      </div>
      <!-- /.box -->

<!-- Example Nama 2 -->
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Nama Anggota 2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display:none;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama2" class="form-control" placeholder="Masukkan Nama Lengkap">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>NIM</label>
                 <input type="text" name="nim2" class="form-control" placeholder="Masukkan NIM">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Jurusan/Prodi</label>
                 <input type="text" name="jur2" class="form-control" placeholder="Masukkan Nama Jurusan/Prodi">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Fakultas</label>
                 <input type="text" name="fakultas2" class="form-control" placeholder="Masukkan Nama Fakultas">
              </div>
              
              <div class="form-group">
                <label>Institusi/Universitas</label>
                <input type="text" name="inst2" class="form-control" placeholder="Masukkan Nama Institusi/Universitas">
              </div>
               <!-- /.form-group -->
               <div class="form-group">
                <label>Email</label>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email2" class="form-control" placeholder="Email">
              </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
               <label for="exampleInputFile">Upload Tanda Pengenal/KTP</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="ktp2" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Tanda Pengenal/KTP harus dalam ekstensi jpg, jpeg, atau png.
            </span>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                <label>No.HP</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no2" placeholder="Masukkan Nomer Handphone" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label>Alamat Di Semarang</label>
                  <textarea class="form-control" name="al_smg2" rows="2" placeholder="Masukkan Alamat Di Semarang"></textarea>
                </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label>Nama Orangtua</label>
                  <input text="text" class="form-control" name="ortu2" placeholder="Masukkan Nama Orangtua">
              </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat Orangtua</label>
                  <textarea class="form-control" name="al_ortu2" rows="2" placeholder="Masukkan Alamat Orangtua"></textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>No. Telp Orangtua</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no_ortu2" placeholder="Masukkan Nomer Handphone/Telepon Orangtua" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer" style="display:none;">
          Untuk Mengisi Kelengkapan Magang Kelompok atau Tim, Pilih/Pindah ke Kolom<a href="#berkas"> Berkas Magang Tim</a></div>
      </div>
      <!-- /.box -->

<!-- Example Nama 3 -->
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Nama Anggota 3</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display:none">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama3" class="form-control" placeholder="Masukkan Nama Lengkap">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>NIM</label>
                 <input type="text" name="nim3" class="form-control" placeholder="Masukkan NIM">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Jurusan/Prodi</label>
                 <input type="text" name="jur3" class="form-control" placeholder="Masukkan Nama Jurusan/Prodi">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Fakultas</label>
                 <input type="text" name="fakultas3" class="form-control" placeholder="Masukkan Nama Fakultas">
              </div>
              
              <div class="form-group">
                <label>Institusi/Universitas</label>
                <input type="text" name="inst3" class="form-control" placeholder="Masukkan Nama Institusi/Universitas">
              </div>
               <!-- /.form-group -->
               <div class="form-group">
                <label>Email</label>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email3" class="form-control" placeholder="Email">
              </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
               <label for="exampleInputFile">Upload Tanda Pengenal/KTP</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="ktp3" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Tanda Pengenal/KTP harus dalam ekstensi jpg, jpeg, atau png.
            </span>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                <label>No.HP</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no3" placeholder="Masukkan Nomer Handphone" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label>Alamat Di Semarang</label>
                  <textarea class="form-control" name="al_smg3" rows="2" placeholder="Masukkan Alamat Di Semarang"></textarea>
                </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label>Nama Orangtua</label>
                  <input text="text" class="form-control" name="ortu3" placeholder="Masukkan Nama Orangtua">
              </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat Orangtua</label>
                  <textarea class="form-control" name="al_ortu3" rows="2" placeholder="Masukkan Alamat Orangtua"></textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>No. Telp Orangtua</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no_ortu3" placeholder="Masukkan Nomer Handphone/Telepon Orangtua" class="form-control" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer" style="display:none;">
          Untuk Mengisi Kelengkapan Magang Kelompok atau Tim, Pilih/Pindah ke Kolom<a href="#berkas"> Berkas Magang Tim</a></div>
      </div>
      <!-- /.box -->

    <!-- Example Berkas Magang-->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 id="berkas" class="box-title">Data dan Berkas Magang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <label for="exampleInputFile">Upload Surat Permohonan</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="permohonan" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Surat Permohonan bisa dalam ekstensi doc, docx, pdf ataupun jpg, jpeg, png.
            </span>
                </div>
                <!-- /.form-group -->
              <div class="form-group">
               <label for="exampleInputFile">Upload Proposal</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="proposal" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Surat Proposal bisa dalam ekstensi docx, doc, pdf.
            </span>
                </div>
                <!-- /.form-group -->
              <div class="form-group">
               <label for="exampleInputFile">Upload Berkas lainnya</label>
<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="lainnya" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Upload Berkas lainnya bisa dalam ekstensi doc, docx, pdf ataupun jpg, jpeg, png.
            </span>
                </div>
                <!-- /.form-group -->
               <div class="form-group">
                <label>Departemen Magang</label>
                <input type="text" name="departemen" class="form-control" placeholder="Masukkan Nama Departemen">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                <label>PIC Departemen</label>
                <input type="text" name="pic" class="form-control" placeholder="Masukkan PIC Departemen">
              </div>
              <!-- /.form-group -->
            <div class="form-group">
                <label>NIK Departemen</label>
                <input type="text" name="nik_dept" class="form-control" placeholder="Masukkan NIK Departemen">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Mulai Magang:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="start" class="form-control pull-right" id="datepicker">
                </div>
                </div>
                 <!-- /.form-group -->
              <div class="form-group">
                <label>Berhenti Magang:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="end" class="form-control pull-right" id="datepicker2">
                </div>
               </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php
  include "../../component/footer.php";
  //<!-- Control Sidebar -->
    include "../../component/control-sidebar.php";
  ?>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../dist/js/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!--Validator FORM-->
<script src="../../dist/js/validator.js"></script>
<!-- Page script -->
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
 $('#datepicker2').datepicker({
      autoclose: true
    });

     // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });

  });

// Put event listeners into place
    window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap").addEventListener("click", function() {
        context.drawImage(video, 0, 0, 600, 460);
        // Littel effects
        $('#video').fadeOut('slow');
        $('#canvas').fadeIn('slow');
        $('#snap').hide();
        $('#new').show();
        // Allso show upload button
        $('#upload').hide();
      });
      
      // Capture New Photo
      document.getElementById("new").addEventListener("click", function() {
        $('#video').fadeIn('slow');
        $('#canvas').fadeOut('slow');
        $('#snap').show();
        $('#new').hide();
        $('#upload').hide();
      });

      // Upload image to sever 
      document.getElementById("upload").addEventListener("click", function(){
        var dataUrl = canvas.toDataURL();

        $.ajax({
          type: "POST",
          url: "insert.php",
          data: { 
           imgBase64: dataUrl, 
           name:$('#nama').val()
          }
        }).done(function(msg) {
          console.log('saved');
         // Do Any thing you want
        });
      });
    }, false);

</script>
</body>
</html>
