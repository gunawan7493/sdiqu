 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_bayaran_lain where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $bayaran_lain = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/byr_lain_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data Pembayaran</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Pembayaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="pembayaran" name='pembayaran'
      value='<?=$bayaran_lain->pembayaran?>'
       placeholder="Masukan Nama Pembayaran">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Deskripsi</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="deskripsi" name='deskripsi'
      value='<?=$bayaran_lain->deskripsi?>'
       placeholder="Deskripsi Pembayaran ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Total</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="total" name='total'
      value='<?=$bayaran_lain->total?>'
       placeholder="Masukan total">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Awal</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl_start" name='tgl_start'
      value='<?=$bayaran_lain->tgl_start?>'
       placeholder="Masukan Tanggal">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Berakhir</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl_akhir" name='tgl_akhir'
      value='<?=$bayaran_lain->tgl_akhir?>'
       placeholder="Masukan Tanggal ">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Denda</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="denda" name='denda'
      value='<?=$bayaran_lain->denda?>'
       placeholder="Masukan Denda ">
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
