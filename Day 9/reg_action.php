<?php

    include('connection.php');
    
    $username = "";
    $email    = "";
    $errors = array(); 

    // REGISTER USER
    if (isset($_POST['submit'])) {
      // receive all input values from the form
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      
      if (count($errors) == 0) {
        $query = "INSERT INTO user_registration (firstname, lastname, address, email, username, password) 
              VALUES('$firstname','$lastname','$address','$email','$username','$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        echo "<script>alert('Successfully Registered');</script>";
      }
      echo "<h1>Successfully Registered</h1>";
    }
?>