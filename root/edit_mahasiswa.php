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
            Input Data Mahasiswa
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input Data Mahasiswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Input Data Mahasiswa</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="update_mahasiswa.php" method="post">
				 <?php
							$nim = $_GET['nim'];
							$query_mysqli = mysqli_query($koneksi,"select * from data_mhs,jurusan WHERE data_mhs.kd_jurusan=jurusan.kd_jurusan AND nim='$nim' ")or die(mysqli_error($koneksi));
							while($data = mysqli_fetch_array($query_mysqli)){
								
				?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIM</label>
                      <input type="text" class="form-control" name="nim" value="<?php echo $data['nim']; ?>">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jurusan</label>
                      <select name="kd_jurusan" id="select"  class="form-control">
						  <option value="<?php echo $data['kd_jurusan']; ?>"><?php echo $data['nama_jurusan']; ?></option>
						 <?php 
															 $result = mysqli_query($koneksi, "select * from jurusan");  
															 $jsArray = "var prdName = new Array();\n";
															 while ($row = mysqli_fetch_array($result)) {  
															 echo '<option name="kd_jurusan"  value="' . $row['kd_jurusan'] . '">' . $row['nama_jurusan'] . '</option>'; 
															  }
						 ?>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jenjang</label>
                      <select name="jenjang" id="select"  class="form-control">
						  <option value="<?php echo $data['jenjang']; ?>"> <?php echo $data['jenjang']; ?> </option>
						  <option value="D3"> D1 </option>
						  <option value="S1"> S1 </option>
						  <option value="S2"> S2 </option>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Semester</label>
                       <select name="semester" id="select"  class="form-control">
						  <option value="<?php echo $data['semester']; ?>"><?php echo $data['semester']; ?></option>
						  <option value="I"> I </option>
						  <option value="II"> II </option>
						  <option value="III"> III </option>
						  <option value="IV"> IV </option>
						  <option value="V"> V </option>
						  <option value="VI"> VI </option>
						  <option value="VII"> VII </option>
						  <option value="VIII"> VIII </option>
						  <option value="IX"> IX </option>
						  <option value="X"> X </option>
						  <option value="XI"> XI </option>
						  <option value="XII"> XII </option>
						  </select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jk" value="<?php echo $data['jk']; ?>" Readonly>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <input type="text" class="form-control" name="agama" value="<?php echo $data['agama']; ?>">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
					  <small> (Sebagai password login anda)</small>
                      <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" >
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="update" name="update" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
							<?php } ?>

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