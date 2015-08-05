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
    $( "#tanggala" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  

  </script>
  
</head> 

  <?php 
  error_reporting(0);
  if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_akademik where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $akademik = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/akademik_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 align="center" > FORM DATA AKADEMIK </h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kegiatan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="nama" name='nama'
      value='<?=$akademik->nama?>'
       placeholder="Judul Kegiatan">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Kegiatan</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="tanggal" name='tgl'
      value='<?=$akademik->tgl?>'
       placeholder="Tanggal Kegiatan ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Kegiatan</label>
    <div class="col-sm-5">
      
      <textarea class="form-control required" id="kegiatan" name='kegiatan'
      value='<?=$akademik->kegiatan?>'
       placeholder="Uraian kegiatan " cols="45" rows="5"></textarea>
      
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Akhir</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required" id="tanggal" name='tgl_akhir'
      value='<?=$akademik->tgl_akhir?>'
       placeholder="Tanggal Kegiatan ">
    </div>
 </div>
   


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
