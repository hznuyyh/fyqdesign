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
<div style="background-color:#00BBFF;height:42px;padding: 5px;"> 
        <a href="xuetang.php"><img src="images/arrow.png" class="img-responsive" width="25" height="25"></a>
        <h4 class="text-center" style="color:white;margin-top: -18px">血糖数据</h4>
 </div>
    <div class="content" style="margin-left: 40px;margin-top: 20px;">
            <?php
            session_start();
            include("connect.php"); 
            include('function.php');
            $sql="set names utf8";
            if(!empty($_SESSION['userid'])) {
                $userid=$_SESSION['userid'];
                mysqli_query($mysqli,$sql);
                $results = $mysqli->query("SELECT * FROM bloodsugar where userid = $userid;");
                $a=0;
                while ($row = $results->fetch_array()) {
                    // if($row['isuse']==1){}
                        echo "<div class='row newsItem'>";
                        echo "<p>早餐前：".$row['bmorning']."</p>";
                        echo "<p>早餐后：".$row['amorning']."</p>";
                        echo "<p>中餐前：".$row['bnoon']."</p>";
                        echo "<p>中餐后：".$row['anoon']."</p>";
                        echo "<p>晚餐前：".$row['bevening']."</p>";
                        echo "<p>晚餐后：".$row['aevening']."</p>";
                        echo "<HR align=center width=300 color=#F5F5F5 SIZE=1>";
                        echo "</div>";

                        $a++;  
                }     
            } else {
                    page_redirect(true,"login.html","请先登录");
            }
         
        $results->free();
        $mysqli->close();
         ?>
      </div>
  </body>
</html>