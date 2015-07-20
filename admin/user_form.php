 
  <?php if ($aksi = 'tambah');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
    $sql = "select * from tb_user where id='$id'";
    $result = mysql_query($sql) or die(mysql_error());
    $user = mysql_fetch_object($result);
}
?>
                      <form  id='form1' method="POST"
                      action='admin/user_action.php'
                      class="form-horizontal" role="form"

                      >
                      <h2 style="text-align: center"> Form Data User</h2>
                      <input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">UserName</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="username" name='username'
      value='<?=$user->user?>'
       placeholder="Masukan Username">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="password" name='password'
      value='<?=$user->password?>'
       placeholder="Masukan Judul Buku ">
    </div>
 </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Level</label>
    <div class="col-sm-3">
      <input type="text" class="form-control required" id="level" name='level'
      value='<?=$user->level?>'
       placeholder="Masukan level ">
    </div>
 </div>

    


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
