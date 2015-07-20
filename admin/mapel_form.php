 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_mapel where id_mapel='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $mapel = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/mapel_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data mapel</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID Mapel</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_mapel" name='id_mapel'
      value='<?=$mapel->id_mapel?>'
       placeholder="Masukan ID">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Mata Pelajaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="mata_pelajaran" name='mata_pelajaran'
      value='<?=$mapel->mata_pelajaran?>'
       placeholder="Masukan Nama Mapel ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="kategori" name='kategori'
      value='<?=$mapel->kategori?>'
       placeholder="Masukan kategori ">
    </div>
 </div>

   


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
