<html>
    <head>
        <title>Multiplication table</title>
    </head>
    <body>
        <form action="#" method="post">
            Enter any number: <input type="text" name="num">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
<?php
    //table of number 5
    //$num=5;
    if(isset($_POST['submit']))
    {
        $num=$_POST['num'];
        for($i=1;$i<=10;$i++)
        {
            $table=$num*$i;
            echo $table." <br>";
        }
    }
   

?>