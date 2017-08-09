<?php
session_start();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$passwd=$_POST['passwd'];
	
	$link=mysqli_connect("localhost","root","","Professor_db");
	$qry="select st_id,name,email,password from streg where email='$email' and password='$passwd'";
	$resultset=mysqli_query($link,$qry);
	list($stid,$nm,$em,$pwd)=mysqli_fetch_row($resultset);
	$count=mysqli_num_rows($resultset);
	if($count>0){
		$_SESSION['STID']=$stid;
		$_SESSION['EMAIL']=$em;
		$_SESSION['NAME']=$nm;
		$_SESSION['loginTime']=time();
		header("location:st_search.php");
	}
	else{
		echo "<script> alert('you are not autherized'); </script>";
		echo "<script> location.replace('stud.php'); </script>";
		}
}
?>