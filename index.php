<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>SDIQu Al-Bahjah 03 Tulungagung</title>

    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/jquery-1.11.0.js"></script>
<script type="text/javascript"> 
 $(document).ready(function() { 
  $(".text").val(''); 
  $("#username").focus(); 
 }); 
 function validasi(){ 
 var username = $("#username").val(); 
 var password = $("#password").val(); 
 if (username.length == 0){ 
  alert("Anda belum mengisikan Username."); 
  $("#username").focus(); 
  return false(); 
 }   
 if (password.length == 0){ 
  alert("Anda belum mengisikan Password."); 
  $("#password").focus(); 
  return false(); 
 } 
 return true(); 
 } 
</script> 
<style type="text/css"> 
.right { 
 float:right 
} 
button {margin: 0; padding: 0;} 
button {margin: 2px; position: relative; padding: 4px 4px 4px 2px; 
cursor: pointer; float: left; list-style: none;} 
button span.ui-icon {float: left; margin: 0 4px;} 
</style>
	</head>
		<body> <div class="row"> </div>
        		<div class="row"><h2 style="text-align:center"> Selamat Datang Di Sistem Informasi Sekolah</h2>
                					<h4 style="text-align:center"> SDIQu Al-Bahjah 03 Tulungagung</h4>
				<div class="col-lg-12">
                	<div class="col-lg-4"></div>
                    
                    <div class="col-lg-4">
                   	<div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="panel-title" style="text-align:center"><h4>Login User</h4></div></div>
                    <div class="panel-body"> 
                    	<form name="login" action="log.php?op=in" method="post" onSubmit="return validasi(this)">
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-7">
                          <input type="text" class="form-control required" name="userid" id="username" placeholder="Masukkan Username">                     </div>
                             </div>
                            <br>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-7">
                                  <input type="password" class="form-control required" name="psw" id="password" placeholder="Masukkan Password">
                                </div>
                             </div>
                            <br>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                  <button type="submit" name="submit" class="btn-primary" > Login </button>
                                  
                                </div>
                              </div>
                              
                    	</form>
                    </div>
                    </div>
                    </div>
                    
                </div>
                    <div class="col-lg-4"> </div>
                </div>



		</body>




	</html>