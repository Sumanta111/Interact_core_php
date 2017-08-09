<?php
session_start();
$user=$_SESSION['NAME'];
$session=session_id();
$user_id=$_SESSION['STID'];

if(!isset($_SESSION['STID'])){
	session_destroy();
	echo "please login first";
	header("location:stud.php");
}
$follower_id=$_REQUEST['id'];
//echo $follower_id;
$name=$_REQUEST['fname'];
$parts=explode(" ",$name);
$last_name=array_pop($parts);
$first_name=implode(" ",$parts);
$follower_name=$first_name;
//echo $follower_name;
$link=mysqli_connect("localhost","root","","Professor_db");
	$qry="delete from ".$follower_id."_".$follower_name." where follower_id='$user_id'";
	$resultset=mysqli_query($link,$qry);
	
$user=$_SESSION['NAME'];
$session=session_id();
$user_id=$_SESSION['STID'];
if(!isset($_SESSION['STID'])){
	session_destroy();
	echo "please login first";
	header("location:stud.php");
}
$follower_id=$_REQUEST['id'];
$name=$_REQUEST['fname'];
$parts=explode(" ",$name);
$last_name=array_pop($parts);
$first_name=implode(" ",$parts);
$follower_name=$first_name;
$link=mysqli_connect("localhost","root","","Professor_db");
if($follower_name!=NULL){
	$qry="delete from ".$follower_id."_".$follower_name." where follower_id='$user_id'";
	$resultset=mysqli_query($link,$qry);
	echo "<script> alert('successfully unfollowed the professor.'); </script>";
		echo "<script> location.replace('st_search.php'); </script>";
}
	else{
		$qry="delete from ".$follower_id."_".$name." where follower_id='$user_id'";
		$resultset=mysqli_query($link,$qry);
		echo "<script> alert('successfully unfollowed the professor.'); </script>";
		echo "<script> location.replace('st_search.php'); </script>";
	}
?>