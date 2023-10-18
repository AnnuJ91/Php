<?php
    session_start();
    if(isset($_SESSION['name']))
    {
        echo "Already login";
        header('location:session2regi.php');
    }

?>

<html>
    <head>
        <title>Login page using session</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    include "connection.php";

    if(isset($_POST['login']))
    {
        $email=$_POST["email"];
        $pass=$_POST["pass"];

        $sql="SELECT * FROM sessionex WHERE email='$email' AND password='$pass'";

        $result=mysqli_query($conn,$sql);

        $data=mysqli_fetch_array($result);

        $_SESSION['name']=$data['name'];
        $_SESSION['email']=$data['email'];
        
        $row=mysqli_num_rows($result);

        if($row>0)
        {
            echo "successfully login";
            header('location:session2display.php');
        }
        else
        {
            echo "unsuccessful";
        }

    }

?>