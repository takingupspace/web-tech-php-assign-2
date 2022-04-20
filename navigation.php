<?php
echo '    <nav class="navbar navbar-inverse">';
echo '        <div class="container-fluid">';
echo '          <div class="navbar-header">';
echo '            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">';
echo '              <span class="icon-bar"></span>';
echo '              <span class="icon-bar"></span>';
echo '              <span class="icon-bar"></span>';
echo '            </button>';
echo '            <a class="navbar-brand" href="#">Travis Sauer\'s Resume Website</a>';
echo '          </div>';
echo '          <div class="collapse navbar-collapse" id="myNavbar">';
echo '            <ul class="nav navbar-nav">';
if(isset($_GET['page']) && $_GET['page'] != ""){
    echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
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
            
    }
}
echo '            </ul>';
echo '          </div>';
echo '        </div>';
echo '      </nav>';
?>