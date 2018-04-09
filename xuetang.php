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
      <div style="background-color:#00BBFF;height:35px;padding: 8px;"> 
        <a href="user.html"><img src="images/arrow.png" class="img-responsive" width="20" height="20"></a>
        <h4 class="text-center" style="color:white;margin-top:-18px">血糖数据</h4>
      </div>
      <div style="background-color:#FFFFFF;height: 25px;">
            <a style="margin-left:280px;" href='bsshow.php'>查看记录</a>
      </div>
      

    <div class="container" style="background-color:#F7F7F7">
      <div class="content">
          <form action="bloodsugar.php" method="POST" class="form" ><!--与数据库链接-->
          <ul style="margin-top: 30px;" >
            <li style="margin-top:0px;margin-left:36px;">
              <div class="form-group">
             <label for="name">早餐前</label>
            <input type="bmorning" style="width:200px;" class="form-control" id="bmorning" placeholder="早餐前" name="bmorning">
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
               <label for="name">早餐后</label>
                <input type="amorning" class="form-control" style="width:200px;" id="amorning" placeholder="早餐后" name="amorning">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
               <label for="name">中餐前</label>
                 <input type="bnoon" class="form-control" style="width:200px;" id="bnoon" placeholder="中餐前"  name="bnoon" >
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
                 <label for="name">中餐后</label>
                 <input type="anoon" class="form-control" style="width:200px;" id="anoon" placeholder="中餐后"  name="anoon">
              </div>  
            </li>
            <li style="margin-left:36px;">  
              <div class="form-group">
               
               <label for="name">晚餐前</label>
                 <input type="bevening" class="form-control" style="width:200px;"  id="bevening" placeholder="晚餐前" name="bevening">
              </div>  
            </li>
             <li style="margin-left:36px;">  
              <div class="form-group">
               <label for="name">晚餐后</label>
                 <input type="aevening" class="form-control" style="width:200px;"  id="aevening" placeholder="晚餐后" name="aevening" >
              </div>  
            </li>
            </ul>
          <br/>
            <div class="form-group" style="margin-left: 120px;">
                      <button type="submit" class="btn btn-primary" style="width: 100px;">提交</button>
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
