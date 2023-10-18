<?php
    session_start();

    if(isset($_SESSION['uname']))
    {
        session_destroy();
        echo "<script>location.href='session1.php'</script>";
    }
    else
    {
        echo "<script>location.href='session1.php'</script>";
    }
?>