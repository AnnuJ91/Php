<?php   
    try
    {
          $conn=new PDO('mysql:host=localhost;dbname=exam','root','');
          //echo "successfull";
    }catch(PDOException $e)
    {
        echo  $e->getMessage();
    }
             if(isset($_POST['rate']))
            {
                    $rate=$_POST['rate'];
                   if(isset($_COOKIE['rate']))
                    {
                   echo "already voted for ".$_COOKIE['rate'];
                   }
                 else{
                      setcookie('rate',$rate,time()+5);
                      $update_sql="update cookiedb set option_value=option_value+1 where options='$rate";
                      $update_stmt=$conn->prepare($update_sql);
                      $update_stmt->execute();
                       echo "thank you for rating";
             }
    }

    $sql="select * from cookiedb";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);

    ?>
<form action="#" method="post">
    <table>
        <tr>
            <td>
                <input type="submit" name="rate" value="<?php echo $data['0']['options'] ?>">(<?php echo $data['0']['option_value']?>)
            </td>
            <td>
                <input type="submit" name="rate" value="<?php echo $data['1']['options'] ?>">(<?php echo $data['1']['option_value']?>)
            </td>
        </tr>
    </table>
</form>