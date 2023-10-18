    <?php
        include 'connection.php';
        $uid=$_REQUEST['ep'];
        $sql=mysqli_query($conn,"SELECT * FROM test2 WHERE id='$uid'");
        $sql_fecth=mysqli_fetch_assoc($sql);
    ?>
<html>
    <head>
        <title>Edit form</title>
    </head>
    <body>
        <center>
        <form action="edit_bknd.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <th colspan="2">Edit Form</th>
                </tr>
                <tr>
                    <td>ID:</td>
                    <td><input type="text" name="Id" value="<?php echo $uid?>" ></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $sql_fecth['name']?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $sql_fecth['email']?>"></td>
                </tr>
               
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="text" name="phone" value="<?php echo $sql_fecth['phone']?>" ></td>
                </tr>
                <tr>
                    <td> Address:</td>
                    <td><input type="text" name="address" value="<?php echo $sql_fecth['address']?>" ></td>
                </tr>
                <tr>
                    <td> Gender:</td>
                    <td><input type="radio" name="gender" value="Male" placeholder="Gender">Male
                        <input type="radio" name="gender" value="Female" >Female</td>
                </tr>
                <tr>
                    <td> Date of Birth:</td>
                    <td><input type="date" name="dob" value="<?php echo $sql_fecth['dob']?>"></td>
                </tr>
                <tr>
                    <td> Language:</td>
                    <td><input type="checkbox" name="language[]" value="hindi" >Hindi
                    <input type="checkbox" name="language[]" value="marathi" >Marathi
                    <input type="checkbox" name="language[]" value="english" >English</td>
                </tr>
                <tr>
                    <td> Courses:</td>
                    <td><select name="course" >
                        <option value="Btech">Btech</option>
                        <option value="Mtech">Mtech</option>
                        <option value="BCA">BCA</option>
                        
                    </select></td>
                </tr>
                <tr>
                    <td> Image:</td>
                    <td><input type="file" name="img" ></td>
                </tr>

                <tr>
                    <td colspan="2"><center><input type="submit" value="Submit"></center></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>