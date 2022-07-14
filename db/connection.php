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
?>