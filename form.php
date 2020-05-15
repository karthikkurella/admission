<?php
    $conn = mysqli_connect("localhost", "root", "", "admission");
    $sname = $_POST['std_name'];
    $fname=$_POST['stdf_name'];
    $mname=$_POST['stdm_name'];
    $snum = $_POST['stdconnum'];
    $fnum=$_POST['fconnum'];
    $mnum=$_POST['mconnum'];
    $gen=$_POST['malefemale'];
    $apply_for=$_POST['radiogrp'];
    $schn=$_POST['list1'];
    $std_num9=$_POST['stdconnum9'];
    $std_num10=$_POST['stdconnum10'];
    $std_num11=$_POST['stdconnum11'];
    $std_num12=$_POST['stdconnum12'];
    $std_numd=$_POST['stdconnumd'];
    $semail = $_POST['std_email_id'];
    $femail = $_POST['father_email_id'];
    $result1=mysqli_query($conn," SELECT `stud_cap`,`Seat_Count` FROM `school` WHERE `name`='$schn' AND `supporting`='$apply_for'");
    // $row = mysqli_fetch_assoc($result1);
    if (mysqli_num_rows($result1) > 0) {
        while($row = mysqli_fetch_assoc($result1)) {
            if($row['stud_cap']==$row['Seat_Count'])
    {
        echo "All Seats Are Filled";
    }
    else{       
    $result=mysqli_query($conn,"SELECT * FROM `form` WHERE `sname`='$sname'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
	echo "User already applied for admission";
	//header("refresh:2;url=welcome.php");
    }
    else{
    $reg= " INSERT INTO `form` (sname,fname,mname,snum,fnum,mnum,gen,apply_for,schn,std_num9,std_num10,std_num11,std_num12,std_numd,semail,femail) values ('$sname','$fname','$mname','$snum','$fnum','$mnum','$gen','$apply_for','$schn','$std_num9','$std_num10','$std_num11','$std_num12','$std_numd','$semail','$femail')";
    mysqli_query($conn,$reg);
    echo "Registration Done";
    $result2=mysqli_query($conn,"UPDATE `school` SET `Seat_Count`=(`Seat_Count` + 1) WHERE `name`='$schn' AND `supporting`='$apply_for'");
    }
} 
}
    }
    else{
        echo ".....";
    }
?>