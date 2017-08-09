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
$name=$_REQUEST['fname'];
$parts=explode(" ",$name);
$last_name=array_pop($parts);
$first_name=implode(" ",$parts);
$follower_name=$first_name;
$link=mysqli_connect("localhost","root","","Professor_db");
if($follower_name!=NULL){
	$qry="insert into ".$follower_id."_".$follower_name."(follower_name,follower_id,seen_unseen) values('$user','$user_id','u')";
	$resultset=mysqli_query($link,$qry);
	if($resultset){
	echo "<script> alert('successfully followed the professor.'); </script>";
	echo "<script> location.replace('st_search.php'); </script>";
	}
	else{
	echo "some error occured";
	}
}
	else{
		$qry="insert into ".$follower_id."_".$name."(follower_name,follower_id,seen_unseen) values('$user','$user_id','u')";
		$resultset=mysqli_query($link,$qry);
		if($resultset){
		echo "<script> alert('successfully followed the professor.'); </script>";
		echo "<script> location.replace('st_search.php'); </script>";
		}
		else{
		echo "some error occured";
		}
	}
?>