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
        <a class="navbar-brand" href="#" style="display: inline-block;width: 100%; text-align: center;text-decoration: none;color: white"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>控糖方案</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
 <div id="content">  
   <div class="wrapper wrapper03" id="wrapper03" style="margin-top: 55px;">
      <div class="scroller">
        <ul class="clearfix">
          <li><a style="text-align:center;margin-left:-14px;" href="user.html">返回</a></li>
        </ul>
      </div> 
   </div>
 </div>
 <form action="kt.php" method="POST"> 

        <h5 align="center">您的糖尿病中医分类是？</h5><br /> 
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="1" />阴虚燥热型上消</label><br><br><br>
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="2" />阴虚燥热型中消</label> <br><br><br>
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="3" />阴虚燥热型下消</label> <br><br><br>
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="4" />气阴两虚型</label> <br><br><br>
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="5" />淤血内阻型</label> <br><br><br>
        <label style="margin-left: 12px;"><input name="cureid" type="radio" value="6" />脾胃虚弱型</label> <br><br><br>
        <div class="form-group" style="margin-left: 120px;">
           <button type="submit" class="btn btn-primary" style="width: 100px;">保存</button>
        </div>
  </form> 
  
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script type="text/javascript" src="js/flexible.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/navbarscroll.js"></script>
    
 </body>
</html>