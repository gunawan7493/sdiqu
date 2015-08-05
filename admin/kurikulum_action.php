<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_kurikulum
$id_kurikulum = $_POST['id_kurikulum'];
$kelas = $_POST['kelas'];
$kurikulum = $_POST['kurikulum'];
$id_mapel =$_POST['id_mapel'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_kurikulum(id_kurikulum, kelas, kurikulum, id_mapel)
		VALUES('$id_kurikulum','$kelas','$kurikulum','$id_mapel')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_kurikulum set id_kurikulum='$id_kurikulum',kelas='$kelas',kurikulum='$kurikulum',id_mapel='$id_mapel'
    where id_kurikulum='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_kurikulum where id_kurikulum='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=kurikulum_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=kurikulum_view&status=1');
}
?>
