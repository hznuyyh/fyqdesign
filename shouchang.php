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
 <div  id='shouye'>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="display: inline-block;width: 100%; text-align: center;text-decoration: none;color: white"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Collect</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
 <div id="content">  
   <div class="wrapper wrapper03" id="wrapper03" style="margin-top: 55px;">
      <div class="scroller">
        <ul class="clearfix">
          <li><a style="text-align:center;margin-left:-14px;" href="user.html">返回</a></li>
          <li><a style="text-align:center;margin-left:78px;">我的收藏</a></li>
        </ul>
      </div> 
   </div>
 </div>
  <?php include("connect.php"); ?>
    <div class="content">
            <?php
            header("content-type:text/html;charset=utf-8"); 
            session_start();
            include('function.php');
            $sql="set names utf8";
            mysqli_query($mysqli,$sql);
            $userid=$_SESSION['userid'];
            $results = $mysqli->query("SELECT collectnewsid FROM collect where userid=$userid");
            $a=0;
            while ($row = $results->fetch_array()) {
                // if($row['isuse']==1){}
                        $xid=$row['collectnewsid'];
                        //$sql1="select xname from xinshouread where xid=$xid";
                        $result= $mysqli->query("select xname from xinshouread where xid=$xid");
                        $row = $result->fetch_array();
                        echo "<div style='margin-top:20px;'>";
                        echo "<p style='margin-left:10px;font-size:15px;'>".$row['xname']."</p>";
                     echo "<HR align=center width=300 color=#F5F5F5 SIZE=1>";
                    $a++;  
        }
        $results->free();
        $mysqli->close();
         ?>
 

  
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script type="text/javascript" src="js/flexible.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/navbarscroll.js"></script>
    
 </body>
</html>
