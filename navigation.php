<?php
echo '<ul class="nav nav-tabs">';
if(isset($_GET['page']) && $_GET['page'] != ""){
    switch($_GET['page']){
        case "school":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
            break;
        
        case "work":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
            break;
        
        case "contact":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
            break;

        default:
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
            break;
            
    }
}
echo '</ul>';
?>