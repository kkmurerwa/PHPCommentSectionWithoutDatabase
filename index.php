<?php
    if (isset($_POST["name"])){
        $name = $_POST['name'];
        $content = $_POST['comment'];
        $handle = fopen("comments.html", "a");
        fwrite($handle, "<br>" . $name . "  : " . $content);
        fclose($handle);
    }
?>
  
<html>
<head>
    <title>Comment section</title>
    <link rel="stylesheet" href="css/comments.css">
</head>
<body>
    <div class="container">
        <h1>This is a comment section</h1>
        <div class="form-container">
            <form action="" method="POST" align="center">
                <input type="textarea" name="comment" placeholder="Type your comment" class="comments-textarea"><br>
                <input type="text" name="name" class="name-input" placeholder="Type your name"><br>
                <input type="submit" name="submit" value="Post" class="submit-button">
            </form>
            <?php
                include "comments.html";    
            ?>
        </div>
    </div>
    <script src="js/comments.js"></script>
</body>
</html>