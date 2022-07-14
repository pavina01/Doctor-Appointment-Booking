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
   $pn=$_POST['n1'];
   $dn=$_POST['n2'];
   $sp=$_POST['n3'];
   $ad=$_POST['n4'];
   echo "thanking you your registration.";
    echo "<br>";
$sqlins="INSERT INTO appointment(PatientName,DoctorName,Specialization,Appointmenttime,AppointmentDate,AppointmentStatus)values('$pn','$dn','$sp','$ad','pending')";
    if(mysqli_query($con,$sqlins)){
        echo"record inserted successfully";
        header("location:../Appointment.php");
    }
        
    else{
        echo $sqlins."<br/>";
            echo"<h2>error while insert<h2><br>";
            echo mysqli_error($con);
    }
    ?>