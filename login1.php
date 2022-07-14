<?php session_start();
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
<?php
    $uname=$_POST['name'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM login1 where username='$uname'";
    //echo $sql;
    if($res=mysqli_query($con,$sql)){

        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
                $dbpass = $row['password'];
                $dbrole = $row['role']; 
            }//end of while loop
            if($pass==$dbpass){
                  $_SESSION['sname']  = $uname;
                  $_SESSION['srole']  = $dbrole;
                  echo "welcome " .$uname." ".$dbrole;
                 if ($dbrole == 'A'){
                      header("location: dashboard.php");
                  } else{
                      header("location: register2.php");
                  }
            }else{
                echo "invalid password";

            } 
        }

    } else {
        echo "error while execitng the sql";
    }
 
?>