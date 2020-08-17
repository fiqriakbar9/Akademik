<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();

if(!isset($_SESSION['nim']))
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
            Rencana Studi
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Rencana Studi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Pengisian Rencana Studi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="simpan_krs.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
					  <?php
							$sql='select nim from data_mhs where nim="'.$_SESSION['nim'].'"';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?>
                      <label for="exampleInputEmail1">Nim</label>
                      <input type="email" class="form-control" name="nim" value="<?php echo $data['nim']; ?>" readonly>
							<?php } ?>
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Nama Matakuliah</label>
                     <select name="kd_matakuliah" id="select"  onchange='changeValue(this.value)' class="form-control">
						  <option disabled selected> Pilih </option>
						 <?php 
															 $result = mysqli_query($koneksi, "select * from matakuliah");  
															 $jsArray = "var prdName = new Array();\n";
															 while ($row = mysqli_fetch_array($result)) {  
															 echo '<option name="kd_matakuliah"  value="' . $row['kd_matakuliah'] . '">' . $row['nama_matakuliah'] . '</option>';  
															 $jsArray .= "prdName['" . $row['kd_matakuliah'] . "'] = {semester:'" . addslashes($row['semester'])."'};\n";
															  }
						 ?>
						  </select>
                    </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Semester</label>
                      <input type="email" class="form-control" name="semester" id="semester" readonly>
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
	
		<script>
	<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('semester').value = prdName[id].semester;
};
</script>

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