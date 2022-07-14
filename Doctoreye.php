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
<nav class="navbar navbar-expand-lg navbar-primary  bg-primary">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
       <h2 a href="">APPOINTMENT</h2>
          </div>
</div>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
        <li class="nav-item">
          </div>
        <a class="btn btn-danger" href="login.php">LOGOUT</a>
          </li>
          </nav>
          <br>
    <h1 align="center">DOCTOR APPOINTMENT</h1>
  <br><br>
    <table class="table table-stripped">
      <th>Id</th>
        <th>DoctorName</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobilenumber</th>
        <th>Specialization</th>
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
           $id=$_GET['id'];
           $sql="SELECT * from doctor where email='$id'";
        if($res=mysqli_query($con,$sql)){
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    echo"<tr>";
                    $id=$row["Email"];
                    echo "<td>".$row['Id']."</td>";
                    echo "<td>".$row['DoctorName']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "<td>".$row['Mobilenumber']."</td>";
                    echo "<td>".$row['Specialization']."</td>";
                    echo"<tr>";
                    $i=$i+1;
    }
  
    mysqli_free_result($res);
}
else{
      echo"no record are found";
  }
}else{
    echo "error:could not able to excute $sql".mysqli_error($con);
  }
?>

