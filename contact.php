<?php
session_start();
echo '<!DOCTYPE html>';
echo '<html>';
echo '<body>';
echo '<script src="./assets/validation.js"></script>';
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
echo '<div class="form-group">                                                                                                              ';
echo '		<label>Phone Number:</label>';
if(isset($_SESSION['pnumber']) && $_SESSION['pnumber'] != "")
    echo '<input class="form-control" name="pnumber" type="text" id="pnumber" onblur="checkPNumber(this.value)" value="'.$_SESSION['pnumber'].'">';
else
    echo '<input class="form-control" name="pnumber" type="text" id="pnumber" onblur="checkPNumber(this.value)">';
echo     '<p class="help-block" id="pnumberHelp"></p>';
echo     '</div>';
echo '<div class="form-group">                                                                                                              ';
echo '		<label>Date of Birth:</label>';
if(isset($_SESSION['dob']) && $_SESSION['dob'] != "")
    echo '<input class="form-control" name="dob" type="text" id="dob" onblur="checkDOB(this.value)" value="'.$_SESSION['dob'].'">';
else
    echo '<input class="form-control" name="dob" type="text" id="dob" onblur="checkDOB(this.value)">';
echo     '<p class="help-block" id="dobHelp"></p>';
echo     '</div>';
echo '<div class="form-group">                                                                                                              ';
echo '		<label>Preferred Contact Method (Type Phone or Email):</label>';
if(isset($_SESSION['contactPref']) && $_SESSION['contactPref'] != "")
    echo '<input class="form-control" name="contactPref" type="text" id="contactPref" onblur="checkContactMethod(this.value)" value="'.$_SESSION['contactPref'].'">';
else
    echo '<input class="form-control" name="contactPref" type="text" id="contactPref" onblur="checkContactMethod(this.value)">';
echo     '<p class="help-block" id="contactmethodHelp"></p>';
echo     '</div>';
echo '		<div class="form-group">';
echo '		<label>Comment:</label>';
if(isset($_SESSION['comment']) && $_SESSION['comment'] != "")
    echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="checkComment(this.value)" value="'.$_SESSION['comment'].'"></textarea>';
else
    echo '<textarea name="comment" rows="10" cols="50" id="comment" onblur="checkComment(this.value)"></textarea>';
echo '		<p class="help-block" id="commentHelp"></p>';
echo '		</div>';
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

    if (isset($_POST['contactPref']) && $_POST['contactPref'] != "")
    {
        $contactPref = $_POST['contactPref'];
        $_SESSION['contactPref'] = $contactPref;
    }
    else
        $err .="contactPrefNull";

    if (isset($_POST['dob']) && $_POST['dob'] != "")
    {
        $dob = $_POST['dob'];
        $_SESSION['dob'] = $dob;
    }
    else
        $err .="dobNull";

    if (isset($_POST['pnumber']) && $_POST['pnumber'] != "")
    {
        $pnumber = $_POST['pnumber'];
        $_SESSION['pnumber'] = $pnumber;
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
        echo "<div>Error is: $err</div>";
	}else{
	echo "<div>First Name: $firstName</div>";
	echo "<div>Last Name: $lastName</div>";
	echo "<div>Email: $email</div>";
    echo "<div>Phone Number: $pnumber</div>";
    echo "<div>Date of Birth: $dob</div>";
    echo "<div>Preferred Contact Method: $contactPref</div>";
	echo "<div>Comment: $comment</div>";
    }
}
echo '</body>';
echo '</html>';
?>