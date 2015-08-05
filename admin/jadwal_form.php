 
  <?php error_reporting(0); if ($aksi = 'tambah');

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
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-1">     
      <?php
    include './inc/config.php';
    
    $sql = mysql_query("select * from tb_kelas");
    echo '<select name="id_kelas" class="form-control required">';
      while($kelas = mysql_fetch_array($sql)){
echo '<option value="'.$kelas['id_kelas'].'">'.$kelas['kelas'].'</option>';
}
echo '</select>';
     ?>
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
    <label for="inputEmail3" class="col-sm-3 control-label">Mata Pelajaran</label>
    <div class="col-sm-2">     
      <?php
    include './inc/config.php';
    
    $sql = mysql_query("select * from tb_mapel");
    echo '<select name="id_mapel" class="form-control required">';
      while($mapel = mysql_fetch_array($sql)){
echo '<option value="'.$mapel['id_mapel'].'">'.$mapel['mata_pelajaran'].'</option>';
}
echo '</select>';
     ?>
</div>
</div>

<div>
    <label for="inputEmail3" class="col-sm-3 control-label">Hari</label>
    <div class="col-sm-2">
    
      <select name='hari' id='hari' class="form-control required">
        <option >Senin</option>
        <option>Selasa</option>
        <option>Rabu</option>
        <option>kamis</option>
        <option>Jum'at</option>
        <option >Sabtu</option>
        
                                          </select>
      
    </div>
 </div>
 <br>
<div>
    <label for="inputEmail3" class="col-sm-3 control-label">Hari</label>
    <div class="col-sm-2">
    
      <select name='jam' id='jam' class="form-control required">
        <option >08.00-09.15</option>
        <option>09.15-10.25</option>
        <option>10.45-11.55</option>
        <option>13.00-14.10</option>
        <option>14.10-15.00</option>

                                          </select>
      
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
