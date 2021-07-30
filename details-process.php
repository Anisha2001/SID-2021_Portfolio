<?php

	// session start
    session_start();

    // including DB connection
    include('data.php');

    // declaring variables

    //Home variables
    $photo="";
    $name="";

    //About variables
    $abt_para="";
    $age=""; 
    $qualify=""; 
    $post=""; 
    $lang="";

    //Education variables
    $y1=""; 
    $y2=""; 
    $y3=""; 
    $scl="";
    $hs=""; 
    $ug="";
    $ugb="";
    
    //Skills variables
    $adv=""; 
    $itmdt="";
    $nov="";
    
    //Project variables
    $p1=""; 
    $p2=""; 
    $p3=""; 
    
    //Achievement variables
    $e1=""; 
    $e2=""; 
    
    //Contact variables
    $mail="";
    $insta=""; 
    $linkedn=""; 
    $fb=""; 
    
    //To get form data

    //Navbar 
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    //About
    if(isset($_POST['a_para'])) {
        $abt_para = $_POST['a_para'];
    }
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if(isset($_POST['qualification'])) {
        $qualify = $_POST['qualification'];
    }
    if(isset($_POST['post'])) {
        $post = $_POST['post'];
    }
    if(isset($_POST['language'])) {
        $lang = $_POST['language'];
    }

    //Education
    if(isset($_POST['syear'])) {
        $y1 = $_POST['syear'];
    }
    if(isset($_POST['hsyear'])) {
        $y2 = $_POST['hsyear'];
    }
    if(isset($_POST['clyear'])) {
        $y3 = $_POST['clyear'];
    }
    if(isset($_POST['sclname'])) {
        $scl = $_POST['sclname'];
    }
    if(isset($_POST['hsname'])) {
        $hs = $_POST['hsname'];
    }
    if(isset($_POST['clname'])) {
        $ug = $_POST['clname'];
    }
    if(isset($_POST['branch'])) {
        $ugb = $_POST['branch'];
    }

    //Skills
    if(isset($_POST['adskill'])) {
        $adv = $_POST['adskill'];
    }
    if(isset($_POST['iskill'])) {
        $itmdt = $_POST['iskill'];
    }
    if(isset($_POST['novskill'])) {
        $nov = $_POST['novskill'];
    }

    //Projects
    if(isset($_POST['project_1'])) {
        $p1 = $_POST['project_1'];
    }
    if(isset($_POST['project_2'])) {
        $p2 = $_POST['project_2'];
    }
    if(isset($_POST['project_3'])) {
        $p3 = $_POST['project_3'];
    }

    //Achievements
    if(isset($_POST['acv_1'])) {
        $e1 = $_POST['acv_1'];
    }
    if(isset($_POST['acv_2'])) {
        $e2 = $_POST['acv_2'];
    }

    //Contact
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if(isset($_POST['insta'])) {
        $insta = $_POST['insta'];
    }
    if(isset($_POST['ldn'])) {
        $linkedn = $_POST['ldn'];
    }
    if(isset($_POST['fbook'])) {
        $fb = $_POST['fbook'];
    }

    
  
            $insertUser_1 = "INSERT INTO `home`(`email`,`name`) VALUES('$email','$name')";
            $insertUserStatus_1 = mysqli_query($conn,$insertUser_1) or die(mysqli_error($conn));
            
            $insertUser_2 = "INSERT INTO `about`(`email`,`abtpara`,`age`,`qualification`,`post`,`language`) VALUES('$email','$abt_para','$age','$qualify','$post','$lang')";
            $insertUserStatus_2 = mysqli_query($conn,$insertUser_2) or die(mysqli_error($conn));

            $insertUser_3 =  "INSERT INTO `education`(`email`,`year1`,`year2`,`year3`,`sclname`,`hsname`,`colname`,`colb`) VALUES('$email','$y1','$y2','$y3','$scl','$hs','$ug','$ugb')";
            $insertUserStatus_3 = mysqli_query($conn,$insertUser_3) or die(mysqli_error($conn));

            $insertUser_4 =  "INSERT INTO `skills`(`email`,`advance`,`intermediate`,`novice`) VALUES('$email','$adv','$itmdt','$nov')";
            $insertUserStatus_4 = mysqli_query($conn,$insertUser_4) or die(mysqli_error($conn));

            $insertUser_5 =  "INSERT INTO `project`(`email`,`project1`,`project2`,`project3`) VALUES('$email','$p1','$p2','$p3')";
            $insertUserStatus_5 = mysqli_query($conn,$insertUser_5) or die(mysqli_error($conn));

            $insertUser_6 =  "INSERT INTO `achievement`(`email`,`achievement1`,`achievement2`) VALUES('$email','$e1','$e2')";
            $insertUserStatus_6 = mysqli_query($conn,$insertUser_6) or die(mysqli_error($conn));

            $insertUser_7 =  "INSERT INTO `contact`(`email`,`instagram`,`linkedin`,`facebook`) VALUES('$email','$insta','$linkedn','$fb')";
            $insertUserStatus_7 = mysqli_query($conn,$insertUser_7) or die(mysqli_error($conn));

            if($insertUserStatus_1 && $insertUserStatus_2 && $insertUserStatus_3 && $insertUserStatus_4 && $insertUserStatus_5 && $insertUserStatus_6 && $insertUserStatus_7) { // if the user is successfully registered!
      
                header('Location:portfolio.php');
           
            }

       



 ?>   