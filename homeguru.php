<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['level']!="guru"){
    die("Anda bukan guru");//jika bukan guru jangan lanjut
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


<?php echo "<h4>Welcome ".$_SESSION['username']."</h4>";?>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SDIQU Al-Bahjah 03 </a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="navbar-nav nav">
            <li class="active"><a href="homeguru.php">Home</a></li>
            <li ><a href="homeguru.php?m=guru&p=siswa_view">Data Siswa</a></li>
            <li ><a href="homeguru.php?m=guru&p=akademik_view">akademik</a></li>
            <li ><a href="homeguru.php?m=guru&p=Kelas_view">Kelas </a></li>
          	<li><a href="homeguru.php?m=guru&p=jadwal_view">Jadwal</a></li>
            <li ><a href= "homeguru.php?m=guru&p=nilai_view">nilai</a></li>
            <li ><a href= "homeguru.php?m=guru&p=kurikulum_view">kurikulum</a></li>
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
                        include ('./guru/home.php');
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

        <div class="panel-footer" style="text-align:center">&copy; Gunawan Indra Wijaya 2015 @11104410163 </div>
    </body>
</html>
