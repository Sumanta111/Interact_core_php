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
				<li class="text"><?php $name= $_SESSION['NAME']; echo "Hi! <strong>".$name;"</strong>" ?><span class="sr-only"></span></li>
			
				</ul>
		</div>
	</div>
</nav>
                        	<!--navbar end -->
                            
<?php 
$user=$_REQUEST['fname'];
$name= $_SESSION['NAME'];
//echo $name;
$session=session_id();
if(!isset($_REQUEST['id'])){
	session_destroy();
	echo "<script> location.replace('stud.php'); </script>";
}
else{
	echo "<h2>welcome: <strong>".$_REQUEST['fname']."</strong></h2><br>";
//	echo "id".$_REQUEST['id'];
    $uid=$_REQUEST['id'];
	$parts=explode(" ",$user);
	$last_name=array_pop($parts);
$first_name=implode(" ",$parts);
}
$directory = 'c:/wamp64/www/modified/upload/'.$uid.'_'.$first_name;
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
        
        foreach($scanned_directory as $value)
        {
             $query_string="filename=".urlencode($value)."&id=".urlencode($uid)."&fname=".urlencode($first_name);
             echo'<div id="container"><div id="rcorners1"> '.$value.'</div><div><a href=download_page.php?'.htmlentities($query_string).' id="rcorners2">DOWNLOAD</a></div></div><br>'; 
        }	
 ?>
 </body>
 </html>