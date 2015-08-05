<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_tahun
$id_ajaran = $_POST['id_ajaran'];
$tahun_ajaran = $_POST['tahun_ajaran'];



$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_tahun(id_ajaran, tahun_ajaran)
		VALUES('$id_ajaran','$tahun_ajaran')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_tahun set id_ajaran='$id_ajaran',tahun_ajaran='$tahun_ajaran
    where id_ajaran='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_tahun where id_ajaran='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=tahun_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=tahun_view&status=1');
}
?>
