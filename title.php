<?php
echo '<head>';
echo '<link rel="stylesheet" href="./assets/bootstrap-3.3.7-dist/css/bootstrap.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
if(isset($_GET['page']) && $_GET['page'] != ""){
    switch($_GET['page']){
        case "work":
            echo '        <title>Work</title>';
            break;
        case "school":
            echo '        <title>School</title>';
            break;
        case "contact":
            echo '        <title>Contact</title>';
            break;
        default:
            echo '        <title>Home</title>';
            break;
    }
}
echo '</head>';
?>