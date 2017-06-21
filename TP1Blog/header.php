<?php
session_start();

$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "test";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldn't connect to mysql FUUUUU!!");
@mysql_select_db("$db_name") or die ("Invalid Database meng gg");

echo "Successful Connection";

?>
<html>
    <head>     
        <title></title>
         <link rel="stylesheet" type="text/css" href="style.css" />         
    </head>
    <body>
        <div class="nav_bar">
            <ul>
                <a href = "Index.php">Home</a></li> |
                <a href = "articles.php">Articles</a></li> |
                <a href = "signup.php">Register</a></li> |
                <a href = "profile.php">Profile</a></li> |
                <a href = "admin.php">Administrator</a></li> |
                <a href = "redaction.php">Redaction</a>< |            
            </ul>
            <?php
            if(isset($_SESSION['id'])) {
                echo "<form action ='includes/logout.inc.php'>
                        <button>LOG OUT</button>
                    </form>";
            } else {
                echo "<form action ='includes/login.inc.php' method='POST'>
                            <input type='text' name= 'username' placeholder= 'Username'>
                            <input type='password' name= 'password' placeholder= 'Password'>
                            <button type ='submit'>LOGIN</button>
                        </form>";
            }
            ?>
        </div>
    </body>
</html>