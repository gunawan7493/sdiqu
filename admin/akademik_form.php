 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_akademik where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $akademik = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/akademik_action.php'
                      class="form-horizontal" role="form"

                      >
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kegiatan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nama" name='nama'
      value='<?=$akademik->nama?>'
       placeholder="Judul Kegiatan">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Kegiatan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl" name='tgl'
      value='<?=$akademik->tgl?>'
       placeholder="Tanggal Kegiatan ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kegiatan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="kegiatan" name='kegiatan'
      value='<?=$akademik->kegiatan?>'
       placeholder="Uraian kegiatan ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal akhir</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl_akhir" name='tgl_akhir'
      value='<?=$akademik->tgl_akhir?>'
       placeholder="Tanggal Akhir Kegiatan">
    </div>
 </div>

   


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
