<?php
session_start();
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="./assets/bootstrap-3.3.7-dist/css/bootstrap.css">                ';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
echo '<title>Contact</title>';
echo '</head>';
echo '<body>';
echo '<script src="./assets/validation.js"></script>';
echo '<nav class="navbar navbar-inverse">                                                                                               ';
echo '<div class="container-fluid">';
echo '  <div class="navbar-header">';
echo '    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">';
echo '      <span class="icon-bar"></span>';
echo '      <span class="icon-bar"></span>';
echo '      <span class="icon-bar"></span>';
echo '    </button>';
echo '    <a class="navbar-brand" href="#">Travis Sauer\'s Resume Website</a>';
echo '  </div>';
echo '  <div class="collapse navbar-collapse" id="myNavbar">';
echo '    <ul class="nav navbar-nav">';
echo '      <li class="active"><a href="./home.html">Home</a></li>';
echo '      <li><a href="./work.html">Work</a></li>';
echo '      <li><a href="./school.html">School</a></li>';
echo '      <li><a href="./contact.php">Contact</a></li>';
echo '    </ul>';
echo '  </div>';
echo '</div>';
echo '</nav>';
echo '<div id="container">';
echo '<div class="panel panel-primary">                 ';
echo '	<div class="panel-heading">Contact Form</div>';
echo '	<div class="panel-body">';
echo '<form method="post" action="">';
echo '	<div class="form-group">';
echo '	<label>First Name:</label>';
if (isset($_SESSION['first']) && $_SESSION['first'] != "")
	echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
else
	echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
echo '<p class="help-block" id="fnameHelp"></p>';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Last Name:</label>';
if (isset($_SESSION['last']) && $_SESSION['last'] != "")
{
    echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkLName(this.value)" value="'.$_SESSION['last'].'">';
}
else
{
	echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkLName(this.value)">';
}
echo '<p class="help-block" id="lnameHelp"></p>';
echo '</div>';
echo '<div class="form-group">                                                                                                              ';
echo '		<label>Email:</label>';
if(isset($_SESSION['email']) && $_SESSION['email'] != "")
    echo '<input class="form-control" name="email" type="text" id="email" onblur="checkEmail(this.value)" value="'.$_SESSION['email'].'">';
else
    echo '<input class="form-control" name="email" type="text" id="email" onblur="checkEmail(this.value)">';
echo '		<p class="help-block" id="emailHelp"></p>';
echo '		</div>';
echo '		<div class="form-group">';
echo '		<label>Comment:</label>';
if(isset($_SESSION['comment']) && $_SESSION['comment'] != "")
    echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="checkComment(this.value)" value="'.$_SESSION['comment'].'"></textarea>';
else
    echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="checkComment(this.value)"></textarea>';
echo '		<p class="help-block" id="commentHelp"></p>';
echo '		</div>';
if(isset($_SESSION['pnumber']) && $_SESSION['pnumber'] != "")
    echo '<input class="form-control" name="pnumber" type="text" id="pnumber" onblur="checkPNumber(this.value)" value="'.$_SESSION['pnumber'].'">';
echo '		<hr>';
echo '		<button id="submit" name="submit" class="btn btn-block btn-success" type="submit">Submit</button>';
echo '	</form>';
echo '	</div>';
echo '		</div>';
echo '	</div>';
echo '</div>';
if (isset($_POST['submit']))
{

	$err="";

    if (isset($_POST['comment']) && $_POST['comment'] != "")
	{
		$comment = $_POST['comment'];
		$_SESSION['comment'] = $comment;
	}
	else
		$err .="commentNull";

    if (isset($_POST['pnumber']) && $_POST['pnumber'] != "")
    {
        $pnumber = $_POST['pnumber'];
        $_SESSION['comment'] = $pnumber;
    }
    else
        $err .="pnumberNull";

	if (isset($_POST['fname']) && $_POST['fname'] != "")
	{
		$firstName=$_POST['fname'];
		$_SESSION['first'] = $firstName;
	}
	else
		$err .="FnameNull";

	if (isset($_POST['lname']) && $_POST['lname']!="")
	{
		$lastName=$_POST['lname'];
		$_SESSION['last']=$lastName;
	}
	else
		$err.="LnameNull";

	if (isset($_POST['email']) && $_POST['email']!="")
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
	}
	else
		$err.="emailNull";

	if (isset($err) && $err != "")
	{
		redirect("index.php?page=contact&err=$err");
	}
	echo "<div>First Name: $firstName</div>";
	echo "<div>Last Name: $lastName</div>";
	echo "<div>Email: $email</div>";
	echo "<div>Comment: $comment</div>";
}
echo '</body>';
echo '</html>';
?>