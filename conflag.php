<?php
$conflag = mysqli_connect('localhost','root','');
if($conflag){
	//echo "<script>alert('connected successfully');</script>";
}else{
	//echo "<script>alert('connection failed');</script>";
}

$db = mysqli_select_db($conflag, 'webphp');
if($db){
	//echo "<script>alert('database selected successfully');</script>";
}else{
	//echo "<script>alert('No database found');</script>",
	mysqli_error($conflag);
}
?> 