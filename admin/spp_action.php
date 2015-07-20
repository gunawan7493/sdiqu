<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_absen
$nama = $_POST['nama'];
$no_induk = $_POST['no_induk'];
$kelas = $_POST['kelas'];
$bulan =$_POST['bulan'];
$bayar = $_POST ['bayar'];
$tgl = $_POST ['tgl'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_bulanan(nama,no_induk, kelas, bulan, bayar, tgl)
		VALUES('$nama','$no_induk','$kelas','$bulan','$bayar','$tgl')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_bulanan set nama='$nama',no_induk='$no_induk',kelas='$kelas',bulan='$bulan',bayar='$bayar',tgl='$tgl'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_bulanan where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=spp_view&status=0');
} else {
	header('location:../index.php?m=admin&p=spp_view&status=1');
}
?>
