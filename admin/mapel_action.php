<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_mapel
$id_mapel = $_POST['id_mapel'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$kategori = $_POST['kategori'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_mapel(id_mapel, mata_pelajaran, kategori)
		VALUES('$id_mapel','$mata_pelajaran','$kategori')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_mapel set id_mapel='$id_mapel',mata_pelajaran='$mata_pelajaran',kategori='$kategori'
    where id_mapel='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_mapel where id_mapel='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=mapel_view&status=0');
} else {
	header('location:../index.php?m=admin&p=mapel_view&status=1');
}
?>
