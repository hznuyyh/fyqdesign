<?php 
header("Content-Type:text/html;charset=utf-8");
session_start();
include("connect.php");
 $sql="set names utf8";
 $userid=$_SESSION['userid'];
$pname=$_POST["pname"];
$page=$_POST["page"];
$pheight=$_POST["pheight"];
$pweight=$_POST["pweight"];
$pnumber=$_POST["pnumber"];
$pother=$_POST["pother"];
$pused=$_POST["pused"];
$pcure=$_POST["pcure"];
$prelate=$_POST["prelate"];
mysqli_query($mysqli,$sql);
$results = $mysqli->query("select * from pinform where userid='".$userid."';");
$row=$results->fetch_array(); 
$sql2="INSERT INTO pinform (userid)VALUES ('$userid')";
mysqli_query($mysqli,$sql2);
$sql1="UPDATE pinform set  pname='".$pname."',page='".$page."',pheight='".$pheight."',pweight='".$pweight."',pnumber='".$pnumber."',pother='".$pother."',pused='".$pused."',pcure='".$pcure."',prelate='".$prelate."' where userid=$userid";
if(!mysqli_query($mysqli,$sql1)) {
	//echo "<script type='text/javascript'>alert('保存失败');</script>！";
	echo "<script type='text/javascript'>window.location='edit_person.php';</script>";
}
else{
	echo "<script type='text/javascript'>alert('保存成功');</script>！";
    echo "<script type='text/javascript'>window.location='user.html';</script>";
   }
?>