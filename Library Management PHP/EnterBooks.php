<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
<body>

<?php
    include('navbar.php');
?>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <div class="main">
    <form action="./InsertBooks.php" method="POST" >
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48" required> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48" required> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48" required> </td>
            </tr>
            <tr>
            <td> Enter Edition :</td>
            <td> <input type="text" name="edition" required size="48"> </td>
            </tr>
            <tr>
            <td> Enter Publication: </td>
            <td> <input type="text" name="publication" required size="48"> </td>
            </tr>
            <tr>
            <td></td>
            <td class="btns">
            <input type="submit" name="sub" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>