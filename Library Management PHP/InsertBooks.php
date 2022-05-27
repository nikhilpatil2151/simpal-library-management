<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
<body>
    <br>
    <?php
        include 'navbar.php';
    ?>
    <div class="msg">

    <?php



    if(isset($_POST['sub'])){
        include("connect.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "INSERT INTO book_info (`isbn`, `title`, `author`, `edition`, `publication`) VALUES ('$isbn', '$title', '$author', '$edition', '$publication')";
        if(mysqli_query($conn,$query)){
    echo "<h3> Book information is inserted successfully </h3><a href='SearchBooks.php'> To search for the Book information click here </a>";
        }
        else{
            echo "Error while inserting data : ".mysqli_error($conn);
        }
    }else{
        echo "No Post Data Found...!!";
    }
    ?>
 </div>
    
 
</body>
</html>