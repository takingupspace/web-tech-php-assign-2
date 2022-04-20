<?php
include("functions.php");
echo '<!DOCTYPE html>                                                                                                                                                                                                   ';
echo '<html>';
include("title.php");
echo '    <body>';
include("navigation.php");
if(isset($_GET['page']) && $_GET['page'] != ""){
    $page = $_GET['page'];
    switch($page){
        case "work":
            include("work.php");
            break;
        case "school":
            include("school.php");
            break;
        case "contact":
            include("contact.php");
            break;
        default:
            include("home.php");
            break;
    }
}else{
    redirect('https://ec2-18-208-211-38.compute-1.amazonaws.com/web-tech-php-assign-2/index.php?page=home');
}
echo '</body>';
echo '</html>';
?>