<?php
session_start();
$sendto_id=$_REQUEST['id'];
$sendfrom_id=$_SESSION['UID'];

define('foo',$sendto_id);
define('foo1',$sendfrom_id);
?>
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
  height: 500px;
  overflow: auto;
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


@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
*, *:before, *:after {
  box-sizing: border-box;
}
.chat .chat-history {
  width: 800px;
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 5px;
  margin-bottom: 30px;
  width: 50%;
  position: relative;
}
.chat .chat-history .message:after {
	content: "";
    position: absolute;
    top: -15px;
    left: 20px;
    border-width: 0 15px 15px;
    border-style: solid;
    border-color: #CCDBDC transparent;
    display: block;
    width: 0;
}
.chat .chat-history .you-message {
  background: #CCDBDC;
  color:#003366;
}
.chat .chat-history .me-message {
  background: #E9724C;
}
.chat .chat-history .me-message:after {
  border-color: #E9724C transparent;
    right: 20px;
    top: -15px;
    left: auto;
    bottom:auto;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}

.chat-ul li{
    list-style-type: none;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.you {
  color: #CCDBDC;
}

.me {
  color: #E9724C;
}

h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway",sans-serif;
    color: #003366;
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
				<li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profile<span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profile<span class="sr-only"></span></a></li>
				<li><a href="#">Profile<span class="sr-only"></span></a></li>
				<li><a href="#">Profile<span class="sr-only"></span></a></li>
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
						<li class="active">
							<a href="profile.php">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="sendnot.php">
							<i class="glyphicon glyphicon-user"></i>
							Send Notification </a>
						</li>
						<li>
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
<?php
$sendto_id=$_REQUEST['id'];
//echo "send to id:".$sendto_id."<br>";
$sendfrom_id=$_SESSION['UID'];
//echo "send from id:".$sendfrom_id."<br>";
?>
<form method="post">
<h4>Enter a message to send</h4>
<textarea name="msg"></textarea><br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_POST['submit'])){
	$msg=$_POST['msg'];
	$sesname=$_REQUEST['sendtoname'];
	$link=mysqli_connect("localhost","root","","Professor_db");
	$qry="insert into chat(send_from_id,send_to_id,messages,send_to_name) values('$sendfrom_id','$sendto_id','$msg','$sesname')";
	$resultset=mysqli_query($link,$qry);
	if($resultset){
		echo "message successfully delevered";
	}
}
?>	
<div class="container clearfix">
    <div class="chat">   
      <div class="chat-history">
        <ul class="chat-ul">
          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle you"></i><?php echo $_REQUEST['sendtoname']; ?></span>
            </div>
<div id="msg1">
<?php
$link=mysqli_connect("localhost","root","","Professor_db");
$qry14="select messages from chat where send_from_id='$sendto_id' AND send_to_id='$sendfrom_id' ORDER BY message_id desc LIMIT 5";
$resultset14=mysqli_query($link,$qry14);
while($row=mysqli_fetch_row($resultset14)){
	echo "<div class='message me-message'>".$row[0]."</div>";
}
?>  
</div>
          </li>
          <li class="clearfix">
            <div class="message-data align-left">
              <span class="message-data-name"><?php echo $_SESSION['NAME']; ?></span> <i class="fa fa-circle me"></i>
            </div>
<div id="msg2">
<?php
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select messages from chat where send_from_id='$sendfrom_id' AND send_to_id='$sendto_id' ORDER BY message_id desc LIMIT 5";
$resultset=mysqli_query($link,$qry);
while($row=mysqli_fetch_row($resultset)){
	echo "<div class='message you-message'>".$row[0]."</div>";
}
?>     
</div>
</li>
        </ul>
        
      </div> <!-- end chat-history -->
      
    </div> <!-- end chat -->
  </div>	
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
</html>