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
    $name=$_POST["n2"];
    $dob=$_POST["n3"];
    $gender=$_POST["n4"];
    $mobile=$_POST["n5"];
    $address=$_POST["n6"];
    echo "thanking you your registration.";
    echo "<br>";
    $sqlins="INSERT INTO patient( Name, Dob, Gender, Mobilenumber, Address)values('$name','$dob','$gender','$mobile','$address')";
    if(mysqli_query($con,$sqlins)){
        echo"record inserted successfully";
    }
    else{
            echo"<h2>error while insert<h2><br>";
            echo $sqlins."<br>".mysqli_error($con);
    }
    $stri='yamu4501@3';
    $pass=str_shuffle($stri);
    echo "<br>";
    echo "use this password login: ".$pass."<br>";
    $sqlins="insert into login1 values('$name','$pass','U')";
    if(mysqli_query($con,$sqlins)){
        echo" login password disply successfully";
    }
    else{
            echo"<h2>error while insert password <h2><br>";
            echo $sqlins."<br>".mysqli_error($con);
    
    }
        ?>
        <button class='btn btn-primary'><a href="login.php">GO BACK</a></button>
             