<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Book Store Template</title>
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
    <?php
    include('src/navbar.php');
    include('src/header.php');
    ?>

    <div id="wrapper">
        <!-- end #header -->
        <div id="page-bgtop"></div>
        <div id="page">
            <h2 align="center">Book Store</h2>
            <div><img src="images/books.jpg" width="910" height="290" alt="" /></div>
            <div id="content">
                <div class="post">
                    <h2 class="title"><a href="#">Login Here</a></h2>
                    <p class="meta"><span class="date">May 28, 2021</span></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>

                <div class="container">
                    <form action="log_action.php" method="post">

                        <label for="fname">Username</label>
                        <input type="text" id="uname" name="username" placeholder="Enter Username" required>
                        </br></br>
                        <label for="lname">Password</label>
                        <input type="password" id="pass" name="password" placeholder="Enter Your Password" required>
                        </br></br>
                        <a href="registration.php">Have not Registered yet?</a>
                        <br><br>
                        <input type="submit" value="Login" name="login">
                        
                    </form>
                </div>

                <div style="clear: both;">&nbsp;</div>
            </div>
            <!-- end #content -->
            <?php
            include('src/slidebar.php');
            ?>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <div id="page-bgbtm"></div>
        <!-- end #page -->
    </div>
    <div id="footer">
        <p>Template managed by Ayush Prajapati</a></p>
    </div>
    <!-- end #footer -->
</body>

</html>