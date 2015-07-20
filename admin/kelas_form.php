 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_kelas where id_kelas='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $kelas = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/kelas_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data kelas</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="kelas" name='kelas'
      value='<?=$kelas->kelas?>'
       placeholder="Masukan Kelas">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Ruangan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nama_ruang" name='nama_ruang'
      value='<?=$kelas->nama_ruang?>'
       placeholder="Nama Ruangan">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Wali Kelas</label>
    <div class="col-sm-4">
      <input type="text" class="form-control required" id="wali_kelas" name='wali_kelas'
      value='<?=$kelas->wali_kelas?>'
       placeholder="Masukan kelas wali_kelas">
    </div>
 </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
