<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_perpus
$kd_buku = $_POST['kd_buku'];
$judul_buku = $_POST['judul_buku'];
$author = $_POST['author'];
$isbn =$_POST['isbn'];
$tgl_terbit = $_POST ['tgl_terbit'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_perpus(kd_buku, judul_buku, author, isbn, tgl_terbit)
		VALUES('$kd_buku','$judul_buku','$author','$isbn','$tgl_terbit')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_perpus set kd_buku='$kd_buku',judul_buku='$judul_buku',author='$author',isbn='$isbn',tgl_terbit='$tgl_terbit'
    where kd_buku='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_perpus where kd_buku='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=perpus_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=perpus_view&status=1');
}
?>
