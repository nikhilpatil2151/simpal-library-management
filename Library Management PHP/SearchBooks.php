<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

    <?php
    include 'navbar.php';

    ?>

    <div class="main">
    <form action = "DisplayBooks.php" method="get">
        <center>Enter the title of the book to be searched :
        <input type="text" name="search" size="48">
        <br></br>
        <input type="submit" value="submit">
        <input type="reset" value="Reset">
        </center>
        <br>
        </form>
        </div>
    </body>
</html>