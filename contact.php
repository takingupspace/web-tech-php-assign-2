<?php
session_start();
echo'<!DOCTYPE html>                                                                                                                                                                  ';
echo'<html>';
echo'<head>';
echo'        <link rel="stylesheet" href="./assets/bootstrap-3.3.7-dist/css/bootstrap.css">';
echo'        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
echo'        <title>Contact</title>';
echo'        <script src="./assets/validation.js"></script>';
echo'    </head>';
echo'    <body>';
echo'        <nav class="navbar navbar-inverse">';
echo'            <div class="container-fluid">';
echo'              <div class="navbar-header">';
echo'                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">';
echo'                  <span class="icon-bar"></span>';
echo'                  <span class="icon-bar"></span>';
echo'                  <span class="icon-bar"></span>';
echo'                </button>';
echo'                <a class="navbar-brand" href="#">Travis Sauer\'s Resume Website</a>';
echo'              </div>';
echo'              <div class="collapse navbar-collapse" id="myNavbar">';
echo'                <ul class="nav navbar-nav">';
echo'                  <li class="active"><a href="./home.html">Home</a></li>';
echo'                  <li><a href="./work.html">Work</a></li>';
echo'                  <li><a href="./school.html">School</a></li>';
echo'                  <li><a href="./contact.html">Contact</a></li>';
echo'                </ul>';
echo'              </div>';
echo'            </div>';
echo'          </nav>';
echo'          <div id="page-inner">';
echo'            <div id="container">';
echo'            <div class="panel panel-primary">';
echo'              <div class="panel-heading">Contact Form</div>';
echo'                  <div class="panel-body">';
echo'            <form method="post" action="" id="submitForm">';
echo'              <div class="form-group">';
echo'              <label>First Name:</label>';
if(isset($_SESSION['first']) && $_SESSION['first'] != ""){
echo'              <input class="form-control" name="fname" type="text" id="fname" onkeyup="checkFName(this.value)" value="'.$_SESSION['first'].'" required>';
}else{
echo'              <input class="form-control" name="fname" type="text" id="fname" onkeyup="checkFName(this.value)" required>';
}
echo'              <p class="help-block" id="fnameHelp"></p>';
echo'              </div>';
echo'              <div class="form-group">                                                                                                                                                                                                                   ';
echo'              <label>Last Name:</label>';
echo'              <input class="form-control" name="lname" type="text" onkeyup="checkLName(this.value)" id="lname" required>';
echo'              <p class="help-block" id="lnameHelp"></p>';
echo'              </div>';
echo'              <div class="form-group">';
echo'              <label>Email:</label>';
echo'              <input class="form-control" name="email" type="text" id="email" onkeyup="checkEmail(this.value)" required>';
echo'              <p class="help-block" id="emailHelp"></p>';
echo'              </div>';
echo'              <div class="form-group">';
echo'                <label>Phone Number:</label>';
echo'                <input class="form-control" name="pnumber" type="text" id="pnumber" onkeyup="checkPNumber(this.value)" required>';
echo'                <p class="help-block" id="pnumberHelp"></p>';
echo'                </div>';
echo'                <div class="form-group">';
echo'                  <label>Date of Birth:</label>';
echo'                  <input class="form-control" name="dob" type="text" id="dob" onkeyup="checkDOB(this.value)" required>';
echo'                  <p class="help-block" id="dobHelp"></p>';
echo'                  </div>';
echo'                  <div class="form-group">';
echo'                    <label>Preferred Contact Method:</label>';
echo'                    <input class="form-control" name="contactmethod" type="text" id="contactmethod" onkeyup="checkContactMethod(this.value)" placeholder="Please Enter E(e)mail or P(p)hone" required>';
echo'                    <p class="help-block" id="contactmethodHelp"></p>';
echo'                    </div>';
echo'              <div class="form-group">';
echo'              <label>Comment:</label>';
echo'                <textarea id="comment" name="comment" rows="10" cols="50" onkeyup="checkComment(this.value)" required></textarea>';
echo'              <p class="help-block" id="commentHelp"></p>';
echo'              </div>';
echo'              <hr>';
echo'              <button id="submit" class="btn btn-block btn-success" type="submit" name="submit">Submit</button>';
echo'              <script>';
echo'                $("#submitForm").on("submit", function(e){';
echo'                  e.preventDefault();';
echo'                  var fName = $("#fname").val();';
echo'                  var lName = $("#lname").val();';
echo'                  var email = $("#email").val();';
echo'                  var phoneNumber = $("#pnumber").val();';
echo'                  var DOB = $("#dob").val();';
echo'                  var contactMethod = $("#contactmethod").val();';
echo'                  var comment = $("#comment").val();';
echo'                  alert("First Name = " + fName + " >>> Last Name = " + lName + " >>> Email = " + email +';
echo'                  " >>> Phone Number = " + phoneNumber + " >>> Date of Birth = " + DOB + " >>> Preferred Contact Method = " +';
echo'                  contactMethod + " >>> Comment = " + comment);';
echo'                })';
echo'              </script>';
echo'            </form>';
echo'            </div>';
echo'              </div>';
echo'            </div>';
echo'          </div>';
echo'              <nav class="navbar navbar-inverse navbar-fixed-bottom">';
echo'                <div class="container-fluid">';
echo'                  <div class="navbar-header">';
echo'                    <a class="navbar-brand" href="#">Travis\' Resume Website Footer</a>';
echo'                  </div>';
echo'                </div>';
echo'              </nav>';
echo'    </body>';
echo'</html>';
if (isset($_POST['submit']))
{
	$err="";
	$comment=$_POST['comment'];
	if (isset($_POST['fname']) && $_POST['fname']!="")
	{
		$firstName=$_POST['fname'];
		$_SESSION['first']=$firstName;
	}
	else
		$err.="FnameNull";
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
	if (isset($err) && $err!="")
	{
		//die("Error is: $err");
		redirect("index.php?page=contact&err=$err");
	}
	echo "<div>First Name: $firstName</div>";
	echo "<div>Last Name: $lastName</div>";
	echo "<div>Email: $email</div>";
	echo "<div>Comment: $comment</div>";
}
?>