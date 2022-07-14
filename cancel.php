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
    $id=$_GET['id'];
    $sql="UPDATE appointment set AppointStatus='Cancelled' where Id=$id";
    echo $sql;
   if($result=mysqli_query($con,$sql)){
        header("Location:cancelled.php");
   }
   // header("location:Appointment.php");
?>
