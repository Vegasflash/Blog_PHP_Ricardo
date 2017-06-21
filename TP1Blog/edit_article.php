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
    <div id="wrapper">
        <div id="header">
            <div id ="logo">
                Rick's Articles:
            </div>
        </div>
            <?php
                $aid = $_POST['aid'];
                $user = $_POST['user'];
                $date = $_POST['date'];
                $article = $_POST['article'];

                echo "<form method= 'POST' action='".editArticles($article_conn)."'>
                    <input type = 'hidden' name = 'aid' value= '".$aid."'>
                    <input type = 'hidden' name = 'user' value= '".$user."'>
                    <input type = 'hidden' name = 'date' value= '".$date."'>
                    <textarea name='article'>".$article."</textarea><br>
                    <button type='submit' name ='articleSubmit'>Edit</button>
                    </form>";
            ?>         
        </div>
    </body>
</html>