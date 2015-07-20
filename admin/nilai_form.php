 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_nilai where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $nilai = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/nilai_action.php'
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
    <label for="inputEmail3" class="col-sm-3 control-label">ID Mata Pelajaran</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_mapel" name='id_mapel'
      value='<?=$nilai->id_mapel?>'
       placeholder="Id Mata Pelajaran">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tugas</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="tugas" name='tugas'
      value='<?=$nilai->tugas?>'
       placeholder="Masukan nilai tugas">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nilai UTS</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="uts" name='uts'
      value='<?=$nilai->uts?>'
       placeholder="Masukan Nilai UTS">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nilai UAS</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="uas" name='uas'
      value='<?=$nilai->uas?>'
       placeholder="Masukan Nilai UAS ">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nilai Rata-Rata</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="rata" name='rata'
      value='<?=$nilai->rata?>'
       placeholder="Masukan Nilai Rata-rata ">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="id_kelas" name='id_kelas'
      value='<?=$nilai->id_kelas?>'
       placeholder="Masukan ID Kelas">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Semester</label>
    <div class="col-sm-1">
      <input type="text" class="form-control required" id="semester" name='semester'
      value='<?=$nilai->semester?>'
       placeholder="Masukan semester ">
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
