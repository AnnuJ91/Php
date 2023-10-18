<?php
    include 'connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM test2");
?>
<table border="1">
    <tr>
        <th>Sr No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Address</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Language</th>
        <th>Course</th>  
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php
    $s1=1;
    while($sql_fetch=mysqli_fetch_assoc($sql))    { ?>
    <tr>
        <td><?php echo  $s1++ ?></td>
        <td><?php echo $sql_fetch['name'] ?></td>
        <td><?php echo $sql_fetch['email'] ?></td>
        <td><?php echo $sql_fetch['phone'] ?></td>
        <td><?php echo $sql_fetch['address'] ?></td>
        <td><?php echo $sql_fetch['gender'] ?></td>
        <td><?php echo $sql_fetch['dob'] ?></td>
        <td><?php echo $sql_fetch['language'] ?></td>
        <td><?php echo $sql_fetch['course'] ?></td>
        <td><?php echo "<img src='".$sql_fetch['image']."'height='100' width='100'" ?></td>
        <td><a href="edit_profile.php?ep=<?php echo $sql_fetch['id']?>">Edit </a>
        <a href="delete_profile.php?ep=<?php echo $sql_fetch['id']?>">Delete</a></td>
    </tr>

    <?php } ?>
</table>