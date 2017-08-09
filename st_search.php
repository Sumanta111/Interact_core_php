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
body {
	margin: 0px auto;
	font-family: "Raleway", Arial, sans-serif;
  	background: #ffffff;
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


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  float: left;
  margin-left: 20px;
  margin-top: 20px;
}

.container {
  padding: 0 16px;
  
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

.btn1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  font-size: 18px;
  padding-left: 10px;
  width: 50%;
}
button:hover, a:hover {
  opacity: 0.7;
}
.container-fluid a{
		text-decoration: none;
	}
.card:hover{
		box-shadow: 10px 14px 18px 0 rgba(0, 0, 0, 0.2);
}
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
			<a class="navbar-brand" href="st_search.php">Inta-Ract</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
				<form method="post">
     				 <li><button type="submit" name="logout" class="btn btn-primary" style="margin-top: 9px;"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</button></li>
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
			<li><form method="post"><button type="submit" name="notf" id="mybtn" class="btn btn-danger" style="margin-top: 9px;">Notification&nbsp;<span class="glyphicon glyphicon-envelope"></span></button>&nbsp;&nbsp;</form></li>&nbsp;&nbsp;
				<li class="text"><?php $name= $_SESSION['NAME']; echo "Hi! <strong>".$name;"</strong>" ?><span class="sr-only"></span></li>
				 
				</ul>
		</div>
	</div>
</nav>
                        	<!--navbar end -->
<div  class="notif" style="background-color: #000000;color: #ffffff;font-size: 10px;margin-top: -20px; width: auto; text-align: center;font-family: arial; opacity: 0.6;">
<?php
if(isset($_POST['notf'])){
$id=$_SESSION['STID'];
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select name,u_id from reg";
$resultset=mysqli_query($link,$qry);
while($row=mysqli_fetch_row($resultset)){
	$qry1="select follower_name,follower_id from ".$row[1]."_".$row[0];
	$resultset1=mysqli_query($link,$qry1);
	while($row1=mysqli_fetch_row($resultset1)){
		if($user==$row1[0] && $id==$row1[1]){
			echo "<br>";
			$qry2="select messages,seen_unseen,from_msg_id from msg where from_msg_id=".$row[1]." AND seen_unseen='u'";
			$resultset2=mysqli_query($link,$qry2);
			while($row3=mysqli_fetch_row($resultset2)){
				$qry3="select seen_unseen from ".$row[1]."_".$row[0]." where follower_id=".$row1[1];
				$resultset3=mysqli_query($link,$qry3);
		        while($row4=mysqli_fetch_row($resultset3)){
		        	if($row4[0]=='u' && $row3[1]=='u'){
		        		echo "<h4>Hi <strong>".$row1[0]."</strong>,You have a notification from: <strong>".$row[0]."</strong></h4>";
				 		echo "<h4><strong>".$row3[0]."<strong></h4><br>";
		        		$qry4="update ".$row[1]."_".$row[0]." SET seen_unseen='s' where follower_id=".$row1[1];
				 		$resultset4=mysqli_query($link,$qry4);
				 		$qry5="select * from ".$row[1]."_".$row[0]." where seen_unseen='u'";
				 		$resultset5=mysqli_query($link,$qry5);
				 		if(($count=mysqli_num_rows($resultset5))==0){
							$qry6="update msg SET seen_unseen='s' where from_msg_id=".$row3[2];
							$resultset6=mysqli_query($link,$qry6);
							$qry7="update ".$row[1]."_".$row[0]." SET seen_unseen='u' where seen_unseen='s'";
							$resultset7=mysqli_query($link,$qry7);
							}
						}
				}
			}
		}
	}	
  }
}
?>
</div>

<?php
$link=mysqli_connect("localhost","root","","Professor_db");
$qry="select name,u_id,desg,work from reg";
$resultset=mysqli_query($link,$qry);
while($row=mysqli_fetch_row($resultset)){
	
	$query_string="id=".urlencode($row[1])."&fname=".urlencode($row[0]);
	//echo "<a href=#>".$row[0]."</a><a href=follow.php?".htmlentities($query_string).">Follow</a><a href=unfollow.php?".htmlentities($query_string).">Unfollow</a><br>";
	echo '<div class="card"><img src="Images/default_guy.png" style="width:100%;height:250px;"><div class="container-fluid"><a href=download.php?'.htmlentities($query_string).' target="_self"><h3><strong>'.$row[0].'</strong></h3></a><p class="title">'.$row[2].'</p>
    <p>'.$row[3].'</p><div style="margin: 24px 0;">
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-dribbble"></i></a> 
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-twitter"></i></a>  
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-linkedin"></i></a>  
      <a href="#" style="text-decoration: none;font-size: 22px;color: black;"><i class="fa fa-facebook"></i></a>
      </div><p><a href=follow.php?'.htmlentities($query_string).'><button class="btn1">Follow</button></a><a href=unfollow.php?'.htmlentities($query_string).'><button class="btn1">Unfollow</button></a></p></div></div>';
	  
}
?>   	
	</body>
</html>