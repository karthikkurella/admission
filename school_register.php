<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "admission");
    $name = $_POST['schname'];
    $contact = $_POST['stdconnum'];
    $stud_cap = $_POST['std_cap'];
    $address=$_POST['address'];
    $supporting=$_POST['radiogrp'];
    $email=$_POST['std_email_id'];
    $count=0;
    if(isset($_FILES['image']))
    {
    $files=$_FILES['image'];
    $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `name`='$name' and `supporting`='$supporting'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
	echo "User already Taken";
	//header("refresh:2;url=welcome.php");
    }
    else{
            $errors= array();
            // $file_name = $files['name'];
            // $file_size =$files['size'];
            // $file_tmp =$files['tmp_name'];
            // $file_type=$files['type'];
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $text1 = explode('.',$_FILES['image']['name']);
            $text=end($text1);
            $file_ext=strtolower($text);
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            // if($file_size > 2097152){
            //    $errors[]='File size must be excately 2 MB';
            // }
            
            if(empty($errors)==true){
                $destf="images/".$file_name;
               move_uploaded_file($file_tmp,$destf);
               $reg= " INSERT INTO `school` (name,contact,stud_cap,address,supporting,email,image,Seat_Count) values ('$name','$contact','$stud_cap','$address','$supporting','$email','$destf','$count')";
               mysqli_query($conn,$reg);
               echo "Registration Done";
            //    echo "Success";
            }else{
               print_r($errors);
               echo "Registration Not Done";
            }
         }
      }
      else{
         echo "Registration Not";
      }
?> 