<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();

if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

?>
<html>
 <?php include 'component/head.php'; ?>
 
  <body class="skin-blue">
    <div class="wrapper">
      
   <?php include 'component/header.php'; ?>
   
      <!-- Left side column. contains the logo and sidebar -->
   <?php include 'component/menu.php'; ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Mahasiswa
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Mahasiswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Data Mahasiswa</h3>
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
				 
                <div class="box-body table-responsive no-padding">
				  <span class="box-title">&nbsp Untuk menambah data mahasiswa klik <a href="input_mahasiswa.php">Disini!</a></span>
                  <table class="table table-hover">
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Jenjang</th>
                      <th>Semester</th>
                      <th>Email</th>
                      <th>Tempat lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Aksi</th>
                    </tr>
					 <?php
							$sql='select * from data_mhs,jurusan where data_mhs.kd_jurusan = jurusan.kd_jurusan';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?>
                    <tr>
                      <td><?php echo $data['nim']; ?></td>
                      <td><?php echo $data['nama_mahasiswa']; ?></td>
                      <td><?php echo $data['nama_jurusan']; ?></td>
                      <td><?php echo $data['jenjang']; ?></td>
                      <td><?php echo $data['semester']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['tempat_lahir']; ?></td>
                      <td><?php echo $data['tanggal_lahir']; ?></td>
                      <td><?php echo $data['jk']; ?></td>
                      <td><?php echo $data['agama']; ?></td>
                      <td><a href="edit_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Edit</a></td>
                    </tr>
							<?php }?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
		</section>
	  
	  </div>
      <?php include 'component/footer.php'; ?>
    </div><!-- ./wrapper -->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../model/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../model/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Sparkline -->
    <script src="../model/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="../model/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="../model/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="../model/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="../model/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="../model/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../model/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../model/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../model/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../model/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../model/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../model/dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../model/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>