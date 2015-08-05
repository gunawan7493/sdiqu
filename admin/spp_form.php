 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
  
  <script src="development-bundle/jquery-1.8.0.min.js"></script>
<script src="development-bundle/ui/ui.core.js"> </script>
<script src="development-bundle/ui/ui.datepicker.js"></script>
<script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
  <script>
  $(function() {
    $( "#tanggal" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
</head>
  <?php error_reporting(0); if ($aksi = 'tambah');

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
    <label for="inputEmail3" class="col-sm-3 control-label">Bulan</label>
    <div class="col-sm-2">
    
      <select name='bulan' id='bulan' class="form-control required">
        <option >Juli</option>
        <option>Agustus</option>
        <option>September</option>
        <option>Oktober</option>
        <option>Nopember</option>
        <option >Desember</option>
        <option >Januari</option>
        <option >Pebruari</option>
        <option >Maret</option>
        <option >April</option>
        <option >Mei</option>
        <option >Juni</option>
                                          </select>
      
    </div>
 </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Pembyaran</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id='tanggal' name='tgl'
      value='<?=$bulanan->tgl?>'
       placeholder="Masukan Tanggal ">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Bayar SPP</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="spp" name='spp'
      value='<?=$bulanan->spp?>'
       placeholder="Masukan Jumlah ">
    </div>
 </div>
 
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Bayar Boarding (jika boarding) </label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="boarding" name='boarding'
      value='<?=$bulanan->boarding?>'
       placeholder="Masukan Jumlah ">
    </div>
 </div>
 
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Bayar Transport (jika Ikut) </label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="transport" name='transport'
      value='<?=$bulanan->transport?>'
       placeholder="Masukan Jumlah ">
    </div>
 </div>



  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
