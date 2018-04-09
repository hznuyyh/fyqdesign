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
 $username=$_POST["user_name"];
 $pnumber=$_POST["phone_number"];
 $password=$_POST["password"];
 $confirm=$_POST["confirm_password"];
//sql语句
  $sql ="insert into user(username,pnumber,password) ";
  $sql.= "values('".$username."','".$pnumber."','".$password."')";
  $conn = $mysqli->query($sql);
 //跳转到登陆页
  if($conn){
   page_redirect(false,"login.html","注册成功！");
  } else {
    page_redirect(true,"","用户名已被注册");
  }
?>

