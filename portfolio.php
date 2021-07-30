<?php
require('data.php');
session_start();
$email=$_SESSION['email'];

//Fetching Data from home
$query1= "SELECT * FROM `home` WHERE `email`= '$email'";
$run1=mysqli_query($conn,$query1);
$user_data1=mysqli_fetch_array($run1);

//Fetching Data from about
$query2= "SELECT * FROM `about` WHERE `email`= '$email'";
$run2=mysqli_query($conn,$query2);
$user_data2=mysqli_fetch_array($run2);

//Fetching Data from education
$query3= "SELECT * FROM `education` WHERE `email`= '$email'";
$run3=mysqli_query($conn,$query3);
$user_data3=mysqli_fetch_array($run3);

//Fetching Data from skills
$query4= "SELECT * FROM `skills` WHERE `email`= '$email'";
$run4=mysqli_query($conn,$query4);
$user_data4=mysqli_fetch_array($run4);

//Fetching Data from project
$query5= "SELECT * FROM `project` WHERE `email`= '$email'";
$run5=mysqli_query($conn,$query5);
$user_data5=mysqli_fetch_array($run5);

//Fetching Data from achievements
$query6= "SELECT * FROM `achievement`WHERE `email`= '$email'";
$run6=mysqli_query($conn,$query6);
$user_data6=mysqli_fetch_array($run6);

//Fetching Data from contacts
$query7= "SELECT * FROM `contact` WHERE `email`= '$email'";
$run7=mysqli_query($conn,$query7);
$user_data7=mysqli_fetch_array($run7);

//Fetching Data from registered data
$query8= "SELECT * FROM `reg-data` WHERE `email`= '$email'";
$run8=mysqli_query($conn,$query8);
$user_data8=mysqli_fetch_array($run8);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user_data1['name']?></title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- CSS Link -->
    <link rel="stylesheet" href="p_style.css">

</head>

<body>  

<!-- Header Section -->

<header>

    <!-- User Photo -->

    <div class="user">
        <img src="images/duser.png" alt="">
        <h3 class="name"><?=$user_data1['name']?></h3>
    </div>

    <!-- Side Navbar -->

    <nav class="navbar">
        <ul>
            <li><a href="#p_home">Home</a></li>
            <li><a href="#p_about">About Me</a></li>
            <li><a href="#p_education">Education</a></li>
            <li><a href="#p_skill">Skills</a></li>
            <li><a href="#p_pro_exp">Projects and Achievements</a></li>
            <li><a href="#p_contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<!-- Home Section -->

<section class="home" id="p_home">

    <h3>Hello There !</h3>
    <h1>I'm <span><?=$user_data1['name']?></span></h1>
    <p>I am a passionate <span><?=$user_data2['post']?></span> </p>

    <a href="#p_about"><button class="btn">About me <i class="fas fa-user"></i></button></a>


</section>

<!-- About Section -->

<section class="about" id="p_about">

<h1 class="heading"> <span>About</span> Me </h1>

<div class="row">
    <div class="abt_para">
        <h3><?=$user_data2['abtpara']?></h3>

    </div>

    <div class="info">
        <h3> <span> Name : </span> <?=$user_data1['name']?> </h3>
        <h3> <span> Age : </span> <?=$user_data2['age']?> </h3>
        <h3> <span> Qualification : </span> <?=$user_data2['qualification']?> </h3>
        <h3> <span> Post : </span> <?=$user_data2['post']?> </h3>
        <h3> <span> Languages : </span> <?=$user_data2['language']?> </h3>
    </div>

   
</div>

</section>

<!-- Education Section -->

<section class="education" id="p_education">

<h1 class="heading"> My <span>Education</span></h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data3['year1']?></span>
        <h3>Matriculation</h3>
        <p><?=$user_data3['sclname']?></p>

    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data3['year2']?></span>
        <h3>Higher Secondary Education</h3>
        <p><?=$user_data3['hsname']?></p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data3['year3']?></span>
        <h3>Undergraduate/Graduation</h3>
        <p><?=$user_data3['colname']?></p>
        <p><?=$user_data3['colb']?></p>
    </div>

</div>

</section>

<!-- Skills Section -->

<section class="skill" id="p_skill">

<h1 class="heading"><span>Skills</span>  Attained </h1>

<div class="level">

    <h2>
        <span> ADVANCED : </span>
        <h2> <?=$user_data4['advance']?> </h2>
    </h2>
    <h2>
        <span> INTERMEDIATE : </span>
        <h2> <?=$user_data4['intermediate']?> </h2>
    </h2>
    <h2>
        <span> NOVICE : </span>
        <h2> <?=$user_data4['novice']?> </h2>
    </h2>
    
</div>

</section>

<!-- Projects and Achievements Section -->

<section class="pro_exp" id="p_pro_exp">

    <h1 class="heading"><span>Projects </span>and <span>Achievements</span></h1>

    <div class="project">
        <h2><span>Projects</span></h2>
        <h3><?=$user_data5['project1']?></h3>
        <h3><?=$user_data5['project2']?></h3>
        <h3><?=$user_data5['project3']?></h3>
    
    </div>

    <div class="achievement">
        <h2><span>Achievements</span></h2>
        <h3><?=$user_data6['achievement1']?></h3>
        <h3><?=$user_data6['achievement2']?></h3>
    </div>


</section>


<!-- Contact Section -->

<section class="contact" id="p_contact">

<h1 class="heading"> <span>Contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i>  <h3><?=$user_data7['email']?></h3> </h3>
            <h3> <i class="fab fa-linkedin-in"></i>  <h3><?=$user_data7['linkedin']?></h3> </h3>
            <h3> <i class="fab fa-instagram"></i>  <h3><?=$user_data7['instagram']?></h3> </h3>
            <h3> <i class="fab fa-facebook"></i>  <h3><?=$user_data7['facebook']?></h3> </h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> Send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>


<!-- scroll top button  -->

<a href="#p_home" class="top">
    <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
</a>








<!-- jquery link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JS Link  -->
<script src="p_script.js"></script>


</body>
</html>