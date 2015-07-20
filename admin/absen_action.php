<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_absen
$nis = $_POST['nis'];
$sakit = $_POST['sakit'];
$ijin = $_POST['ijin'];
$alpa =$_POST['alpa'];
$ket = $_POST ['keterangan'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_absen(nis, sakit, ijin, alpa, keterangan)
		VALUES('$nis','$sakit','$ijin','$alpa','$ket')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_absen set nis='$nis',sakit='$sakit',ijin='$ijin',alpa='$alpa',keterangan='$ket'
    where idabsen='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_absen where idabsen='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=absen_view&status=0');
} else {
	header('location:../index.php?m=admin&p=absen_view&status=1');
}
?>
