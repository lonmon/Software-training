<?php
	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','root') or die('can not connect server!'); 
	mysql_select_db('rencai');
    mysql_query("set names 'utf8'");
   


$Gyear = $_POST['Gyear'];
$Gzhuanye = $_POST['Gzhuanye'];
$Gxueli = $_POST['Gxueli'];
$Gemail= $_POST['Gemail'];
$Gtel = $_POST['Gtel'];
$Gpassword = $_POST['Gpassword'];
$Gsex = $_POST['Gsex'];


session_start();
$user=$_SESSION['user'];

$exec="update geren set Gpassword = '$Gpassword',Gsex='$Gsex',Gyear='$Gyear',Gtel='$Gtel',Gemail='$Gemail',Gxueli='$Gxueli',Gzhuanye='$Gzhuanye' where Gname='$user'";

$result=mysql_query($exec);
if($result) 
    echo " <script>alert('修改成功！请重新登录！');location.href='index.php'; </script>";
else echo "<script>alert('出现故障！请重新修改！');location.href='update 2.0.php'; </script>";

?>

