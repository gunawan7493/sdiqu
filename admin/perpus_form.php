 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_perpus where kd_buku='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $perpus = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/perpus_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data Buku Perpustakaan</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kode Buku</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="kd_buku" name='kd_buku'
      value='<?=$perpus->kd_buku?>'
       placeholder="Masukan Kode Buku">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Judul Buku</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="judul_buku" name='judul_buku'
      value='<?=$perpus->judul_buku?>'
       placeholder="Masukan Judul Buku ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Author</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="author" name='author'
      value='<?=$perpus->author?>'
       placeholder="Masukan Author ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ISBN</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="isbn" name='isbn'
      value='<?=$perpus->isbn?>'
       placeholder="Masukan ISBN ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Terbit</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl_terbit" name='tgl_terbit'
      value='<?=$perpus->tgl_terbit?>'
       placeholder="Masukan Tanggal Terbit ">
    </div>
 </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
