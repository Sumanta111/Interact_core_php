<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
        <link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="Sources/bootstrap-3.3.7-dist/css/bootstrap.css"/>
		<link  rel="stylesheet" href="Sources/font-awesome-4.7.0/css/font-awesome.css"/>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="script.js"></script>
		<script src="Sources/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	</head>
    <style>
    #rcorners1 {
    float: left;
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 80%;
    height: 20%; 
    text-align: left;   
}
#rcorners2 {
    float: right;
    border-radius: 25px;
    background: black;
    padding: 20px; 
    width: 10%;
    height: 20%; 
    text-align: center;
    color: white;
    cursor: pointer;
    
}
.text
{
    color: white;
    padding-top: 16px;
    padding-right: 6px;
}
.panel{
	margin: 0px auto;
	width: 700px;
	margin-top: 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
nav.navbar-webmaster { background: #1b242c;}
nav.navbar-webmaster a { color: #fff; }
nav.navbar-webmaster ul.navbar-nav a { color: #fff; border-style: solid; border-width: 2px 0 0 0; border-color:#1b242c; }
nav.navbar-webmaster ul.navbar-nav a:hover,
nav.navbar-webmaster ul.navbar-nav a:visited,
nav.navbar-webmaster ul.navbar-nav a:focus,
nav.navbar-webmaster ul.navbar-nav a:active { background:#3b4045; }
nav.navbar-webmaster ul.navbar-nav a:hover {border-color: #5fb000; }
nav.navbar-webmaster li.divider { background: #ccc; }
nav.navbar-webmaster button.navbar-toggle { background:  #1b242c; border-radius: 2px; }
nav.navbar-webmaster button.navbar-toggle:hover { background: #999; }
nav.navbar-webmaster button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-webmaster ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-webmaster ul.dropdown-menu > li > a { color: #444; }
nav.navbar-webmaster ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
nav.navbar-webmaster span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-webmaster span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }


</style>
	<body>
    <nav class="navbar navbar-webmaster">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="profile.php">Inta-Ract</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
				<form method="post">
     				 <li><button type="submit" name="logout" class="btn btn-primary" style="margin-top: 9px;"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</button>&nbsp;&nbsp;</li>
     		    </form>
<?php 
$user=$_SESSION['NAME'];
$session=session_id();
if(!isset($_SESSION['STID'])){
	session_destroy();
	echo "<script> location.replace('stud.php'); </script>";
}
else{
//	echo "welcome:".$_SESSION['NAME']."<br>";
//	echo "your session id is :".session_id();
}
if(isset($_POST['logout'])){
	session_destroy();
	 echo "<script> location.replace('stud.php'); </script>";
}
?>
    			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="text"><?php $name= $_SESSION['NAME']; echo "Hi! ".$name; ?><span class="sr-only"></span></li>
				 
				</ul>
		</div>
	</div>
</nav>
                        	<!--navbar end -->
                            
	</body>
</html>
<?php

$user=$_SESSION['NAME'];
$session=session_id();
if(!isset($_SESSION['UID'])){
	session_destroy();
	echo "please login first";
	header("location:prof_login.php");
}
else{
//	echo "welcome:".$_SESSION['NAME']."<br>";
//	echo "your session id is :".session_id();
}

echo "<center><h3><strong>Your Messages History</strong></h3></center>";
$sendto_id=$_REQUEST['sendtoid'];
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select name from reg where u_id='$sendto_id'";
$resultset2=mysqli_query($link,$qry);
while($row2=mysqli_fetch_row($resultset2)){
$sendfrom_id=$_SESSION['UID'];
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select messages from chat where send_from_id='$sendfrom_id' AND send_to_id='$sendto_id' ORDER BY message_id asc";
$resultset=mysqli_query($link,$qry);
$qry1="select messages from chat where send_from_id='$sendto_id' AND send_to_id='$sendfrom_id' ORDER BY message_id asc";
$resultset1=mysqli_query($link,$qry1);
while(($row=mysqli_fetch_row($resultset))  && ($row1=mysqli_fetch_row($resultset1))){
	echo '<div class="panel panel-success"><div class="panel-heading"><strong>'.$_SESSION["NAME"].'</strong></div><div class="panel-body">'.$row[0].'</div></div>';
		//echo "<strong>".$_SESSION['NAME']."</strong> : ";
		//echo $row[0]."<br>";
		echo '<div class="panel panel-info"><div class="panel-heading"><strong>'.$row2[0].'</strong></div><div class="panel-body">'.$row1[0].'</div></div>';
		//echo "<strong>".$row2[0]."</strong> : ";
		//echo $row1[0]."<br>";
	
}
}
?>