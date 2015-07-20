 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_kurikulum where id_kurikulum='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $kurikulum = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/kurikulum_action.php'
                      class="form-horizontal" role="form"
                      >
                      <h2 style="text-align: center"> Form Data Kurikulum</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID </label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="id_kurikulum" name='id_kurikulum'
      value='<?=$kurikulum->id_kurikulum?>'
       placeholder="Masukan ID Kurikulum">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="kelas" name='kelas'
      value='<?=$kurikulum->kelas?>'
       placeholder="Kelas">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">kurikulum</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="kurikulum" name='kurikulum'
      value='<?=$kurikulum->kurikulum?>'
       placeholder="Uraian kurikulum ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID Mapel</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="id_mapel" name='id_mapel'
      value='<?=$kurikulum->id_mapel?>'
       placeholder="Tanggal Akhir kurikulum">
    </div>
 </div>

   


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
