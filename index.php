<!DOCTYPE html>
<?php
    $first = $_POST['first'];
    $last = $_POST['last'];
    $price = $_POST['price'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form1" method="POST" action="index.php">
            <input type="text" name="first"><br>
            <input type="text" name="last"><br>
            <input type="text" name="price"><br>
            <input type="submit" value="Click"><br>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
