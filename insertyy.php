<?php  
/*   
    Author:冯银强
    BuildDate:2018-4-06
    Version:1.0
    Function:增加用户到数据库
*/
session_start(); ?>
<?php 
header("content-type:text/html;charset=utf-8");
// 连接数据库
 include("connect.php");
 
 include("function.php");
   
 //获取表单信息
 $userid=$_SESSION['userid'];
 $yytime=$_POST["yytime"];
 $yyname=$_POST["yyname"];
 $yycontent=$_POST["yycontent"];
//sql语句
  $sql ="insert into pharmacy(userid,yytime,yyname,yycontent) ";
  $sql.= "values('".$userid."','".$yytime."','".$yyname."','".$yycontent."')";
  $conn = $mysqli->query($sql);
 //跳转到登陆页
  if($conn){
   page_redirect(false,"yongyaofa.php","方案填写成功！");
  } else {
    page_redirect(true,"addyy.php","方案填写失败");
  }
?>
