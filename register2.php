<DOCTYPE html>
<html>
    <head>
        <title> Register With Us </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
        <style>
            body{
                background-color:white;
            }
            div.container{
                width:400px;
                margin:30px 35%;
                padding:10px 25px 20px 25px;
                border:1px solid black;
                border-radius: 10px;
            
            }
            h1.h2{
                margin: 20px 10px;
            }
            #B1{
                width:350px;
            }
        </style>
    </head>
    <body>
    
<nav class="navbar navbar-expand-lg navbar-black" style="background-color: skyblue;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav mr-auto text-dark">
              <li class="nav-item active">
              </li>
            <h1 class="h1">PATIENT</h1>

</div>
<div class='nav-item' align=''> 
            <a class="btn btn-outline-secondary" href="register.php"> Patient </a>
            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class='nav-item' align='right'> 
            <a class="btn btn-danger" href="login.php">LOGOUT</a>
            </div>
          </nav>
          <br>
        <div class="container">
            <form class="row g-3" name="myform" action="register2int.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> PATIENT BOOKING</h1>
                </div>
                <div class="col-md-12">
                <div class="col-md-12">
                   <h6>Patientname</h6>
                   <select class="form-control" name="n1" id="id" style="width:350px;">
                    <option></option>
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
                        $sql="SELECT * from patient";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option value='".$row['Id']."'>".$row['Name']."</option>";
                            
                            }
                        }
                    }
                    
                    ?></select>
                    <span id="t1" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                <div class="col-md-12">
                   <h6> Doctor </h6>
                   <select class="form-control" name="n2" id="" style="width:350px;">
                    <option id="0"></option>
                    <?php
                        $sql="select * from doctor";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option value='".$row['Id']."'>".$row['DoctorName']." - ".$row['Specialization']."</option>";
                            
                            }
                        }
                    }
                    
                    ?></select>
                    <span id="t2" style="color:blue"> </span>
        </div>           
                <div class="col-md-12">
                   <h6>AppointmentDate</h6>
                   <input type='date' class='form-control' name='n5' autocomplete='off'/>
                    <span id="t5" style="color:blue"> </span>
        </div>
                <br>
                <br>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">BOOK</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validateform(){
                var pn=document.myform.n1.value;
               var dn=document.myform.n2.value;
                var date2=document.myform.n5.value;

                var s=true;
                if(pn==""||pn==null){
                    document.getElementById("t1").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t1").innerHTML="";
                }
                if(dn==""||dn==null){
                    document.getElementById("t2").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t2").innerHTML="";
                }
                if(date2==""||date2==null){
                    document.getElementById("t5").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t5").innerHTML="";
                }
                return s;
            }
        </script> 
    </body>
</html>


