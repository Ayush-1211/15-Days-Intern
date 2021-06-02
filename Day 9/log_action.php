<?php

    include ('connection.php');
    $errors = array();

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if (count($errors) == 0) {
            $query = "SELECT * FROM user_registration WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              echo "<script>alert('Successfully Logged in');</script>";
              echo "<h1>Successfully Logged in</h1>";
            }else {
                echo "<script>alert('Wrong username or password');</script>";
                echo "<h1>Wrong username or password</h1>";
            }
        }
    }
?>