<?php
if(isset($_POST['register'])){
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$uniroll=$_POST['urollno'];
	$crollno=$_POST['clgrollno'];
	$address=$_POST['address'];
	$phno=$_POST['phno'];
	$passwd=$_POST['passwd'];

	$link=mysqli_connect("localhost","root","","professor_db");
	$qry="insert into streg(name,dob,email,branch,year,unirollno,crollno,address,phno,password) values('$name','$dob','$email','$branch','$year','$uniroll','$crollno','$address','$phno','$passwd')";
	$resultset=mysqli_query($link,$qry);
	if($resultset){
		echo "<script> alert('Registration Successfull!!.Please login'); </script>";
		echo "<script> location.replace('stud.php'); </script>";
	}
	else{
		echo "sorry!something went wrong.try again";
	}
}
?>
