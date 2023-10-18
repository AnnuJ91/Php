<?php
    $name="hello";
    $pass="admin";
    session_start();
    if(isset($_SESSION['uname']))
    {
        echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
        echo "<a href='session1_profile.php'>profile page</a></br>";
        echo "<br><a href='session1_logout.php'><input type=button value=logout name=logout></a>";
    }
    else
    {
        if($_POST['uname']==$name && $_POST['pass']==$pass)
        {
            $_SESSION['uname']=$name;
            echo "<script>location.href='session1.php'</script>";
        }
        else
        {
            echo "<script>alert('username or password incorrect')</script>";
            echo "<script>location.href='session1.php'</script>";
        }
    }


?>