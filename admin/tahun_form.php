 
  <?php error_reporting(0); if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_tahun where id_ajaran='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $tahun = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/tahun_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data tahun Ajaran</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tahun Ajaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tahun_ajaran" name='tahun_ajaran'
      value='<?=$tahun->tahun_ajaran?>'
       placeholder="Masukan Tahun Ajaran ">
    </div>
 </div>

    

   


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
