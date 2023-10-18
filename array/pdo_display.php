<?php
    include 'pdo_conn.php';
    $query="SELECT * FROM test1";
    $data=$conn->query($query);
?>

<table border="1">
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Salary</th>
    <th colspan="2">Action</th>
    <tr>
        <?php
            while($result=$data->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>".$result['ID']."</td>";
                echo "<td>".$result['NAME']."</td>";
                echo "<td>".$result['EMAIL']."</td>";
                echo "<td>".$result['MOBILE']."</td>";
                echo "<td>".$result['SALARY']."</td>";
                echo "<td><a href='pdo_edit.php?ep=$result[ID]'>Edit</a></td>";
                echo "<td><a href='pdo_delete.php?ep=$result[ID]'>Delete</a></td>";
            }

        ?>

    </tr>
</table>