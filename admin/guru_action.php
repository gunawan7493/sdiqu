<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_guru
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$lahir = $_POST['lahir'];
$tgl =$_POST['tgl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['no_telp'];
$foto =$_POST['foto'];
$pelajaran = $_POST['pelajaran'];
$golongan = $_POST['golongan'];
$tgl_masuk =$_POST['tgl_masuk'];
$status = $_POST['status'];
$agama = $_POST['agama'];
$jk = $_POST['jk'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_guru(nama, nip, lahir, tgl, alamat, email, no_telp, foto, pelajaran, golongan, tgl_masuk, status, 
		agama,jk)
		VALUES('$nama','$nip','$lahir','$tgl','$alamat','$email','$telp','$foto','$pelajaran','$golongan','$tgl_masuk', '$status',
			'$agama', '$jk')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_guru set nama='$nama',nip='$nip',lahir='$lahir',tgl='$tgl',alamat='$alamat',email='$email',telp='$no_telp',
	foto='$foto', pelajaran='$pelajaran',golongan='$golongan',tgl_masuk='&tgl_masuk',status='$status',agama='$agama',jk='$jk')
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_guru where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=guru_view&status=0');
} else {
	header('location:../index.php?m=admin&p=guru_view&status=1');
}
?>
