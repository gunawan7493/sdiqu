 
  <?php error_reporting(0); if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_nilai where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $nilai = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='guru/nilai_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data Nilai</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">No Induk Siswa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nis" name='nis'
      value='<?=$nilai->nis?>'
       placeholder="Masukan NIS">
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
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Ulangan Harian 1</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="uh1" name='uh1'
      value='<?=$nilai->uh1?>'
       placeholder="Masukan nilai">
    </div>
 </div>
 
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Ulangan Harian 2</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="uh2" name='uh2'
      value='<?=$nilai->uh2?>'
       placeholder="Masukan nilai">
    </div>
 </div>
 
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Ulangan Harian 3</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="uh3" name='uh3'
      value='<?=$nilai->uh3?>'
       placeholder="Masukan nilai">
    </div>
 </div>
 
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nilai UTS</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="uts" name='uts'
      value='<?=$nilai->uts?>'
       placeholder="Masukan Nilai UTS">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nilai UAS</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="uas" name='uas'
      value='<?=$nilai->uas?>'
       placeholder="Masukan Nilai UAS ">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-1">     
      <?php
	  include './inc/config.php';
	  
	  $sql = mysql_query("select * from tb_kelas");
	  echo '<select name="kelas" class="form-control required">';
      while($kelas = mysql_fetch_array($sql)){
echo '<option value="'.$kelas['id_kelas'].'">'.$kelas['kelas'].'</option>';
}
echo '</select>';
     ?>
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Semester</label>
    <div class="col-sm-2">
      
      
      <select name="semester" id="semester"  class="form-control required">
        <option>1</option>
        <option>2</option>
                  </select>
      
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
