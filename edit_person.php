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
    <?php 
    header("content_type:text/html;charset=utf-8");
    session_start();
    ?>
      <div style="background-color:#00BBFF;height:42px;padding: 8px;"> 
        <a href="user.html"><img src="images/arrow.png" class="img-responsive" width="25" height="25"></a>
        <h4 class="text-center" style="color:white;margin-top:-18px">基本资料</h4>
      </div>
      

    <div class="container" style="background-color:#F7F7F7">
      <div class="content">
          <?php 
            include("connect.php");
            $sql="set names utf8";
            mysqli_query($mysqli,$sql);
            $userid=$_SESSION['userid'];
            $results = $mysqli->query("select * from pinform where userid='".$userid."';");
            $row=$results->fetch_array();    
            //$id=$row['userid'];
          ?>
          <form action="editperson.php" method="POST" class="form" ><!--与数据库链接-->
          <ul >
            <label><p><input type="hidden"  id="id" name="userid"  value="<?php echo $row["userid"]?>"></p></label>
            <li style="margin-top:0px;margin-left:36px;">
              <div class="form-group">
            <img src="images/pname.png" style="margin-left: -35px;"> 
            <input type="name" style="width:200px;margin-top: -30px;" class="form-control" id="pname" placeholder="姓名" name="pname" value="<?php echo $row["pname"]?>">
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                <img src="images/pheight.png" style="margin-left: -35px;">
                <input type="height" class="form-control" style="width:200px;margin-top: -30px;" id="pheight" placeholder="身高" name="pheight" value="<?php echo $row["pheight"]?>">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                <img src="images/pweight.png" style="margin-left: -35px;">
                 <input type="weight" class="form-control" style="width:200px;margin-top: -30px;" id="weight" placeholder="体重"  name="pweight" value="<?php echo $row["pweight"]?>">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                 <img src="images/pnumber.png" style="margin-left: -35px;">
                 <input type="numebr" class="form-control" style="width:200px;margin-top: -30px;" id="phonenumber" placeholder="手机号"  name="pnumber" value="<?php echo $row["pnumber"]?>"></
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                  <img src="images/page.png" style="margin-left: -35px;">
                 <input type="age" class="form-control" style="width:200px;margin-top: -30px;"  id="age" placeholder="年龄" name="page" value="<?php echo $row["page"]?>">
              </div>  
            </li>
             <li style="margin-left:36px;">  
              <div class="form-group">
                 <img src="images/pother.png" style="margin-left: -35px;">
                 <input type="other" class="form-control" style="width:200px;margin-top: -30px;"  id="other" placeholder="并发症" name="pother" value="<?php echo $row["pother"]?>">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                 <img src="images/pused.png" style="margin-left: -35px;">
                 <input type="other" class="form-control" style="width:200px;margin-top: -30px;" id="other" placeholder="确诊年份" name="pused" value="<?php echo $row["pused"]?>">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                 <img src="images/pcure.png" style="margin-left: -35px;">
                 <input type="cure" class="form-control" style="width:200px;margin-top: -30px;" id="cure" placeholder="治疗方式" name="pcure" value="<?php echo $row["pcure"]?>">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                 <img src="images/prelate.png" style="margin-left: -35px;">
                 <input type="cure" class="form-control" style="width:200px;margin-top: -30px;" id="cure" placeholder="与患者关系" name="prelate" value="<?php echo $row["prelate"]?>">
              </div>  
            </li>
            </ul>
          <br/>
            <div class="form-group" style="margin-left: 120px;">
                      <button type="submit" class="btn btn-primary" style="width: 100px;">保存</button>
            </div>
           <br/>
           <br/>
       </form>
     </div>
    </div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    </script>
  </body>
</html>
