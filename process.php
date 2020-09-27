<?php
require_once "database/connection.php";
require_once "include/header.php";
   

//Form Submission Code
if(isset($_POST['submit'])){
    //Code to handle form
    
    //code for valdating the form
    $errors = [];

    //Name validation
    if(empty($_POST['name'])){
        $errors[] = "Name cannot be empty";
    }
    else{
        $name = trim($_POST['name']);
    }

    //Email Validation
    if(empty($_POST['email'])){
        $errors[] = "Email cannot be empty";
    }
    else{
        $email = trim($_POST['email']);
    }
    //Username Validation
    if(empty($_POST['username'])){
        $errors[] = "Username cannot be empty";
    }
    else{
        $username = trim($_POST['username']);
    }

    //Password Validation
    if(empty($_POST['phoneno'])){
        $errors[] = "Phone number cannot be empty";
    }
    else{
        $phoneno = $_POST['phoneno'];
    }

    //Present Address
    if(empty($_POST['presentadd'])){
        $errors[] = "present Address must be entered";
    }
    else{
        $presentadd = trim($_POST['presentadd']);
    }

    //Permenent Address
    if(empty($_POST['permenentadd'])){
        $errors[] = "Permenent Address must be entered";
    }
    else{
        $permenentadd = trim($_POST['permenentadd']);
    }

    //CNIC
    if(empty($_POST['cnic'])){
        $errors[] = "CNIC Address must be entered";
    }
    else if(!(strlen($_POST['cnic']) == 15)){
        $errors[] = "CNIC Address must be 15 digit";
    }
    else{
        $cnic = trim($_POST['cnic']);
    }

    //Date of Birth
    if(empty($_POST['dob'])){
        $errors[] = "Date of Birth cannot be empty";
    }
    else{
        $dob = trim($_POST['dob']);
    }


    //if there are no errors
    if(empty($errors)){
        //Insert the record in the database
        $dbc = db_connect();
        $sql = "INSERT INTO firstone VALUES(NULL,'$name','$email', '$username','$phoneno','$presentadd','$permenentadd',
        '$cnic','$dob')";
        $result = mysqli_query($dbc,$sql);
        if($result){
            echo "<div class = 'alert alert-success'> Data Entered Successfully </div>";
        }
        else{
            echo  mysqli_error($result) ;
            //echo "<div class = 'alert alert-danger'> Data Cannot be Entered due to error </div>";   
        }
        db_close($dbc);
    }
    else{
        //Display the errors
        foreach($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
    }
}
else{
    //Form is not submitted
    //code
     echo "<div class = 'alert alert-danger'>Form is not submitted </div>";
}
?>