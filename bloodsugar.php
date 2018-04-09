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
 $bmorning=$_POST["bmorning"];
 $amorning=$_POST["amorning"];
 $bnoon=$_POST["bnoon"];
 $anoon=$_POST["anoon"];
 $bevening=$_POST["bevening"];
 $aevening=$_POST["aevening"];
//sql语句
  $sql ="insert into bloodsugar(bmorning,amorning,bnoon,anoon,bevening,aevening,userid) ";
  $sql.= "values('".$bmorning."','".$amorning."','".$bnoon."','".$anoon."','".$bevening."','".$aevening."','".$userid."')";
  
  $conn = $mysqli->query($sql);
 //跳转到登陆页
  if($conn){
   page_redirect(false,"xuetang.php","方案填写成功！");
  } else {
    page_redirect(true,"xuetang.php","方案填写失败");
  }
?>
