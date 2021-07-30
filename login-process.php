<?php

	// session start
    session_start();

    // including DB connection
    include('data.php');

    // declaring variables
    
    $email = "";
    $password = "";
    $getpassword = "";
    $getpwd = "";
    

    //To get form data
   
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
	
    if(isset($_POST['password_1'])) {
        $password = $_POST['password_1'];
    }

    // if the fields are not empty
    if($email != "" && $password != "") {

        $checkUser = "SELECT * FROM `reg-data` WHERE email = '$email'";
        $checkUserStatus = mysqli_query($conn,$checkUser) or die(mysqli_error($conn));
    }

    if(mysqli_num_rows($checkUserStatus) > 0) { // if user exists!

        $getpassword = mysqli_fetch_assoc($checkUserStatus);
        $getpwd = $getpassword['password'];
        
        if($password == $getpwd){

        $_SESSION['email'] = $email;

        header('Location:details.php');

        } else {
            

            header('Location:login.php?message=Wrong Password');

        }

   
} else {

    header('Location:login.php?message=Unable to login to your account.');

}


?>   
    