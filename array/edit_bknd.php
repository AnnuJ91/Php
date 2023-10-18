<?php
    include "connection.php";
    $uid=$_POST['Id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $language=implode(",",$_POST['language']);
    $course=$_POST['course'];

    $image=$_FILES["img"]["name"];
    
    $new_image=rand(1000,9999).'-'.time().'-'.$image;
    
    $upload_path="upload/".$new_image;
    $source_path=$_FILES["img"]["tmp_name"];

  

    if(move_uploaded_file($source_path,$upload_path))
    {
        $sql=mysqli_query($conn,"UPDATE `test2` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`gender`='$gender',
        `dob`='$dob',`language`='$language',`course`='$course',`image`='$upload_path' WHERE `id`='$uid'");
        
        if($sql)
        {
            header('location:display.php');
        }
        else
        {
            echo "unsuccessfull";
        }
     }
     
     
?>