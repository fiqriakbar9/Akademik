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
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
            
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Selamat Datang </h3>
                </div><!-- /.box-header -->
				<hr>
                <div class="box-body">
                  <ul class="todo-list">
				  <p>Situs ini adalah situs untuk melakukan proses akademik di Universitas Komputer Indonesia (Unikom). Situs ini merupakan situs pengganti dari situs perwalian. Perubahan ini dilakukan karena harusnya sistem informasi di suatu perguruan tinggi mengikuti format pelaporan ke Direktorat Jenderal Pendidikan Tinggi (Dikti).</p>
				  
                  <p>Belum seluruh fitur dari situs perwalian yang lama yang telah terimplementasikan di dalam sistem baru ini. Oleh karena itu jika anda menemukan kesalahan data, error silahkan hubungi Divisi Academic Resource & Data Center atau melalui Student Admission.</p>
				   
				  <p>Fungsi aplikasi ini adalah : </p>

					<p>	1. Melihat profile masing-masing mahasiswa
					<p>	2. Melihat riwayat nilai
					<p>	3. Mengisi kartu rencana studi</p>
					
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  

            </div><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
           
			</div><!-- /.content-wrapper -->
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
   <!-- AdminLTE App -->
    <script src="../model/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../model/dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../model/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>