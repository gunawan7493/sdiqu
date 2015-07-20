<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_absen
$pembayaran = $_POST['pembayaran'];
$deskripsi = $_POST['deskripsi'];
$total = $_POST['total'];
$tgl_start =$_POST['tgl_start'];
$tgl_akhir = $_POST ['tgl_akhir'];
$denda = $_POST ['denda'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_bayaran_lain(pembayaran,deskripsi, total, tgl_start,tgl_akhir, denda)
		VALUES('$pembayaran','$deskripsi','$total','$tgl_start','$tgl_akhir','$denda')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_bayaran_lain set pembayaran='$pembayaran',deskripsi='$deskripsi',total='$total',tgl_start='$tgl_start',
	tgl_akhir='$tgl_akhir',denda='$denda'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_bayaran_lain where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=byr_lain_view&status=0');
} else {
	header('location:../index.php?m=admin&p=byr_lain_view&status=1');
}
?>
