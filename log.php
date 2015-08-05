<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("ab_sdiqu");//sesuaikan dengan nama database anda

$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM tb_user WHERE username='$userid' AND password='$psw'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:menu.php");
        }else if($c['level']=="guru"){
            header("location:homeguru.php");
        }
    }else{
         die("<script> 
 alert('Sekarang loginnya tidak bisa di injeksi lho.'); 
 window.location.href='index.php'; 
</script>");
    }
}else if($op=="out"){
    unset($_SESSION['userid']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>
