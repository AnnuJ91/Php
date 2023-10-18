<?php
    $conn=mysqli_connect("localhost","root","","exam") OR DIE(mysqli_error());

    if($conn)
    {
      //  echo "Successfully connected to database";
    }
    else{
        echo "Error establishing in database connection";
    }

?>