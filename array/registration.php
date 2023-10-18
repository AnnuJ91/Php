<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <center>
        <form action="registration_bknd.php" method="post" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <th colspan="2">Registration Form</th>
                </tr>
                <tr>
                    <td>Enter name:</td>
                    <td><input type="text" name="name" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td>Enter Email:</td>
                    <td><input type="email" name="email" placeholder="Enter Email Id"></td>
                </tr>
                <tr>
                    <td>Enter Password:</td>
                    <td><input type="password" name="pass" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Enter Mobile No:</td>
                    <td><input type="text" name="phone" placeholder="Contact No"></td>
                </tr>
                <tr>
                    <td>Enter Address:</td>
                    <td><input type="text" name="address" placeholder="Address"></td>
                </tr>
                <tr>
                    <td>Enter Gender:</td>
                    <td><input type="radio" name="gender" value="Male" placeholder="Gender">Male
                        <input type="radio" name="gender" value="Female" >Female</td>
                </tr>
                <tr>
                    <td>Enter Date of Birth:</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Enter Language:</td>
                    <td><input type="checkbox" name="language[]" value="hindi" >Hindi
                    <input type="checkbox" name="language[]" value="marathi" >Marathi
                    <input type="checkbox" name="language[]" value="english" >English</td>
                </tr>
                <tr>
                    <td>Enter Courses:</td>
                    <td><select name="course" >
                        <option value="Btech">Btech</option>
                        <option value="Mtech">Mtech</option>
                        <option value="BCA">BCA</option>
                        
                    </select></td>
                </tr>
                <tr>
                    <td>Upload Image:</td>
                    <td><input type="file" name="img" required></td>
                </tr>

                <tr>
                    <td colspan="2"><center><input type="submit" value="Submit"></center></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>