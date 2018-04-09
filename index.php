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
        <a class="navbar-brand" href="#" style="display: inline-block;width: 100%; text-align: center;text-decoration: none;color: white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首页</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
 <div id="content">  
   <div class="wrapper wrapper03" id="wrapper03" style="margin-top: 55px;">
      <div class="scroller">
        <ul class="clearfix" style="margin-left:-30px;">
          <li><a href="javascript:void(0)"  onclick="test('xinshou')">新手必读</a></li>
          <li><a href="javascript:void(0)"  onclick="test('yinshi')">饮食运动</a></li>
          <li><a href="javascript:void(0)"  onclick="test('yaoshan')">中医药膳</a></li>
          <li><a href="javascript:void(0)"  onclick="test('yixue')">医学前沿</a></li>
          <li><a href="javascript:void(0)"  onclick="test('jianyi')">中医干预建议</a></li>
          <li><a href="javascript:void(0)"  onclick="test('binfa')">并发症</a></li>
          <li><a href="javascript:void(0)"  onclick="test('huati')">今日话题</a></li>
          <li><a href="javascript:void(0)" id="yinshi" onclick="test(2)">中医干预建议</a></li>
        </ul>
      </div> 
   </div>
   <div class="device-width" style="width:100%;height:100%">
      <iframe style="margin-top:30px;width: 100%;height:640px;" src="/htdocs/news.php" width=”100″ height=”30″ frameborder=”no” border=”0″ marginwidth=”0″ marginheight=”0″ scrolling=”no” allowtransparency=”yes” id='news'></iframe>
   </div>
 </div>

 </div>
 <!--  <div class="haha" id="haha" style="margin-top:25px;">

  </div> -->
 <!-- footer 底部菜单 -->
    <footer>
      <a href="javascript:;" class="pick">
        <i class="icon icon-f1"></i>
        首页
      </a>
      <a href="community.html">
        <i class="icon icon-f2"></i>
        糖友圈
      </a>
      <a href="user.html">
        <i class="icon icon-f3"></i>
        个人中心
      </a>
    </footer>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script type="text/javascript" src="js/flexible.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/navbarscroll.js"></script>
    <script type="text/javascript">
      $(function(){

    //demo示例一到四 通过lass调取，一句可以搞定，用于页面中可能有多个导航的情况
      $('.wrapper').navbarscroll();

      });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function test(value){
        switch(value){
          case 'xinshou':
            document.getElementById('news').src="news.php"
            break;
          case 'yinshi':
            document.getElementById('news').src="news.php"
            break;
          case 'yaoshan':
            document.getElementById('news').src="news.php"
            break;
          case 'yixue':
            document.getElementById('news').src="news.php"
            break;
          case 'jianyi':
            document.getElementById('news').src="news.php"
            break;
          case 'binfa':
            document.getElementById('news').src="news.php"
            break;
          case 'huati':
            document.getElementById('news').src="news.php"
              break;
        }
      }
    </script>
    <!-- <script type="text/javascript">
      function showIt(value)
      {
        console.log(value)
        if(value == 1) {
         $('#shouye').removeClass('hidden').addClass('show')
         $('#tangyouquan').removeClass('show').addClass('hidden')
          $('#geren').removeClass('show').addClass('hidden')
        } else if (value == 2 ) {
          $('#tangyouquan').removeClass('hidden').addClass('show')
         $('#shouye').removeClass('show').addClass('hidden')
          $('#geren').removeClass('show').addClass('hidden')
        } else {
            $('#geren').removeClass('hidden').addClass('show')
         $('#tangyouquan').removeClass('show').addClass('hidden')
          $('#shouye').removeClass('show').addClass('hidden')
        }
      }
    </script> -->
  </body>
</html>

