<?php

function setArticles($article_conn) {
    if(isset($_POST['articleSubmit'])) {
        $user = $_POST['user'];
        $date = $_POST['date'];
        $article = $_POST['article'];

        $sql = "INSERT INTO article_list (user, date, article) 
                VALUES ('$user', '$date', '$article')";
        $new_result = mysqli_query($article_conn, $sql);
    }
}

function getArticles($article_conn) {
    $sql = "SELECT * FROM article_list";
    $new_result = mysqli_query($article_conn, $sql);
    while ($row = mysqli_fetch_assoc($new_result)) {
        echo "<div class = 'article_box'><p>";
            echo $row['user']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['article']);
        echo "</p>
        <form class='delete_form' method='POST' action='".deleteArticles($article_conn)."'>
                <input type = 'hidden' name = 'aid' value= '".$row['aid']."'>
                <button type ='submit' name ='articleDelete'>Delete!</button>
            </form>
            <form class='edit_form' method='POST' action='edit_article.php'>
                <input type = 'hidden' name = 'aid' value= '".$row['aid']."'>
                <input type = 'hidden' name = 'user' value= '".$row['user']."'>
                <input type = 'hidden' name = 'date' value= '".$row['date']."'>
                <input type = 'hidden' name = 'article' value= '".$row['article']."'>
                <button>Edit</button>
            </form>
        </div>";  
    }
}

function editArticles($article_conn) {
    if(isset($_POST['articleSubmit'])) {
        $aid = $_POST['aid'];
        $user = $_POST['user'];
        $date = $_POST['date'];
        $article = $_POST['article'];

        $sql = "UPDATE article_list SET article= '$article' WHERE aid='$aid'";
        $new_result = mysqli_query($article_conn, $sql);
        header("Location: index.php");
    }
}

function deleteArticles($article_conn) {
    if(isset($_POST['articleDelete'])) {
        $aid = $_POST['aid'];

        $sql = "DELETE FROM article_list WHERE aid= '$aid'";
        $new_result = mysqli_query($article_conn, $sql);
        header("Location: index.php");
    }
}