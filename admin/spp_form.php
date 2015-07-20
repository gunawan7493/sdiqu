 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_bulanan where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $bulanan = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/spp_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data Pembayaran bulanan</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Pembayaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nama" name='nama'
      value='<?=$bulanan->nama?>'
       placeholder="Masukan Nama Pembayaran">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">No Induk Siswa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="no_induk" name='no_induk'
      value='<?=$bulanan->no_induk?>'
       placeholder="Masukan No Induk Siswa ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="kelas" name='kelas'
      value='<?=$bulanan->kelas?>'
       placeholder="Masukan Kelas ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Bulan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="bulan" name='bulan'
      value='<?=$bulanan->bulan?>'
       placeholder="Masukan Bulan ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Bayar</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="bayar" name='bayar'
      value='<?=$bulanan->bayar?>'
       placeholder="Masukan Jumlah ">
    </div>
 </div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Pembyaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="tgl" name='tgl'
      value='<?=$bulanan->tgl?>'
       placeholder="Masukan Tanggal ">
    </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
