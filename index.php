<!DOCTYPE html>
<?php
    session_start();
    /*if(! isset($_SESSION['firsttime']))
     *{
     *  $_SESSION['firsttime'] = "ok";
     *  $chkdata = "yes";
     *}
     * 
     *if($chkdata = "yes")
     *{
     *  //do the stuff below
     *}
     */
    
    /*
     * jquery:
     * <script>
     *  $(document).ready( function() {
     *      $("div").css("color","red");
     *      $("h2.t1").css("background-color","blue");
     *      $("#date").datepicker(); <- this is from google's hosted UI library
     *      $("#b1").click( function() {
     *          $("div.content").toggle("slow");
     *      });
     * });
     * </script>
     * 
     */
    if(isset($_POST['first']))
    {
        $first = $_POST['first'];
    }
    if(isset($_POST['last']))
    {
        $last = $_POST['last'];
    }
    if(isset($_POST['price']))
    {
        $price = $_POST['price'];
    }
    $badname = false;
    if(isset($first))
    {
        if(strlen(trim($first))<=0)
        {
            $badname = true;
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form1" method="POST" action="index.php">
            First<input type="text" name="first"><br>
            Last<input type="text" name="last"><br>
            Price<input type="text" name="price"><br>
            <input type="submit" value="Click"><br>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
