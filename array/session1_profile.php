<?php
    session_start();
    if(isset($_SESSION['uname']))
    {
        echo "<h2>Welcome to the profile page</h2>";
        echo "<br><a href='session1_bknd.php'><input type=button name=back value=back></a>";

    }
    else
    {
        echo "<script>location.href='session1.php'</script>";
    }

?>