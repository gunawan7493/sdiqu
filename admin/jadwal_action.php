<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_jadwal
$id_kelas = $_POST['id_kelas'];
$id_guru = $_POST['id_guru'];
$id_mapel = $_POST['id_mapel'];
$hari =$_POST['hari'];
$jam = $_POST ['jam'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_jadwal(id_kelas, id_guru, id_mapel, hari, jam)
		VALUES('$id_kelas','$id_guru','$id_mapel','$hari','$jam')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_jadwal set id_kelas='$id_kelas',id_guru='$id_guru',id_mapel='$id_mapel',hari='$hari',jam='$jam'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_jadwal where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=jadwal_view&status=0');
} else {
	header('location:../index.php?m=admin&p=jadwal_view&status=1');
}
?>
