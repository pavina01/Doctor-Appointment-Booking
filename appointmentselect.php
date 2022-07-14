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
        <div class="container">
            <form class="row g-3" name="myform" action="controller/Appointmentint.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> Appointments Booking</h1>
                </div>
                <div class="col-md-12">
                <div class="col-md-12">
                   <h6>Patientname</h6>
                   <select class="form-control" name="n1" id="" style="width:350px;">
                    <option id="0"></option>
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
                        $sql="select * from patient";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option  value='".$row['Id']."'>".$row['Name']."</option>";
                            
                            }
                        }
                    }
                    
                    ?></select>
                    <span id="t1" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                <div class="col-md-12">
                   <h6>Doctor name</h6>
                   <select class="form-control" name="n2" id="" style="width:350px;">
                    <option id="0"></option>
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
                        $sql="select * from doctor";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option  value='".$row['Id']."'>".$row['DoctorName']."</option>";
                            
                            }
                        }
                    }
                    
                    ?></select>
                    <span id="t2" style="color:blue"> </span>
        </div>
        <div class="col-md-12">
                <div class="col-md-12">
                <div class="col-md-12">
                   <h6>Specialization</h6>
                   <select class="form-control" name="n3" id="" style="width:350px;">
                    <option id="0"></option>
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
                        $sql="select * from doctor";
                        if($res=mysqli_query($con, $sql)){
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_array($res)){
                            echo "<option  value='".$row['Id']."'>".$row['Specialization']."</option>";
                            
                            }
                        }
                    }
                    
                    ?></select>
</select>
<span id="t3" style="color:blue"> </span>
            
        </div>
                <div class="col-md-12">
                    <label for="custlname" class="form-label">AppointmentDate</label>
                    <input type="date" class="form-control" id="" placeholder="Enter date" name="n4" />
                    <span id="t4" style="color:blue"> </span>
                </div>
                <br>
                <br>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Register</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validateform(){
                var pn=document.myform.n1.value;
               var dn=document.myform.n2.value;
                var sp=document.myform.n3.value;
                var date=document.myform.n4.value;
                //var sp=document.myform.n5.value;
              // var Ad=document.myform.n6.value;

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
                if(sp==""||sp==null){
                    document.getElementById("t3").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t3").innerHTML="";
                }
                if(date==""||date==null){
                    document.getElementById("t4").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t4").innerHTML="";
                }
                return s;
            }
        </script> 
    </body>
</html>


