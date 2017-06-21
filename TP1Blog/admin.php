<?php
    include 'Database.php';
    include 'header.php';
    include 'articles.inc.php';
?>
<?php
    if(isset($_SESSION['id'])){
        echo $_SESSION['id'];
    } else {
        echo "You are not logged in...";
    }
    date_default_timezone_set('America/New_York');
?>
<html>
    <head>
        <link rel = "stylesheet" type="text/css" href="style.css">
    </head>
    <div class = "intro">
        <a>
            Welcome to Ricardo's Website!<br> 
            Here, you'll find tons of articles and reviews related to the video games industry,<br> 
            the anime industry and the likes.<br> 
            Please enjoy your stay and remember to login to verify your identity!
        </a>
    </div>
</html>