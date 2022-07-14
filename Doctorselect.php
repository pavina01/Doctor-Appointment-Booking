<!DOCTYPE html>
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
        <div class="container">
            <form class="row g-3" name="myform" action="controller/Doctorint.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center"> Doctor </h1>
                </div>
                <div class="col-md-12">
                    <label for="custlname" class="form-label">DoctorName</label>
                    <input type="text" class="form-control" id="" placeholder="Enter name" name="n2" />
                    <span id="t2" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label> Gender</label>
                    <select class="form-label"  name="n3">
					 <option>    </option>
                      <option>Male</option>
                      <option>Female</option>
</select>
                    <span id="t3" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="custlname" class="form-label">Email</label>
                    <input type="text" class="form-control" id="" placeholder="Enter name" name="n4" />
                    <span id="t4" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                    <label for="Custcity" class="form-label">Mobilenumber</label>
                    <input type="num" class="form-control" id=" " placeholder="Enter num" name="n5" />
                    <span id="t5" style="color:blue"> </span>
                </div>
                <div class="col-md-12">
                <div class="col-md-12">
                    <label> Specialization</label>
                    <select class="form-label"  name="n6">
					 <option>    </option>
                      <option>eye specialist</option>
                      <option>ortho</option>
                      <option>skin specialist</option>
</select>
<span id="t6" style="color:blue"> </span>
            
        </div>
        <div class="col-md-12">
                    <label for="Custcity" class="form-label">Appointmentdate</label>
                    <input type="date" class="form-control" id=" " placeholder="Enterdate" name="n7" />
                    <span id="t7" style="color:blue"> </span>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Register</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validateform(){
                var id=document.myform.n1.value;
                var name=document.myform.n2.value;
                var gender=document.myform.n3.value;
                var email=document.myform.n4.value;
                var num=document.myform.n5.value;
                var sp=document.myform.n6.value;
                var ad=document.myform.n7.value;
               
                var s=true;
                if(id==""||id==null){
                    document.getElementById("t1").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t1").innerHTML="";
                }
                if(name==""||name==null){
                    document.getElementById("t2").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t2").innerHTML="";
                }
                if(gender==""||gender==null){
                    document.getElementById("t3").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t3").innerHTML="";
                }
                if(email==""||email==null){
                    document.getElementById("t4").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t4").innerHTML="";
                }
                if(num==""||num==null){
                    document.getElementById("t5").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t5").innerHTML="";
                }
                if(sp==""||sp==null){
                    document.getElementById("t6").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t6").innerHTML="";
                }
                if(ad==""||ad==null){
                    document.getElementById("t7").innerHTML="This field is required";
                    s=false;
                }
                else{
                    document.getElementById("t7").innerHTML="";
                }
                
                return s;
            }
        </script> 
    </body>
</html>


