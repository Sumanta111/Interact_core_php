<?php session_start()?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="Sources/bootstrap-3.3.7-dist/css/bootstrap.css"/>
		<link  rel="stylesheet" href="Sources/font-awesome-4.7.0/css/font-awesome.css"/>
		<script src="jquery-1.10.1.min.js"></script>
		<script src="script.js"></script>
		<script src="Sources/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
		<script type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				req=new XMLHttpRequest();
				req.onreadystatechange=function(){
					if(req.readyState==4 && req.status==200){
						document.getElementById("online").innerHTML=req.responseText;
					}
				}
			req.open('GET','online.php',true);
			req.send();
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#online').load('online.php');},2000);	
			});
		</script>
	</head>
	<style>
	body {
	margin: 0px auto;
	font-family: "Raleway", Arial, sans-serif;
  	background: #ffffff;
}

/* Profile container */
.profile {
  margin: 20px 0; 
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
  height: 500px;
  box-shadow: 0 4px 10px 0 rgba(0,0,0,0.7), 0 4px 20px 0 rgba(0,0,0,0.20);
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 500px;
  box-shadow: 0 4px 10px 0 rgba(0,0,0,0.7), 0 4px 20px 0 rgba(0,0,0,0.20);
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

.text
{
    color: white;
    padding-top: 16px;
    padding-right: 6px;
}

	</style>
	<body>
	<!--navbar start -->
	
	<nav class="navbar navbar-webmaster">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Inta-Ract</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
				<form method="post">
     				 <li><button type="submit" name="logout" class="btn btn-primary" style="margin-top: 9px;"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</button></li>
     		    </form>
<?php 
$user=$_SESSION['NAME'];
$session=session_id();
if(!isset($_SESSION['UID'])){
	session_destroy();
	echo "<script> location.replace('prof.php'); </script>";
}
else{
//	echo "welcome:".$_SESSION['NAME']."<br>";
//	echo "your session id is :".session_id();
	$parts=explode(" ",$user);
	$last_name=array_pop($parts);
	$first_name=implode(" ",$parts);
	$link=mysqli_connect("localhost","root","","Professor_db");
	if($first_name!=NULL){
	$qry7='CREATE TABLE IF NOT EXISTS `'.$_SESSION['UID']."_".$first_name.'` (
			  follower_name varchar(100),
			  follower_id int(20),
			  seen_unseen varchar(10)
             )';
	$resultset=mysqli_query($link,$qry7);
	}
	else{
		$qry8='CREATE TABLE IF NOT EXISTS `'.$_SESSION['UID']."_".$user.'` (
			  follower_name varchar(100),
			  follower_id int(20),
			  seen_unseen varchar(10)
             )';
     	$resultset=mysqli_query($link,$qry8);
	}
}
if(isset($_POST['logout'])){
	$link=mysqli_connect("localhost","root","","Professor_db");
	$qry5="delete from online where username='$user' AND session='$session'";   //deleting online user session
	$resultset5=mysqli_query($link,$qry5);
	session_destroy();
	 echo "<script> location.replace('prof.php'); </script>";
}
?>
    			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><!--<a href="#">Profile<span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profile<span class="sr-only">(current)</span></a></li>-->
				<li><a href="sendnot.php">Notify!<span class="sr-only"></span></a></li>
				<li><a href="profile.php">My Profile<span class="sr-only"></span></a></li>
				<li class="text"><?php $name= $_SESSION['NAME']; echo "Hi! ".$name; ?><span class="sr-only"></span></a></li>
				</ul>
		</div>
	</div>
</nav>
	
	<!--navbar end-->
<!--body start-->
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="Images/default_guy.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['NAME']?>
					</div>
					<div class="profile-usertitle-job">
<?php
$ud=$_SESSION['UID'];
$qry12="select desg from reg where u_id='$ud'";
$resultset11=mysqli_query($link,$qry12);
while($row=mysqli_fetch_row($resultset11)){
	echo $row[0];
}
?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Followed By <?php
$follower_id=$_SESSION['UID'];
$name=$_SESSION['NAME'];
$parts=explode(" ",$name);
$last_name=array_pop($parts);
$first_name=implode(" ",$parts);
$follower_name=$first_name;
$link=mysqli_connect("localhost","root","","Professor_db");
if($follower_name!=NULL){
	$qry9="select follower_id from ".$follower_id."_".$follower_name;
	$resultset8=mysqli_query($link,$qry9);
	$count=mysqli_num_rows($resultset8);
	echo $count;
	
}
	else{
		$qry10="select follower_id from ".$follower_id."_".$name;
		$resultset9=mysqli_query($link,$qry10);
		$count=mysqli_num_rows($resultset9);
		echo $count;
		
	}
?> people</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="profile.php">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="sendnot.php">
							<i class="glyphicon glyphicon-user"></i>
							Send Notification </a>
						</li>
						<li class="active">
							<a href="stupl.php">
							<i class="glyphicon glyphicon-ok"></i>
							Upload for Students </a>
						</li>
						<li>
							<a href="prevmsg.php">
							<i class="glyphicon glyphicon-flag"></i>
							Message History </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
<h3>If you want to upload anything then click below</h3>
	<form method="post" enctype="multipart/form-data">
<table border="3px">
	<tr><td><input type="file" name="upfile"/></td></tr>
	<tr><td><input type="submit" name="up" value="Upload"/>
	</td></tr>
	<tr><td><input type="submit" name="info" value="File info"/></td></tr>
</table>
</form>
<?php
		if(isset($_POST['info'])){
			echo $_SERVER['DOCUMENT_ROOT']."<br>";
			echo "File Name=".$_FILES['upfile']['name']."<br>";
			echo "File Type=".$_FILES['upfile']['type']."<br>";
			echo "File Size=".$_FILES['upfile']['size']."<br>";
			echo "File Temp=".$_FILES['upfile']['tmp_name']."<br>";
			echo "File Error=".$_FILES['upfile']['error']."<br>";
		}
		if(isset($_POST['up'])){
			if($_FILES['upfile']['error']==0){
				$tmpname=$_FILES['upfile']['tmp_name'];
                                
                                 $name=$_SESSION['NAME'];
                                 $parts=explode(" ",$name);
                                 $last_name=array_pop($parts);
                                 $first_name=implode(" ",$parts);
                                 $link=mysqli_connect("localhost","root","","Professor_db");
                                 $qry11="select * from reg";
                                 $resultset10=mysqli_query($link,$qry11);
                                 while($row=mysqli_fetch_row($resultset10))
                                   {
                                         $new=explode(" ",$row[1]);
                                         $cmp=array_pop($new);
                                         if($last_name==$cmp)
                                         {
                                           $uid=$row[0];
                                         }
                                   }
                                  
                                 $new_name=$uid."_".$first_name."/";
				$tpath=$_SERVER['DOCUMENT_ROOT']."/modified/upload/".$new_name.$_FILES['upfile']['name'];
				if(move_uploaded_file($tmpname,$tpath)){
					echo "File uploaded successfully<br>";
					echo $tmpname."<br>";
					echo $tpath;
				}
				else{
					echo "File not uploaded!!!!";
				}
			}
		}
?>	
            </div>
		</div>
	</div>
</div>
<br>
<br>
<!--body end -->	
<div class="chat_box">
	<div class="chat_head"> Chat Box</div>
	<div class="chat_body" id="online"> 
	
	
	
	</div>
  </div>
	</body>
</html><?php

?>