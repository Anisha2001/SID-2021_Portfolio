<?php

	// session start
    session_start();

    // include DB connection
    include('data.php');

    // declaring variables
    $name = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";

    // get form data
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if(isset($_POST['password_1'])) {
        $password_1 = $_POST['password_1'];
    }
    if(isset($_POST['password_2'])) {
        $password_2 = $_POST['password_2'];
    }

   
	if($name != "" && $email != "" && $password_1 != "" && $password_2 != "") { // if the form fields are not empty!
        
        $checkUser = "SELECT * FROM `reg-data` WHERE email = '$email'";
        $checkUserStatus = mysqli_query($conn,$checkUser) or die(mysqli_error($conn));

        if(mysqli_num_rows($checkUserStatus) > 0) { // if user exists!

            header('Location: registration.php?message=You have already registered!');

        } else {

            if($password_1 == $password_2) { // if the password fields match!
            
                $insertUser = "INSERT INTO `reg-data`(`name`,email,`password`) VALUES('$name','$email','$password_1')";
                $insertUserStatus = mysqli_query($conn,$insertUser) or die(mysqli_error($conn));
    
                if($insertUserStatus) { // if the user is successfully registered!
      
                    header('Location:login.php?message=You have registered successfully!');
    
                }  else { // if user is not registered successfully!
    
                    header('Location:registration.php?message=Unable to register!');
    
                }
    
            } else { // if password fields dont match!
    
                header('Location:registration.php?message=Password fields do not match!');
    
            }

        }


    } else { // if any of the fields are empty!

        header('Location: ../register.php?message=Please fill the fields properly!');  

    }
?>

    