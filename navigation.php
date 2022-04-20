<?php
echo '<ul class="nav nav-tabs">';
if(isset($_GET['page']) && $_GET['page'] != ""){
    switch($_GET['page']){
        case "school":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
        
        case "work":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
        
        case "contact":
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';

        default:
            echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
            echo '              <li><a href="index.php?page=work">Work</a></li>';
            echo '              <li><a href="index.php?page=school">School</a></li>';
            echo '              <li><a href="index.php?page=contact">Contact</a></li>';
            
    }
}
echo '</ul>';
?>