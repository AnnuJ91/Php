<?php
    $db_name="mysql:host=localhost;dbname=exam";
    $username="root";
    $password="";

    $conn=new PDO($db_name,$username,$password);

   // $sql=$conn->query("SELECT * FROM test1");
   $salary="12000";
   $sql=$conn->prepare("SELECT * FROM test1 WHERE SALARY = ?");
   $sql->bindparam(1,$salary,PDO::PARAM_INT);
   $sql->execute();

    while($row=$sql->fetch(PDO::FETCH_ASSOC))
    {
        echo "{$row['ID']} - {$row['NAME']} - {$row['EMAIL']} - {$row['MOBILE']} - {$row['SALARY']}<br>";
       // echo "<pre>";
       // print_r($row);
       // echo "</pre>";
    }

?>