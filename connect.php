<?php 
$mysqli = new mysqli('localhost', 'root', '', 'web');
$sql="set names utf8";
$mysqli->query($sql);
if ($mysqli->connect_error) {
	die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
// } else {
// 	$sql = 'show tables;';
// 	$data = $mysqli->query($sql);
// 	var_dump($data);
// 	die;
}
?>