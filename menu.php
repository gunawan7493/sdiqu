<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['level']!="admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
   

    <title>SDIQu Al-Bahjah 03 Tulungagung</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="admin/development-bundle/themes/ui-lightness/ui.all.css">
	<style type='text/css'>
		body {
  padding-top: 50px;
}

.starter-template {
  padding: 40px 15px;
  text-align: left;

}
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}

	</style>
    <!-- Custom styles for this template -->
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>




    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo "Welcome ".$_SESSION['username']."";?> </a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="navbar-nav nav">
            <li class="active"><a href="menu.php">Home</a></li>
            
            <li class="dropdown">
           		<a href="#" data-toggle="dropdown" class="dropdown-toggle">Master Data <b class="caret"></b></a>
            	<ul class="dropdown-menu" id="menu1">
            		<li><a href="menu.php?m=admin&p=guru_view">Data Guru</a></li>
                    <li><a href="menu.php?m=admin&p=siswa_view">Data Siswa</a></li>
                    <li><a href="menu.php?m=admin&p=kelas_view">Data kelas</a></li>
            	</ul>
            </li>

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Akademik <b class="caret"></b></a>
                <ul class="dropdown-menu">
             		<li><a href="menu.php?m=admin&p=akademik_view">Data Akademik</a></li>
             		<li><a href="menu.php?m=admin&p=absen_view">Data Absen</a></li>

                </ul>
            </li>
          
			<li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Kurikulum <b class="caret"></b></a>
                <ul class="dropdown-menu">
             		<li><a href="menu.php?m=admin&p=tahun_view">Tahun Ajaran</a></li>
             		<li><a href="menu.php?m=admin&p=kurikulum_view">Daftar Kurikulum</a></li>
             		<li><a href="menu.php?m=admin&p=jadwal_view">Jadwal Pelajaran</a></li>
             		<li><a href="menu.php?m=admin&p=mapel_view">Daftar Pelajaran</a></li>
                </ul>
            </li>

          <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pembayaran <b class="caret"></b></a>
                <ul class="dropdown-menu">
             		<li><a href="menu.php?m=admin&p=spp_view">Data Bayaran SPP</a></li>
             		<li><a href="menu.php?m=admin&p=byr_lain_view">Data Pembayaran lain</a></li>
                </ul>
            </li>
			<li><a href="menu.php?m=admin&p=perpus_view">Buku Perpustakaan</a></li>
			<li><a href="menu.php?m=admin&p=user_view">Daftar User</a></li>
			<li><a href="log.php?op=out">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="jumbotron">


      <div class="well">
        <?php
                    
                    include('inc/config.php');
                    if (!isset($_GET['p'])) {
                        include ('./admin/home.php');
                    } else {
                    	 $modul = $_GET['m'];
                        $page = $_GET['p'];
                       
                        include $modul . '/' . $page . ".php";
                    }
					?>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>
    


    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="admin/development-bundle/jquery-1.8.0.min.js"></script>
<script src="admin/development-bundle/ui/ui.core.js"> </script>
<script src="admin/development-bundle/ui/ui.datepicker.js"></script>
<script src="admin/development-bundle/ui/i18n/ui.datepicker-id.js"></script>
 
 <script type="text/javascript">
 $(function() {
    $( "#tanggal" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
</script>

        <div class="panel-footer" style="text-align:center">&copy; Gunawan Indra Wijaya 2015 @11104410163 </div>
		
    </body>
</html>
