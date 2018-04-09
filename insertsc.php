<?php
	header("content-type:text/html;charset=utf-8"); 
	session_start();
	include('function.php');
	include('connect.php');
 	$sql="set names utf8";
    mysqli_query($mysqli,$sql);
    $userid=$_SESSION['userid'];
     $xid=$_GET['xid'];
    mysqli_query($mysqli,$sql);
    //  $results = $mysqli->query("select * from pinform where userid='".$userid."';");
    // $row=$results->fetch_array(); 
    $sql2="INSERT INTO collect (collectid,userid,collectnewsid)VALUES ('','$userid','$xid')";
    if(!mysqli_query($mysqli,$sql2)) {  
      echo "<script type='text/javascript'>alert('收藏失败');</script>！";
	  echo "<script type='text/javascript'>window.location='index.php';</script>";
     }
else{
	echo "<script type='text/javascript'>alert('收藏成功');</script>！";
    echo "<script type='text/javascript'>window.location='xixi.html';</script>";
   }

$mysqli->close();
?>