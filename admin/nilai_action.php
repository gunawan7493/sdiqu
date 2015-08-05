<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_absen
$nis = $_POST['nis'];
$id_mapel = $_POST['id_mapel'];
$uh1 = $_POST['uh1'];
$uh2 = $_POST['uh2'];
$uh3 = $_POST['uh3'];
$uts =$_POST['uts'];
$uas = $_POST ['uas'];
$rata = ($uh1+$uh2+$uh3+$uts+$uas)/5;
$lk = $_POST['kelas'];
$semester = $_POST['semester'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_nilai(nis,id_mapel, uh1, uh2, uh3, uts, uas, rata, id_kelas,semester)
		VALUES('$nis','$id_mapel','$uh1','$uh2','$uh3','$uts','$uas','$rata','$lk','$semester')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_nilai set nis='$nis',id_mapel='$id_mapel',uh1='$uh1',uts='$uts',
	uas='$uas',rata='$rata', id_kelas='$id_kelas', semester='$semester'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_nilai where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=nilai_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=nilai_view&status=1');
}
?>
