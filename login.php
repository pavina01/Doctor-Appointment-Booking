<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
            body{
                background-color:white;
            }
            div.container{
                width:400px;
                margin:60px 35%;
                padding:10px 35px 40px 25px;
                border:1px solid black;
                border-radius: 10px;
            }
            h1.h2{
                margin: 60px 30px;
            }
            #B1{
                width:350px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-black" style="background-color: grey;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav mr-auto text-dark">
              <li class="nav-item active">
              </li>
            <h1 align="center">LOGIN</h1>
</div>
            <div class='nav-item' align='right'> 
            <a class="btn btn-danger" href="index.php">LOGOUT</a>
            </div>
          </nav>
          <br>
<div class="container">
            <form class="row g-3" action="login1.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center">LOGIN </h1>
                </div>
                <div class="col-md-12">
                    <label for="Username" class="form-label">username</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter username" name="name" required/>
                </div>
                <div class="col-md-12">
                    <label for="Password" class="form-label">password</label>
                    <input type="password" class="form-control" id=" " placeholder="Enter password" name="password"required/>
                </div>
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Submit</button>
                </div>
        </div>
    </form>  

</body>
</html>