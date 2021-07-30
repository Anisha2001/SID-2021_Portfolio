<?php
session_start();
echo $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link rel="stylesheet" href="details_style.css">
</head>

<body>
    <div class="container">
        <div class="title_1">Fill in The Details</div>

        <form action="details-process.php" method="post" enctype="multipart/form-data" id="rform">
            <div class="user_d">
                <div class="input-box">
                    <span class="detail">Full Name</span>
                    <input type="text" class="input" placeholder="Enter your Name" name="name" required>
                </div>
                <div class="input-box">
                    <span class="detail">Age</span>
                    <input type="text" class="input" placeholder="Enter your Age" name="age" required>
                </div>
                <div class="input-box">
                    <span class="detail">Qualification</span>
                    <input type="text" class="input" placeholder="Enter your Qualification" name="qualification" required>
                </div>
                <div class="input-box">
                    <span class="detail">Post</span>
                    <input type="text" class="input" placeholder="Enter your Post" name="post" required>
                </div>
                <div class="input-box">
                    <span class="detail">Language(s)</span>
                    <input type="text" class="input" placeholder="Enter the languages you know" name="language" required>
                </div>
                <div class="input-box">
                    <span class="detail">About Yourself</span>
                    <input type="text" class="text" placeholder="Describe Yourself within 70 words" name="a_para" required>
                </div>

                <div class="d-heading">Education </div>

                <div class="heading">Matriculation </div>

                <div class="input-box">
                    <span class="detail">School Name</span>
                    <input type="text" class="input" placeholder="Enter your School Name" name="sclname" required>
                </div>
                <div class="input-box">
                    <span class="detail">Year of Passing</span>
                    <input type="text" class="input" placeholder="Enter Year of Passing" name="syear" required>
                </div>

                <div class="heading">Higher Secondary Education </div>

                <div class="input-box">
                    <span class="detail">School Name</span>
                    <input type="text" class="input" placeholder="Enter your School Name" name="hsname" required>
                </div>
                <div class="input-box">
                    <span class="detail">Year of Passing</span>
                    <input type="text" class="input" placeholder="Enter Year of Passing" name="hsyear" required>
                </div>

                <div class="heading">Graduation/Undergraduate </div>

                <div class="input-box">
                    <span class="detail">College Name</span>
                    <input type="text" class="input" placeholder="Enter College Name" name="clname" required>
                </div>
                <div class="input-box">
                    <span class="detail">Branch</span>
                    <input type="text" class="input" placeholder="Enter your Branch" name="branch" required>
                </div>
                <div class="input-box">
                    <span class="detail">Year of Passing</span>
                    <input type="text" class="input" placeholder="Enter Year of Passing" name="clyear" required>
                </div>

                <div class="d-heading">Skills </div>

                <div class="input-box">
                    <span class="detail">Advanced Skills</span>
                    <input type="text" class="text" placeholder="Enter skills you excell in" name="adskill" required>
                </div>
                <div class="input-box">
                    <span class="detail">Intermediate Skills</span>
                    <input type="text" class="text" placeholder="Enter skills you are good at" name="iskill" required>
                </div>
                <div class="input-box">
                    <span class="detail">Novice Skills</span>
                    <input type="text" class="text" placeholder="Enter skills you are learning" name="novskill" required>
                </div>

                <div class="d-heading">Projects</div>

                <div class="input-box">
                    <span class="detail"> First Project </span>
                    <input type="text" class="text" placeholder="Enter your Project" name="project_1" required>
                </div>
                <div class="input-box">
                    <span class="detail"> Second Project </span>
                    <input type="text" class="text" placeholder="Enter your Project" name="project_2" required>
                </div>
                <div class="input-box">
                    <span class="detail"> Third Project </span>
                    <input type="text" class="text" placeholder="Enter your Project" name="project_3" required>
                </div>

                <div class="d-heading">Achievements </div>

                <div class="input-box">
                    <span class="detail"> First Achievement </span>
                    <input type="text" class="text" placeholder="Enter Achievement" name="acv_1" required>
                </div>
                <div class="input-box">
                    <span class="detail"> Second Achievement </span>
                    <input type="text" class="text" placeholder="Enter Achievement" name="acv_2" required>
                </div>

                <div class="d-heading">Contact </div>

                <div class="input-box">
                    <span class="detail">E-mail</span>
                    <input type="text" class="input" placeholder="Enter your E-mail" name="email" required>
                </div>
                <div class="input-box">
                    <span class="detail">Linkedin</span>
                    <input type="text" class="input" placeholder="Enter Linkedin username" name="ldn" required>
                </div>
                <div class="input-box">
                    <span class="detail">Facebook</span>
                    <input type="text" class="input" placeholder="Enter Facebook username " name="fbook" required>
                </div>
                <div class="input-box">
                    <span class="detail">Instagram</span>
                    <input type="text" class="input" placeholder="Enter Instagram username " name="insta" required>
                </div>

                <button class="btn"> Submit </button>
                
            </div>

        </form>

    </div>
</body>
</html>