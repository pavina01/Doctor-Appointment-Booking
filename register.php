<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: grey;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav mr-auto text-secondary">
              <li class="nav-item active">
                <a class="nav-link" href='Appointment.php'>Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='Doctor.php'>Doctor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="font-size:30px" href='register.php'>Patient</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='pendings.php'>PatientPendings</a>
              </li>
             </ul>
            </div>
            <div class='nav-item' align='right'> 
            <a class="btn btn-danger" href="login.php">LOGOUT</a>
            </div>
        <div class="d1">
            <div class="d2" align="center">
                </div>
          </nav>
          <br><br>
    <table class="table table-striped">
        <th>Name</th>
        <th>Dob</th>
        <th>Gener</th>
        <th>Mobilenumber</th>
        <th>Address</th>
        <th>Action</th>
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
           $i=1;

        $sql="SELECT * from patient";
        if($res=mysqli_query($con,$sql)){
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    echo"<tr>";
                    $id=$row["Id"];
                    echo "<td>".$row['Name']."</td>";
                    echo "<td>".$row['Dob']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['Mobilenumber']."</td>";
                    echo "<td>".$row['Address']."</td>";
                  
                    echo"<td> <button class='btn btn-info'><a href=\"registereye.php?id=$id\"><i class=\"fa fa-eye\"></i></button></a></td>";
                
                    echo"</tr>";
                    $i=$i+1;
    }
  echo "</table>";
    mysqli_free_result($res);
}
else{
      echo"";
  }
}else{
    echo "error:could not able to excute $sql".mysqli_error($con);
  }
?>

