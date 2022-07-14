<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" href="controller/css/bootstrap.min.css" />
        <link rel="stylesheet" href="controller/css/style.css" />
        <link rel="stylesheet" href="controller/css/home.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                margin:50px;
            }
            div.d1{
                margin:70px 10%;
                height:400px;
                width:1000px;
            }
            div.d2{
                background-color:darkgoldenrod;
                margin:40px 0px 20px 35%;
                border:1px solid black;
                border-radius:10px;
                width:250px;
                height:250px;
            }
            div.d3{
                background-color:firebrick;
                margin:-273px 49% 5px 40px;
                border:1px solid black;
                border-radius:10px;
                width:250px;
                height:250px;
            }
            div.d4{
                background-color:skyblue;
                margin:-254px 0px 20px 65%;
                border:1px solid black;
                border-radius:10px;
                width:250px;
                height:250px;
            }
            div.r1{
                margin:-40px 0px 0px 0px;
            }
        </style>
    </head>
    <body>
        <?php session_start(); include 'db/connection.php';
        if(isset($_SESSION['sname'])){ ?>
         <nav class="navbar navbar-expand-lg navbar-blue" style="background-color: grey;">
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
                <a class="nav-link" href='pendings.php'>Pendings</a>
              </li>
             </ul>
            </div>
            <div class='nav-item' align='right'> 
            <a class="btn btn-danger" href="login.php">LOGOUT</a>
            </div>
          </nav>
                <div>
                    
                </div>
                <div class="card" style="width: 18rem; margin-top:110px ;background-color: #FF5370;">
                <div class="card-body">
                <i class="fa fa-address-book" style="font-size:30px; margin-left:90px"></i>
                   <h5 class="card-title">Doctor details count</h5>
                   <?php
                    $sql1="SELECT Id from doctor";
                    if($res=mysqli_query($con,$sql1)){
                        $count1=mysqli_num_rows($res);
                        echo $count1;
                    }else{
                        echo $sql1."<br/>Error: ".mysqli_error($con);
                    }
                ?>
                         <h6 class="card-subtitle mb-2 text-muted"></h6>
                                             
  </div>
</div>
               
                
            </div>
            <div class="card" style="width: 18rem; margin-left:600px; margin-top:-120px; background-color: #FFB64D ;" >
                <div class="card-body" style="marign-left:200px;">
                <i class="fa fa-bars" style="font-size:30px; margin-left:90px"></i>
                   <h5 class="card-title">Total Appointments</h5>
                   <?php
                    $sql1="SELECT DoctorId from appointment";
                    if($res=mysqli_query($con,$sql1)){
                        $count1=mysqli_num_rows($res);
                        echo $count1;
                    }else{
                        echo $sql1."<br/>Error: ".mysqli_error($con);
                    }
                ?>
                         <h6 class="card-subtitle mb-2 text-muted"></h6>
                                             
  </div>
</div>
<div class="card" style="width: 18rem; margin-left:300px; margin-top:-125px; background-color:#4099ff ;">
                <div class="card-body">
                <i class="fa fa-bars" style="font-size:30px; margin-left:90px;  "></i>
                   <h5 class="card-title">patient Count</h5>
                   <?php
                    $sql1="SELECT Id from patient";
                    if($res=mysqli_query($con,$sql1)){
                        $count1=mysqli_num_rows($res);
                        echo $count1;
                    }else{
                        echo $sql1."<br/>Error: ".mysqli_error($con);
                    }
                ?>
                         <h6 class="card-subtitle mb-2 text-muted"></h6>
                                             
  </div>
</div>
            
        <!-- </div> -->
        <?php }else{
            echo "Please login to see details";
            echo "<br/> <a href='index.php'> <button class='btn btn-primary'> Login </button> </a>";
        } ?>
    </body>
</html>
