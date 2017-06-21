<?php
include 'header.php'
?>


<html>
    <body>
        <?php
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if(strpos($url, 'error=empty') !== false) {
            echo "Fill out EMPTY fields! You missed a spot";
            }
            elseif(strpos($url, 'error=username') !== false) {
                echo "That User already exists meng. Pick another!";
            }
            if(isset($_SESSION['id'])){
                echo "WELCOME!";
            } else {
                echo "You are not logged in...";
            }
        ?>
    <div class="reg_box">
        <?php
            if(isset($_SESSION['id'])) {
                echo "You are already logged in!";
            } else {
                echo "<form action = 'includes/signup.inc.php' method = 'POST'>
                <input type='text' name = 'first_name' placeholder = 'Firstname'><br>
                <input type= 'text' name = 'last_name' placeholder = 'Lastname'><br>
                <input type= 'text' name = 'username' placeholder = 'Username'><br>
                <input type= 'password'' name = 'password'' placeholder = 'Password'><br>
                <button type = 'submit'> SIGN UP </button>
                </form>";
            }   
        ?>
    </div>
</body>
</html>