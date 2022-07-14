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
<br>
          <br>
    <h1 align="center">PATIENT</h1>
</div>
    <a href="login.php"><button class="btn btn-danger">LOGOUT</button></a>
  <br><br>
    <table class="table table-stripped">
      <th>Id</th>
        <th>Name</th>
        <th>Dob</th>
        <th>Gener</th>
        <th>Mobilenumber</th>
        <th>Address</th>
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
           $sql="SELECT * from patient where Id='$id'";
        if($res=mysqli_query($con,$sql)){
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    echo"<tr>";
                    echo "<td>".$row['Id']."</td>";
                    echo "<td>".$row['Name']."</td>";
                    echo "<td>".$row['Dob']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['Mobilenumber']."</td>";
                    echo "<td>".$row['Address']."</td>";
                  
                    //echo"<td> <button class='btn btn-info'><a href=\"registereye.php?id=$id\"><i class=\"fa fa-eye\"></i></button></a></td>";
                
                    echo"</tr>";
                    $i=$i+1;
    }
  
    mysqli_free_result($res);
}
}else{
    echo "error:could not able to excute $sql".mysqli_error($con);
  }
?>

