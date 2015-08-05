<?php
function ubahFormattgl($tgl){
$pisah=explode('/', $tgl);
$urutan  = array($pisah[2],$pisah[1],$pisah[0]);
$satukan = implode('-', $urutan);
return $satukan;
}

session_start();

require_once ('../inc/config.php');


//data dari tb_absen

$no_induk = $_POST['no_induk'];
$kelas = $_POST['kelas'];
$bulan =$_POST['bulan'];
$tgl = $_POST ['tgl'];
$spp = $_POST ['spp'];
$boarding = $_POST ['boarding'];
$transport = $_POST['transport'];

$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];
$ubahTgl= ubahFormattgl($tgl);
if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_bulanan(spp, no_induk, kelas, bulan, boarding, tgl,transport)
		VALUES('$spp','$no_induk','$kelas','$bulan','$boarding','$tgl','$transport')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_bulanan set spp='$spp',no_induk='$no_induk',kelas='$kelas',bulan='$bulan',
	transport='$transport', boarding='$boarding',tgl='$tgl'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_bulanan where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=spp_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=spp_view&status=1');
}
?>
