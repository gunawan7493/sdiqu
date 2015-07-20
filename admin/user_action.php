<?php

session_start();

require_once ('../inc/config.php');


//data dari tb_user
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


$aksi = mysql_real_escape_string($_REQUEST['aksi']);

$id = $_REQUEST['id'];

if ($aksi == 'tambah') {

	$sql = "INSERT INTO tb_user(username, password, level)
		VALUES('$username','$password','$level')";
} 

	else if ($aksi == 'edit') {
	$sql = "update tb_user set username='$username',password='$password',level='$level'
    where id='$id'";
} 

	else if ($aksi == 'hapus') {
	$sql = "delete from tb_user where id='$id'";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?m=admin&p=user_view&status=0');
} else {
	header('location:../index.php?m=admin&p=user_view&status=1');
}
?>
