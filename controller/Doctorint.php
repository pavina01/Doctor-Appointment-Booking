<?php
$con=mysqli_connect(
   "localhost",
   "root",
   "Pavina@01",
   "projectdb");
   if($con===false){
      die ("error:could not connection");
       mysqli_connect_error();
   }
   $name=$_POST['n2'];
   $gender=$_POST['n3'];
   $email=$_POST['n4'];
   $num=$_POST['n5'];
   $checkup=$_POST['n6'];
   $c=$_POST['n7'];
;
   
   echo "thanking you your registration.";
    echo "<br>";
$sqlins="INSERT INTO doctor(DoctorName,Gender,Email,Mobilenumber,Specialization,Appointmentdate)values('$name','$gender','$email','$num','$checkup','$c')";
    if(mysqli_query($con,$sqlins)){
        echo"record inserted successfully";
        header("location:../Doctor.php");
    }
        
    else{
            echo"<h2>error while insert<h2><br>";
            echo mysqli_error($con);
    }
    ?>