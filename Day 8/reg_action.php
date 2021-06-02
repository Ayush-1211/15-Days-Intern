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

      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($firstname)) { array_push($errors, "Firstname is required"); }
      if (empty($lastname)) { array_push($errors, "Lastname is required"); }
      if (empty($address)) { array_push($errors, "Address is required"); }
      if (empty($email)) { array_push($errors, "Email is required"); }
      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($password)) { array_push($errors, "Password is required"); }
      
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        $query = "INSERT INTO user_registration (firstname, lastname, address, email, username, password) 
              VALUES('$firstname','$lastname','$address','$email','$username','$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: login.php');
      }
    }
