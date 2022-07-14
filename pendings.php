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
            $sql="SELECT  FROM appointment INNER JOIN patient ON patient.Id=appointment.Id where appointment.AppointStatus='Pending'";
            ?>
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
                <a class="nav-link" href='register.php'>Patient</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size:40px"href='pendings.php'>PatientPendings</a>
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
  <br><br>
  <h1 align="center">Patient Pendings</h1>
  <br><br>
    <table class='table table-striped'>
       <tr> <th>patientName</th>
        <th>DoctorName</th>
        <th>Specialization</th>
        <th>Appointmentdate</th>
        <th>AppointmentStatus</th>
      <th colspan='2'> Actions </th></tr>
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

        $sql="SELECT * from appointment where AppointStatus='pending'";
        if($res=mysqli_query($con,$sql)){
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    echo"<tr>";
                    $id=$row["Id"];
                    echo "<td>".$row['patientName']."</td>";
                    echo "<td>".$row['DoctorName']."</td>";
                    echo "<td>".$row['Specialization']."</td>";
                    echo "<td>".$row['AppointmentDate']."</td>"; 
                    echo "<td>".$row['AppointStatus']."</td>";
                    echo"<td> <button class='btn btn-info'><a href=\"confirmed.php?id=$id\"' onclick='return confirm(\"Do you want to confirmed this Appointment\")'>CONFIRM</button></a></td>";
                    echo"<td> <button class='btn btn-danger'><a href=\"cancel.php?id=$id\"' onclick='return confirm(\"Do you want to cancel this Appointment\")'>CANCEL</button></a></td>";
                    echo"</tr>";
                    $i=$i+1;
    } echo "</table>";
  
    mysqli_free_result($res);
}
else{
      echo"";
  }
}else{
    echo "error:could not able to excute $sql".mysqli_error($con);
  }
?>

