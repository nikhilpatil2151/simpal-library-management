<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
<?php

include 'navbar.php';
?>
<div class="msg">
<?php

if(isset($_GET['id'])){
    include 'connect.php';

    $id = $_GET['id'];

    $qry = "DELETE FROM book_info WHERE id = '$id'";

    if(mysqli_query($conn, $qry)){
        echo "Successfully Deleted Book..!!";
        header('./DisplayBooks.php');
    }
    else{
        echo "Error While Deleting Book..!! :: ".mysqli_error($conn);
    }
}
else{
    echo "No Book Given For Deletion..!!";
}

?>
</div>
    </body>
