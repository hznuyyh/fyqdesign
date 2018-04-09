<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  <body>
   <?php include("connect.php"); ?>

    <div class="content">
       <?php
            include('function.php');
            $xid=$_GET['xid'];
              $sql="set names utf8";
            mysqli_query($mysqli,$sql);
            $results = $mysqli->query("SELECT * FROM xinshouread where xid =  $xid;");
            $row=$results->fetch_array();
            echo "<div>";
            echo "<div>";
            echo "<h style='font-size:15px;margin-left:13px;'>".$row['xname']."</h>";
            echo "</div>";
            echo "<h style='font-size:15px;margin-left:13px;color:#BEBEBE'>阅读：".$row['xread']."</h>"; 
            echo "<a style='margin-left:80px;margin-top:-21px;color:#BEBEBE'  href='insertsc.php?xid=".$row['xid']."'><img src='/htdocs/images/sc1.png' style='margin-left:20px;'/>收藏</a>";
            echo "<p style='font-size:15px;'>".$row['xcontent']."</p>";
            echo "</div>";
            $mysqli->close();
         ?>
      </div>
  </body>
</html>