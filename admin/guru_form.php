 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_guru where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $guru = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/guru_action.php'
                      class="form-horizontal" role="form"

                      >
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Guru</label>
    <div class="col-sm-6">
      <input type="text" class="form-control required" id="nama" name='nama'
      value='<?=$guru->nama?>'
       placeholder="Nama Guru">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">NIP</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nip" name='nip'
      value='<?=$guru->nip?>'
       placeholder="NIP">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Lahir</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="lahir" name='lahir'
      value='<?=$guru->lahir?>'
       placeholder="Tempat Lahir lahir ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl" name='tgl'
      value='<?=$guru->tgl?>'
       placeholder="yyyy-mm-dd">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="alamat" name='alamat'
      value='<?=$guru->alamat?>'
       placeholder="Alamat">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-6">
      <input type="text" class="form-control required" id="email" name='email'
      value='<?=$guru->email?>'
       placeholder="aaaaa@yyyy.com">
    </div>
 </div>
   
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">NO Telpon/HP</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="no_telp" name='no_telp'
      value='<?=$guru->no_telp?>'
       placeholder="Nomor Telp/HP">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Foto</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="foto" name='foto'
      value='<?=$guru->foto?>'
       placeholder="">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Mata Pelajaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="pelajaran" name='pelajaran'
      value='<?=$guru->pelajaran?>'
       placeholder="Mata Pelajaran">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Golongan</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="foto" name='foto'
      value='<?=$guru->foto?>'
       placeholder="">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Masuk</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl_masuk" name='tgl_masuk'
      value='<?=$guru->tgl_masuk?>'
       placeholder="yyyy-mm-dd">
           </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="status" name='status'
      value='<?=$guru->status?>'
       placeholder="Status Guru">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Agama</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="agama" name='agama'
      value='<?=$guru->agama?>'
       placeholder="Agama">
    </div>
 </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
    	<?php if ($absen->jk=="L")
		{$l="checked"; $p="";}
		else{ $p="checked"; $l="";} 
		?>
       
      <input type="radio" name="jk" id="jk" value="L" <?php echo $l ?>>
      Laki-laki
      <input type="radio" name="jk" id="jk" value="P" <?php echo $p ?>>
      Perempuan
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>

