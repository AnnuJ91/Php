<html>
    <head>
        <title>Even or odd number</title>
    </head>
    <body>
        <form action="#" method="post">
            enter any number: <input type="text" name="num">
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $num=$_POST['num'];
        if($num%2==0)
        {
            echo $num." is even number";
        }
        else
        {
            echo $num." is odd number";
        }
    }
   
?>