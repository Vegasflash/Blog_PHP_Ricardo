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
    <div id="wrapper">
        <div id="header">
            <div id ="logo">
                Rick's Articles:
            </div>
        </div>
            <?php
                echo "<form method= 'POST' action='".setArticles($article_conn)."'>
                    <input type = 'hidden' name = 'user' value= 'Anonymous'>
                    <input type = 'hidden' name = 'date' value= '".date('Y-m-d H:i:s')."'>
                    <textarea name='article'></textarea><br>
                    <button type='submit' name ='articleSubmit'>Add Article </button>
                    </form>";
                    
                getArticles($article_conn)
            ?>         
        </div>
    </body>
</html>