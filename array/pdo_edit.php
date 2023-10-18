<?php
    include 'pdo_conn.php';
    $uid=$_REQUEST['ep'];
    $query="SELECT * FROM test1 WHERE ID=:id";
    $data=$conn->prepare($query);
    $data->execute(array(":id"=>$uid));
    while($result=$data->fetch(PDO::FETCH_ASSOC))
    {
        $name=$result['NAME'];
        $email=$result['EMAIL'];
        $mobile=$result['MOBILE'];
        $salary=$result['SALARY'];
    }
?>

<html>
    <head>
        <title>Edit Form</title>
    </head>
    <form action="pdo_editdisplay.php" method="post">
        <table border="1">
          <tr><td>ID:  <input type="text" name="uid" value="<?php echo $uid ?>"></td></tr>
          <tr>  <td>  name: <input type="text" name="name" value="<?php echo $name ?>"></td></tr>
          <tr> <td>  email: <input type="text" name="email" value="<?php echo $email ?>"></td></tr>
          <tr> <td>  mobile: <input type="text" name="mobile" value="<?php echo $mobile ?>"></td></tr>
          <tr> <td>  salary: <input type="text" name="salary" value="<?php echo $salary ?>"></td></tr>
          <tr><td colspan="2"><input type="submit" value="Update"></td></tr>
        </table>
    </form>
</html>