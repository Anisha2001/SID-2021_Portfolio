<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">

    <title>Portfolio login</title>

    <!-- CSS Links -->

    <link rel="stylesheet" href="design.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
   
    <!-- External Links -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>


<body>

    <!--  Sections  -->
    
	<div class="wrapper">
        <div class="left-side">
            <img src="images/reg_1.png" alt="">
        </div>
        <div class="right-side">
            <h2>Register</h2>
            <h3>Already a Member?<a href="login.php">Log In</a></h3>
            
            <form action="login-process.php" method="post" enctype="multipart/form-data" id="rform">
            
                <div class="form-row">
                    <span>E-mail</span>
                    <input type="email" class="finput" placeholder="Enter your E-mail" name="email" required>
                </div>
                <div class="form-row">
                    <span>Password</span>
                    <input type="password" class="finput" placeholder="Enter your Password" name="password_1" required>
                </div>
            
                <button class="btn">Register</button>
            
            </form>
            
            

        </div>

    </div>

</body>
