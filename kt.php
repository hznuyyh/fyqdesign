<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="panel">
      <!-- 顶栏 -->
      <div style="background-color:#00BBFF;height:42px;padding: 5px;"> 
        <a href="kongtang.php"><img src="images/arrow.png" class="img-responsive" width="25" height="25"></a>
        <h4 class="text-center" style="color:white;margin-top:-18px;font-size:16px;">控糖建议</h4>
      </div>
<?php
	header("content-type:text/html;charset=utf-8"); 
	session_start();
	include('function.php');
	include('connect.php');
 	$sql="set names utf8";
    mysqli_query($mysqli,$sql);
     $cureid=$_POST['cureid'];
   
    //  $results = $mysqli->query("select * from pinform where userid='".$userid."';");
    // $row=$results->fetch_array(); 
    $results = $mysqli->query("SELECT * FROM cure where cureid=$cureid");
    $a=0;
    while ($row = $results->fetch_array()) {
            echo "<div style='margin-top:20px;'>";
            echo "<p style='margin-left:29px;color:#ff9999'>药膳建议</p>";
            echo "<HR align=center width=300 color=#FF0000 SIZE=10>";
            echo "<p style='margin-left:29px;font-size:15px;'>".$row['curecontent']."</p>";

            echo "<p style='margin-left:29px;margin-top:20px;color:#ff9999'>运动建议</p>";
            echo "<HR align=center width=300 color=#FF0000 SIZE=10>";
            echo "<p style='margin-left:29px;font-size:15px;'>".$row['curesport']."</p>";

            echo "<p style='margin-left:29px;margin-top:20px;color:#ff9999'>饮食建议</p>";
            echo "<HR align=center width=300 color=#FF0000 SIZE=10>";
            echo "<p style='margin-left:29px;font-size:15px;'>".$row['cureeat']."</p>";
            echo "<HR align=center width=300 color=#F5F5F5 SIZE=1>";
            $a++;  
        }

$mysqli->close();
?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
     <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

