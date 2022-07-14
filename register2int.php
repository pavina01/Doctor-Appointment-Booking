<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-black" style="background-color: skyblue;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 align='center'>PATIENT</h1>
            <div class='nav-item' align='right'>
            <a class="btn btn-danger" href="login.php" >LOGOUT</a>
            </div>
          </nav>
    </body>
</html>
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
   $ad=$_POST['n5'];

                    $sql="SELECT Name from patient where Id='$pn'";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                                    $name=$row['Name'];
                            }
                        }
                    }
                    $sql1="SELECT DoctorName,Specialization from doctor where Id='$dn'";
                    if($res=mysqli_query($con, $sql1)){
                        if(mysqli_num_rows($res)>0){
                            while($row=mysqli_fetch_array($res)){
                                $name1=$row['DoctorName'];
                                $sp=$row['Specialization'];
                        }
                    }
                }
   
    echo "<br>";
$sqlins="INSERT INTO appointment(PatientName,DoctorName,Specialization,AppointmentDate,AppointStatus,PatientId,DoctorId)values('$name','$name1','$sp','$ad','pending','$pn','$dn')";
    if(mysqli_query($con,$sqlins)){
        echo"<h2>Your Appointment is in Progress</h2><br/><br/>";
    }
        
    else{
        echo $sqlins."<br/>";
            echo"<h3>error while insert<h3><br>";
            echo mysqli_error($con);
    }
    ?>