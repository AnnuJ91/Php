<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="exam";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }

    $sql="SELECT * FROM test1";
    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "id:{$row["ID"]} - name:{$row["EMAIL"]} - mobile:{$row["MOBILE"]} <br>";
        }
    }
    else
    {
        echo "no result found";
    }

    $conn->close();



?>