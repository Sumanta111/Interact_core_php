<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="Sources/bootstrap-3.3.7-dist/css/bootstrap.css"/>
		<link  rel="stylesheet" href="Sources/font-awesome-4.7.0/css/font-awesome.css"/>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="Sources/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	</head>
	<style>

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
if(!isset($_SESSION['STID'])){
	session_destroy();
	echo "<script> location.replace('prof.php'); </script>";
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
			<li><form method="post"><button type="submit" name="notf" id="mybtn" class="btn btn-danger" style="margin-top: 9px;">Notification&nbsp;<span class="glyphicon glyphicon-envelope"></span></button></form></li>
				<li><a href="#">Profile<span class="sr-only"></span></a></li>
				<li><a href="#">Profile<span class="sr-only"></span></a></li>
				<li class="text"><?php $name= $_SESSION['NAME']; echo "Hi! ".$name; ?><span class="sr-only"></span></li>
				 
				</ul>
		</div>
	</div>
</nav>

<p>ENTER THE UPDATED INFORMATION :<form method="POST"> <input type="text" name="txt1" /><button type="submit" name="update">Save</button></p>
<?php 
$entity=$_REQUEST['entity'];
//echo $entity;
$id=$_REQUEST['id'];
if(isset($_REQUEST['update']))
{  
    $x=$_REQUEST["txt1"];
    
   $link=mysqli_connect("localhost","root","","Professor_db");
   $qry="update reg SET ".$entity."='".$x."' where u_id='".$id."'"; 
   mysqli_query($link,$qry);
    echo "<script> location.replace('profile.php'); </script>";
}
?></form> 
</html>