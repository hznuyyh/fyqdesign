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
            $sql="set names utf8";
            mysqli_query($mysqli,$sql);
            $results = $mysqli->query("SELECT * FROM xinshouread");
            $a=0;
            while ($row = $results->fetch_array()) {
                // if($row['isuse']==1){}
                    echo "<div class='row newsItem'>";
                    echo "<div class='left-context  col-sm-2 col-xs-4' style='padding-left:25px;'>";
                    echo "<image src='".$row['ximage']."' style='width:100px; height:75px; border-radius:8px; '></image>";
                    echo " </div>";
                    echo "<div class='right-context col-sm-10 col-xs-8'>";
                    echo "<a href='content.php?xid=".$row['xid']."'>" . $row['xname'] . "</a>";
                    echo "<div class='row' style='margin-top:36px;'>";
                    echo "<div class='col-xs-7'>";
                    echo "<p style='color:#BEBEBE;font-size:9px;padding-left:15px;'>来源:" . $row['xauthor'] . "<p>";
                    echo "</div>";
                    echo "<div class='col-xs-5'>";
                    echo "<span class='glyphicon glyphicon-book' style='color:#BEBEBE;font-size:9px;'> " . $row['xread'] . "</span> ";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<HR align=center width=300 color=#F5F5F5 SIZE=1>";
                    $a++;  
        }
        $results->free();
        $mysqli->close();
         ?>
      </div>
  </body>
</html>

  