<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_akademik
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kegiatan = $_POST['kegiatan'];
$tgl_akhir =$_POST['tgl_akhir'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_akademik(nama, tgl, kegiatan, tgl_akhir)
		VALUES('$nama','$tgl','$kegiatan','$tgl_akhir')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_akademik set nama='$nama',tgl='$tgl',kegiatan='$kegiatan',tgl_akhir='$tgl_akhir'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_akademik where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=akademik_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=akademik_view&status=1');
}
?>
