<?php
session_start();
echo '<div id="container">
<div class="panel panel-primary">
	<div class="panel-heading">Contact Form</div>
	<div class="panel-body">
<form method="post" action="">
	<div class="form-group">
	<label>First Name:</label>';
if (isset($_SESSION['first']) && $_SESSION['first']!="")
	echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
else
	echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
echo '<p class="help-block" id="fnameHelp"></p>';
echo '</div>';
if (isset($_GET['err']) && strstr($_GET['err'],"LnameNull"))
{
	echo '<div class="form-group has-error">';
	echo '<label class="control-label" for="inputError1">Last Name:</label>';
	echo '<input class="form-control" id="inputError1" name="lname" type="text" id="lname">';
	echo '<p class="help-block" id="lnameHelp">Cannot be blank!</p>';
	echo '</div>';
}
else
{
	echo '<div class="form-group">';
	echo '<label>Last Name:</label>';
	echo '<input class="form-control" name="lname" type="text" id="lname">';
	echo '<p class="help-block" id="lnameHelp"></p>';
	echo '</div>';
}
echo '<div class="form-group">
		<label>Email:</label>
		<input class="form-control" name="email" type="text" id="email">
		<p class="help-block" id="emailHelp"></p>
		</div>
		<div class="form-group">
		<label>Comment:</label>
			<textarea name="comment" rows="10" cols="50"></textarea>
		<p class="help-block" id="commentHelp"></p>
		</div>
		<hr>
		<button id="submit" name="submit" class="btn btn-block btn-success" type="submit">Submit</button>
	</form>
	</div>
		</div>
	</div>
</div>';
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
		redirect("index.php?page=contact&err=$err");
	}
	echo "<div>First Name: $firstName</div>";
	echo "<div>Last Name: $lastName</div>";
	echo "<div>Email: $email</div>";
	echo "<div>Comment: $comment</div>";
}
?>