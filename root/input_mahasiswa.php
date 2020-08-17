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
                <form role="form" action="simpan_mahasiswa.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIM</label>
                      <input type="text" class="form-control" name="nim">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama_mahasiswa">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Jurusan</label>
                      <select name="kd_jurusan" id="select"  class="form-control">
						  <option disabled selected> Pilih </option>
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
						  <option disabled selected> Pilih </option>
						  <option value="D3"> D1 </option>
						  <option value="S1"> S1 </option>
						  <option value="S2"> S2 </option>
						  </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Semester</label>
                       <select name="semester" id="select"  class="form-control">
						  <option disabled selected> Pilih </option>
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
                      <input type="text" class="form-control" name="email">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
					  <small> (Sebagai password login anda)</small>
                      <input type="text" class="form-control" name="password" >
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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