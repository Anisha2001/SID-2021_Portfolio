<?php
require('data.php');
$query= "SELECT * FROM home,about,education,skills,project,achievement,contact,`reg-data`";
$run=mysqli_query($conn,$query);
$user_data=mysqli_fetch_array($run);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user_data['name']?></title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- CSS Link -->
    <link rel="stylesheet" href="p_style.css">

</head>

<body>  

<!-- Header Section -->

<header>

    <div class="user">
        <img src="images/pic.jpg" alt="">
        <h3 class="name"><?=$user_data['name']?></h3>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skill">Skills</a></li>
            <li><a href="#pro_exp">Projects and Achievements</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<!-- Home Section -->

<section class="home" id="home">

    <h3>Hello There !</h3>
    <h1>I'm <span><?=$user_data['name']?></span></h1>
    <p>I am a passionate <span><?=$user_data['post']?></span> </p>

    <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>


</section>

<!-- About Section -->

<section class="about" id="about">

<h1 class="heading"> <span>About</span> Me </h1>

<div class="row">
    <div class="abt_para">
        <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt aperiam dolorem dolore, accusamus iure rem distinctio nam, perferendis esse maxime, excepturi est necessitatibus nesciunt autem quasi quas hic cum ipsam.</h3>

    </div>

    <div class="info">
        <h3> <span> Name : </span> <?=$user_data['name']?> </h3>
        <h3> <span> Age : </span> <?=$user_data['age']?> </h3>
        <h3> <span> Qualification : </span> <?=$user_data['qualification']?> </h3>
        <h3> <span> Post : </span> <?=$user_data['post']?> </h3>
        <h3> <span> Languages : </span> <?=$user_data['language']?> </h3>
        <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

   
</div>

</section>

<!-- Education Section -->

<section class="education" id="education">

<h1 class="heading"> My <span>Education</span></h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data['year1']?></span>
        <h3>Matriculation</h3>
        <p><?=$user_data['sclname']?></p>

    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data['year2']?></span>
        <h3>Higher Secondary Education</h3>
        <p><?=$user_data['hsname']?></p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><?=$user_data['year3']?></span>
        <h3>Undergraduate/Graduation</h3>
        <p><?=$user_data['colname']?></p>
        <p><?=$user_data['colb']?></p>
    </div>

</div>

</section>

<!-- Skills Section -->

<section class="skill" id="skill">

<h1 class="heading"><span>Skills</span>  Attained </h1>

<div class="level">

    <h2>
        <span> ADVANCED : </span>
        <h2> <?=$user_data['advance']?> </h2>
    </h2>
    <h2>
        <span> INTERMEDIATE : </span>
        <h2> <?=$user_data['intermediate']?> </h2>
    </h2>
    <h2>
        <span> NOVICE : </span>
        <h2> <?=$user_data['novice']?> </h2>
    </h2>
    
</div>

</section>

<!-- Projects and Achievements Section -->

<section class="pro_exp" id="pro_exp">

    <h1 class="heading"><span>Projects </span>and <span>Achievements</span></h1>

    <div class="project">
        <h2><span>Projects</span></h2>
        <h3><?=$user_data['project1']?></h3>
        <h3><?=$user_data['project2']?></h3>
        <h3><?=$user_data['project3']?></h3>
    
    </div>

    <div class="achievement">
        <h2><span>Achievements</span></h2>
        <h3><?=$user_data['achievement1']?></h3>
        <h3><?=$user_data['achievement2']?></h3>
    </div>


</section>


<!-- Contact Section -->

<section class="contact" id="contact">

<h1 class="heading"> <span>Contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i>  <h3><?=$user_data['email']?></h3> </h3>
            <h3> <i class="fab fa-linkedin-in"></i>  <h3><?=$user_data['linkedin']?></h3> </h3>
            <h3> <i class="fab fa-instagram"></i>  <h3><?=$user_data['instagram']?></h3> </h3>
            <h3> <i class="fab fa-facebook"></i>  <h3><?=$user_data['facebook']?></h3> </h3>
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

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
</a>















<!-- jquery link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JS Link  -->
<script src="p_script.js"></script>


</body>
</html>