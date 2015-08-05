 
  <?php error_reporting(0); if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_absen where idabsen='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $absen = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/absen_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data Absen</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">NIS Siswa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nis" name='nis'
      value='<?=$absen->nis?>'
       placeholder="Masukan NIS siswa">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Sakit</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="sakit" name='sakit'
      value='<?=$absen->sakit?>'
       placeholder="Masukan Berapa kali sakit ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Ijin</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="ijin" name='ijin'
      value='<?=$absen->ijin?>'
       placeholder="Masukan Berapa kali ijin ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">alpa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="alpa" name='alpa'
      value='<?=$absen->alpa?>'
       placeholder="Masukan Berapa kali alpa ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
    <div class="col-sm-5">
      
      <textarea class="form-control required" id="keterangan" name='keterangan'
      value='<?=$absen->keterangan?>'
       placeholder="Masukan Keterangan untuk catatan " cols="45" rows="5"></textarea>
      
    </div>
 </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
