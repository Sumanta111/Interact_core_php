<?php
if(isset($_POST['register'])){
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$desg=$_POST['designation'];
	$work=$_POST['work'];
	$dept=$_POST['dept'];
	$address=$_POST['address'];
	$phno=$_POST['phno'];
	$passwd=sha1($_POST['passwd']);
    $x=1;
	
	$link=mysqli_connect("localhost","root","","professor_db");
	$qry1="insert into reg(name,dob,email,desg,work,dept,address,phno,password) values('$name','$dob','$email','$desg','$work','$dept','$address','$phno','$passwd')";
	$resultset1=mysqli_query($link,$qry1);
    $qry2="select * from reg";
   $resultset2=mysqli_query($link,$qry2);
       
 while($row=mysqli_fetch_row($resultset2))
      {
        if($email== $row[3])
         {
            $uid=$row[0];
         }
       }
$parts=explode(" ",$name);
$last_name=array_pop($parts);
 $first_name=implode(" ",$parts);
$newfolder=$uid."_".$first_name;
  if (!is_dir('c:/wamp/www/modified/upload/'.$newfolder)) 
    { 
          mkdir('c:/wamp/www/modified/upload/'.$newfolder);
    }
           
	if($resultset1){
		header("location:profile.php");
	}
	else{
		echo "sorry!something went wrong.try again";
	}
     
     
          
}

?>




