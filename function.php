<?php
 //页面重定向
function pageLocator($path){
	echo "<script>";
	echo "window.location='".$path."';";
	echo "</script>";
}
//页面重定向复合处理
 function page_redirect($back,$path,$info){
 	$str="<script>";
 	//输出提示信息，为空不输出
 	if(!empty($info))
 		$str.="alert('".$info."');";
 	//根据页面重定向类型，执行不同跳转
 	if($back)
 		//回退
 		$str.="window.history.back();";
 	else{
 		//重定向到指定页面
 		if(!empty($path))
 			$str.="window.location='".$path."';";
 	}
 	$str.="</script>";
 	echo $str;
 }
 ?>