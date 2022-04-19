<?php
include("functions.php");
echo '<!DOCTYPE html>                                                                                                                                                                                                   ';
echo '<html>';
echo '    <head>';
echo '        <link rel="stylesheet" href="./assets/bootstrap-3.3.7-dist/css/bootstrap.css">';
echo '        <title>School</title>';
echo '    </head>';
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
    include("home.php");
}
echo '</body>';
echo '</html>';
?>