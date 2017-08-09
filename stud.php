<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="Sources/bootstrap-3.3.7-dist/css/bootstrap.css"/>
		<link  rel="stylesheet" href="Sources/font-awesome-4.7.0/css/font-awesome.css"/>
		<script src="jquery-1.10.1.min.js"></script>
		<script src="Sources/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	</head>
	<style>
	body{
		background-image: url('Images/bg1.jpg');
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


#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
    text-decoration: none;
}
#login-dp .social-buttons{
    margin:12px 0
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

	</style>
	<body>
		<!--navbar start -->

	<nav class="navbar navbar-webmaster" id="myPage">
    <div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="stud.php">Inta-Ract</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">

			<ul class="nav navbar-nav navbar-right">
				<li class="active"><!--<a href="#">Profile<span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profile<span class="sr-only">(current)</span></a></li>-->
				<li><a href="index.html">Main Menu<span class="sr-only"></span></a></li>
				<li><a href="aboutus.php">About Us<span class="sr-only"></span></a></li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu" style="width: 600px;">
				<li>
					<form class="form-horizontal" method="post" action="st_reg.php">
<fieldset>

<!-- Form Name -->
<legend>Please Register Here</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">DOB</label>
  <div class="col-md-4">
  <input id="email" type="date" name="dob" placeholder="Enter your date of Birth" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Email</label>
  <div class="col-md-4">
  <input id="contact" type="email" name="email" placeholder="Enter your Email here" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Branch</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="branch" placeholder="Enter your branch" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Year</label>
  <div class="col-md-4">
		<input type="radio" name="year"/>1st Year<br />
				<input type="radio" name="year"/>2ndYear<br />
				<input type="radio" name="year"/>3rd Year<br />
				<input type="radio" name="year"/>4th Year<br />
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">University Roll No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="urollno" placeholder="Enter university roll no" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">College Roll No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="clgrollno" placeholder="Enter college roll no" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Address</label>
  <div class="col-md-4">
  <textarea id="contact" name="address" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact No</label>
  <div class="col-md-4">
  <input id="contact" type="text" name="phno"  class="form-control input-md" required="">
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" type="password" name="passwd" placeholder="Enter a password" class="form-control input-md" required="">

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="register" class="btn btn-success">Sign Up</button>
  </div>
</div>

</fieldset>
</form>
				</li>
			</ul>
        </li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login
								 <form class="form" role="form"  accept-charset="UTF-8" id="login-nav" method="post" action="st_auth.php">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" name="passwd" class="form-control" id="exampleInputPassword2" placeholder="Password" required>

										</div>
										<div class="form-group">
											 <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? Please Register!
							</div>
					 </div>
				</li>
			</ul>
        </li>

				</ul>
		</div>
	</div>
</nav>

<div id="band" class="container text-center">
  <div class="panel-group">
  <div class="panel panel-success">
      <div class="panel-heading"><h4><strong>Let's know about INTE-RACT</strong></h4>
 		<em>Student Professor Inreraction System</em></div>
      <div class="panel-body"><p>Teacher Student Interaction System can be used by education institutes to interact with students easily. The  Teacher-Student interaction system allows the professor of any organization to upload notes for a student. It will also facilitate keeping all the records of a professor, such as notes and any notification.</p></div>
    </div>
</div>
  <hr>
</div>

<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Inte-Ract Features</h3>
    <p class="text-center">These are the special features that only Inte-Ract has.<br> Remember to send a Hi !</p>
    <ul class="list-group">
      <li class="list-group-item">Professor Personal Chat <span class="label label-danger"></span></li>
      <li class="list-group-item">Follow Unfollow System <span class="label label-info">Unique ! </span></li> 
      <li class="list-group-item">Download and Upload System <span class="label label-info">Unique ! </span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Images/chatting.jpg" width="400" height="300">
          <p><strong>Pesonal Chatting System</strong></p>
          <p>Professor to Professor Chatting</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal1" style="width: 100px;">Info</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
           <img src="Images/follow-me.jpg" width="400" height="300px" style="height: 350px;">
          <p><strong>Follow Unfollow System</strong></p>
          <p>Student Notification By following a Professor</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal2" style="width: 100px;">Info</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Images/upldown.png" width="400" height="300" style="height: 350px">
          <p><strong>Upload and Download System</strong></p>
          <p>Student can download files Uploaded by the Professor</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal3" style="width: 100px;">Info</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4>Personal chatting system is designed 
        		for the Professors.Online section shows
        		the online professors.Click on that and 
        		Professor can chat with another Professor.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4><strong>Follow system is designed for the students.
        				Students can follow any Professor.If a Professor
        				brodcast any notice,then it will be showed to the
        				students which are currently following the
        				Professor.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
  
   <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Detailed Information</h4>
        </div>
        <div class="modal-body">
        	<h4><strong>Upload and download System are specially
        				designed for helping the Students.Professors can
        				upload any documents and student can download that
        				perticular documents.</strong></h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
    	<div class="container-fluid" style="height: 200px;width: 400px;background-color: #ffffff; margin-top:10px; border-radius: 5%">
      <p style="margin-top: 10px">Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dr.B.C.Roy Engineering College, Durgapur</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9999999999</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: interact@gmail.com</p></div>
    </div>
    <form method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="send">Send</button>
        </div>
      </div>
    </div>
    </form>
     <?php
     if(isset($_POST['send']))
     {
	    $name=$_POST['name'];
	    $email=$_POST['email'];
	    $cmnt=$_POST['comments'];
	    $link=mysqli_connect("localhost","root","","professor_db");
	    $qry="insert into about(name,email,cmnts) values('$name','$email','$cmnt')";
	    mysqli_query($link,$qry);
	 }
       ?>
  </div>
  <br>
  <h3 class="text-center">About Us</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Sumanta</a></li>
    <li><a data-toggle="tab" href="#menu1">Sulagna</a></li>
    <li><a data-toggle="tab" href="#menu2">Subhadip</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>The Designer & Developer</h2>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>The Designer & Developer</h2>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>The Designer & Developer</h2>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Inte-Ract</p> 
</footer>
	</body>
</html>
