<?php
session_start();
$session=session_id();
$id=$_SESSION['UID'];
$time=time();
$user=$_SESSION['NAME'];
$time_check=$time-300;
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select * from online where session='$session'";
$resultset=mysqli_query($link,$qry);
$count=mysqli_num_rows($resultset);
if($count==0 && $session!=NULL){
	$qry2="insert into online(session,username,time,id) values('$session','$user','$time','$id')";
	$resultset2=mysqli_query($link,$qry2);
}
else{
	$qry3="update online set time='$time' where session='$session'";
	$resultset3=mysqli_query($link,$qry3);
}
$qry4="select username,id from online where session!='$session'";
$resultset4=mysqli_query($link,$qry4);
	while($row=mysqli_fetch_row($resultset4)){
			$query_string = 'id=' . urlencode($row[1]) . '&sendtoname=' . urlencode($row[0]);
			echo "<div class='user'><a href=message.php?".htmlentities($query_string).">".$row[0]."</a></div>";
	}

?>	