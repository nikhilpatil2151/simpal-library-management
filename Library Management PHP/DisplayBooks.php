<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
 
    <?php
    include('navbar.php');
    ?>

    <div class="main">

    <?php
 include("connect.php");
 
    $search = $_REQUEST["search"];
 
    $query = "select * from book_info where title like '%$search%'"; //search with a book name in the table book_info
    $result = mysqli_query($conn,$query);
 
    if(mysqli_num_rows($result)>0)
    {
    ?>

 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> ISBN </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
            <th> Delete </th>

        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
        ?>
        <tr>
            <td><?php echo $row["isbn"];?> </td>
            <td><?php echo $row["title"];?> </td>
            <td><?php echo $row["author"];?> </td>
            <td><?php echo $row["edition"];?> </td>
            <td><?php echo $row["publication"];?> </td>
            <td><a href="DeleteBook.php?id=<?php echo $id; ?>">Delete</a></td>

        </tr>
        <?php
        }
        }
        else{

        echo "<center class='no-error'>No books found in the library by the name $search </center>" ;
        }
        ?>   
    </table>
    </div>
    </body>
</html>