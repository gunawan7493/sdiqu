 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
  
  <script src="development-bundle/jquery-1.8.0.min.js"></script>
<script src="development-bundle/ui/ui.core.js"> </script>
<script src="development-bundle/ui/ui.datepicker.js"></script>
<script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
  <script>
  $(function() {
    $( "#tanggal" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
</head>
  <?php error_reporting(0); if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_siswa where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $siswa = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST" 
                      action='admin/siswa_action.php' enctype="multipart/form-data" 
                      class="form-horizontal" role="form"

                      >

                      <h2 align="center"> FORM DATA SISWA</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nomor Induk</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nis" name='nis'
      value='<?=$siswa->nis?>'
       placeholder="No Induk siswa">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Siswa</label>
    <div class="col-sm-4">
      <input type="text" class="form-control required" id="nama" name='nama'
      value='<?=$siswa->nama?>'
       placeholder="Nama Siswa">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Lahir</label>
    <div class="col-sm-4">
      <input type="text" class="form-control required" id="lahir" name='lahir'
      value='<?=$siswa->lahir?>'
       placeholder="Tempat Lahir ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tanggal" name='tgl'
      value='<?=$siswa->tgl?>'
       placeholder="yyyy-mm-dd">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-4">
     
      <textarea class="form-control required" id="alamat" name='alamat'
      value='<?=$siswa->alamat?>'
       placeholder="Alamat" cols="45" rows="5"></textarea>
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">No Telepon</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="no_telp" name='no_telp'
      value='<?=$siswa->no_telp?>'
       placeholder="Masukan NO Hp">
    </div>
 </div>
   
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Ayah</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nm_ayah" name='nama_ayah'
      value='<?=$siswa->nm_ayah?>'
       placeholder="Nama Ayah">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Ibu</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nm_ibu" name='nama_ibu'
      value='<?=$siswa->nm_ibu?>'
       placeholder="Nama Ibu">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan Ayah</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="pekerjaan_ayah" name='pekerjaan_ayah'
      value='<?=$siswa->pekerjaan_ayah?>'
       placeholder="Pekerjaan Ayah">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan Ibu</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="pekerjaan_ibu" name='pekerjaan_ibu'
      value='<?=$siswa->pekerjaan_ibu?>'
       placeholder="Pekerjaan Ibu">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="kelas" name='kelas'
      value='<?=$siswa->kelas?>'
       placeholder="Kelas">
           </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="email" name='email'
      value='<?=$siswa->email?>'
       placeholder="email siswa">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Foto</label>
    <div class="col-sm-3">
      Upload Gambar (Ukuran Maks = 1 MB)
        <input type="file" name='foto' required />
</div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
    	<?php if ($siswa->jk=="L")
		{$l="checked"; $p="";}
		else{ $p="checked"; $l="";} 
		?>
       
      <input type="radio" name="jk" id="jk" value="L" <?php echo $l ?>>
      Laki-laki
      <input type="radio" name="jk" id="jk" value="P" <?php echo $p ?>>
      Perempuan
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Angkatan</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="angkatan" name='angkatan'
      value='<?=$siswa->angkatan?>'
       placeholder="Angkatan">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Agama</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="agama" name='agama'
      value='<?=$siswa->agama?>'
       placeholder="agama">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Masuk</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tanggal" name='tgl_masuk'
      value='<?=$siswa->tgl_masuk?>'
       placeholder="Tanggal Masuk">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">No Telpon Wali</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="no_telp_wali" name='no_telp_wali'
      value='<?=$siswa->no_telp_wali?>'
       placeholder="Nomor Telpon Wali">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Golongan Darah</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="gol_darah" name='gol_darah'
      value='<?=$siswa->gol_darah?>'
       placeholder="Golongan Darah">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Wali</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nama_wali" name='nama_wali'
      value='<?=$siswa->nama_wali?>'
       placeholder="nama_wali">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Alamat Wali</label>
    <div class="col-sm-4">
   
      <textarea class="form-control required" id="alamat_wali" name='alamat_wali'
      value='<?=$siswa->alamat_wali?>'
       placeholder="Alamat Wali" cols="45" rows="5"></textarea>
      
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Anak Ke-</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="anak_ke" name='anak_ke'
      value='<?=$siswa->anak_ke?>'
       placeholder="">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Status Anak</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="status_anak" name='status_anak'
      value='<?=$siswa->status_anak?>'
       placeholder="Status Anak">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Di Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="di_kelas" name='di_kelas'
      value='<?=$siswa->di_kelas?>'
       placeholder="Kelas">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Sekolah Asal</label>
    <div class="col-sm-4">
      <input type="text" class="form-control required" id="nm_sek_asal" name='nm_sek_asal'
      value='<?=$siswa->nm_sek_asal?>'
       placeholder="Sekolah Asal">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Alamat Sekolah Asal</label>
    <div class="col-sm-6">
      <input type="text" class="form-control required" id="almt_sek_asal" name='almt_sek_asal'
      value='<?=$siswa->almt_sek_asal?>'
       placeholder="Alamat Sekolah Asal">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Alamat Orang Tua</label>
    <div class="col-sm-4">
      
      <textarea class="form-control required" id="almt_ortu" name='almt_ortu'
      value='<?=$siswa->almt_ortu?>'
       placeholder="Alamat Orang Tua" cols="45" rows="5"></textarea>
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">No Telp Orang Tua</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="telp_ortu" name='telp_ortu'
      value='<?=$siswa->telp_ortu?>'
       placeholder="Telepon Orang Tua">
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>

