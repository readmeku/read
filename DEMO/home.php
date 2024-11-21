<?php 
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HOME</title>
            <link rel="stylesheet" type="text/csss" href="style.css">
        </head>
        <body>
            <h1>Hello, <?php echo $_SESSION['user_name'];?></h1>
            <button><a href="logout.php">logout</a></button>
        </body>
        </html>
        <?php
    }else{
        header("location:index.php");
        exit();
    }

?>