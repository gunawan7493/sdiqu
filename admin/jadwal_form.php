 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_jadwal where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $jadwal = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/jadwal_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data jadwal</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_kelas" name='id_kelas'
      value='<?=$jadwal->id_kelas?>'
       placeholder="Masukan id_kelas siswa">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID Guru</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_guru" name='id_guru'
      value='<?=$jadwal->id_guru?>'
       placeholder="Masukan id_guru ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ID Mata Pelajaran</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_mapel" name='id_mapel'
      value='<?=$jadwal->id_mapel?>'
       placeholder="Masukan id_mapel ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Hari</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="hari" name='hari'
      value='<?=$jadwal->hari?>'
       placeholder="Masukan Hari ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Jam</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="jam" name='jam'
      value='<?=$jadwal->jam?>'
       placeholder="Masukan jam  ">
    </div>
 </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
