<?php
    session_start();
    if(!isset($_SESSION['name']))
    {
        echo "you are logout";
        header('location:session2regi.php');

    }
    else
    {
        echo "<p>or u can logout by</p><a href='session2logout.php'>logout</a>";
    }

?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3>Welcome <?php echo $_SESSION['name']?></h3>
        <h3>My email id is <?php echo $_SESSION['email']?></h3>
    </body>
</html>