<?php
session_start();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$passwd=sha1($_POST['passwd']);
	
	$link=mysqli_connect("localhost","root","","Professor_db");
	$qry="select u_id,name,email,password from reg where email='$email' and password='$passwd'";
	$resultset=mysqli_query($link,$qry);
	list($uid,$nm,$em,$pwd)=mysqli_fetch_row($resultset);
	$count=mysqli_num_rows($resultset);
	if($count>0){
		$_SESSION['UID']=$uid;
		$_SESSION['EMAIL']=$em;
		$_SESSION['NAME']=$nm;
		$_SESSION['loginTime']=time();
		header("location:profile.php");
	}
	else{
		echo "<script> alert('you are not autherized'); </script>";
		echo "<script> location.replace('prof.php'); </script>";
		}
}
?>