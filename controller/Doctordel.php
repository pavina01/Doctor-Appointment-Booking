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
    
    function validate($delete){
     global $con;
    $mysqli="DELETE FROM doctor where  Email='$delete'";
    if($res=mysqli_query($con,$mysqli)){
    echo "Data deleted ";
    }else{echo "error";
        echo mysqli_error($con);
        }
    }
    validate($id);
    
    ?>
     <a class="btn btn-primary" href="../login.php">GO BACK</a>

