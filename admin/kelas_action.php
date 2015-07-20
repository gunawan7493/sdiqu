<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_absen
$kelas = $_POST['kelas'];
$nama_ruang = $_POST['nama_ruang'];
$wali_kelas = $_POST['wali_kelas'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_kelas(kelas,nama_ruang, wali_kelas)
		VALUES('$kelas','$nama_ruang','$wali_kelas')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_kelas set kelas='$kelas',nama_ruang='$nama_ruang',wali_kelas='$wali_kelas'
    where id_kelas='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_kelas where id_kelas='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=kelas_view&status=0');
} else {
	header('location:../index.php?m=admin&p=kelas_view&status=1');
}
?>
