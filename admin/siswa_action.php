<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_siswa
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$lahir = $_POST['lahir'];
$tgl =$_POST['tgl'];
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];

$nama_ayah =$_POST['nama_ayah'];
$nama_ibu =$_POST['nama_ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];


$angkatan = $_POST['angkatan'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tgl_masuk =$_POST['tgl_masuk'];
$no_telp_wali = $_POST['no_telp_wali'];
$gol_darah = $_POST['gol_darah'];
$nama_wali=$_POST['nama_wali'];

$alamat_wali=$_POST['alamat_wali'];
$anak_ke=$_POST['anak_ke'];
$status_anak=$_POST['status_anak'];
$di_kelas=$_POST['di_kelas'];
$nm_sek_asal=$_POST['nm_sek_asal'];
$almt_sek_asal=$_POST['almt_sek_asal'];
$almt_ortu=$_POST['almt_ortu'];
$telp_ortu=$_POST['telp_ortu'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

$foto=$_FILES['foto']['name'];
	$sql = "INSERT INTO tb_siswa(nis, nama, lahir, tgl, alamat, no_telp, nm_ayah, nm_ibu, pekerjaan_ayah,pekerjaan_ibu, kelas, email,
		foto, angkatan, jk, agama, tgl_masuk, no_telp_wali, gol_darah, nama_wali, alamat_wali, anak_ke, status_anak, di_kelas,
		nm_sek_asal, almt_sek_asal,almt_ortu, telp_ortu)

		VALUES('$nis', '$nama', '$lahir', '$tgl', '$alamat', '$telp', '$nama_ayah', '$nama_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu',
			'$kelas', '$email', '$foto', '$angkatan', '$jk', '$agama', '$tgl_masuk', '$no_telp_wali', '$gol_darah', '$nama_wali',
			'$alamat_wali', '$anak_ke', '$status_anak', '$di_kelas', '$nm_sek_asal', '$almt_sek_asal', '$almt_ortu', '$telp_ortu')";
} 

	else if ($aksi == 'edit') {
		$foto=$_FILES['foto']['name'];
	$sql = "update tb_siswa set nis='$nis',
			nama='$nama',
			lahir='$lahir',
			tgl='$tgl',
			alamat='$alamat',
			no_telp='$telp',
			nm_ayah='$nama_ayah',
			nm_ibu='$nama_ibu',
			pekerjaan_ayah='$pekerjaan_ayah',
			pekerjaan_ibu='$pekerjaan_ibu',
			kelas='$kelas', email='$email',
			foto='$foto',
			angkatan='$angkatan',
			jk='$jk', 
			agama='$agama', 
			tgl_masuk='$tgl_masuk',
			no_telp_wali='$no_telp_wali',
			gol_darah=$gol_darah,
			nama_wali='$nama_wali',
			alamat_wali='$alamat_wali',
			anak_ke='$anak_ke',
			status_anak='$status_anak',
			di_kelas=$di_kelas,
			nm_sek_asal='$nm_sek_asal',
			almt_sek_asal='$almt_sek_asal',
			almt_ortu='almt_ortu',
			telp_ortu='$telp_ortu'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_siswa where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());
//pindah ke folder
move_uploaded_file($_FILES['foto']['tmp_name'], "../admin/gambar/".$_FILES['foto']['name']);

//check if query successful
if ($result) {
	header('location:../menu.php?m=admin&p=siswa_view&status=0');
} else {
	header('location:../menu.php?m=admin&p=siswa_view&status=1');
}
?>
