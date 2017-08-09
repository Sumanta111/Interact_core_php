<?php
session_start();
$user=$_SESSION['NAME'];
$session=session_id();
if(!isset($_SESSION['UID'])){
	session_destroy();
	echo "please login first";
	header("location:prof_login.php");
}
if(isset($_POST['msgsend'])){
	$id=$_SESSION['UID'];
	$msg=$_POST['msg'];
	$link=mysqli_connect("localhost","root","","Professor_db");
	$qry="insert into msg(messages,from_msg_id,from_msg_name,seen_unseen) values('$msg','$id','$user','u')";
	$resultset=mysqli_query($link,$qry);
	if($resultset){
		header("location:profile.php");
	}
	else{
		echo "some error occured";
	}
}
?>