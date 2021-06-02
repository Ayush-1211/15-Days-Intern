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
                    <h2 class="title"><a href="#">Purchase your favourite books</a></h2>
                    <p class="meta"><span class="date">May 28, 2021</span></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>

                <div class="card">
                    <img src="images/purchase1.jpg" alt="Wings of Fire" style="width:40%">
                    <h1>Wings of Fire</h1>
                    <p class="price"><b>250₹</b></p>
                    <p><b>It reflects how simple living, dedication, strong will and hard work led to success. 
                       It also shows how cultural unity impacts the lives of individuals. 
                       The story begins with Kalam as a boy around 1930 in the village of Rameswaram where 
                       he lived with his parents and four brothers and one sister.</b></p>
                    <p><button><b>Add to Cart</b></button></p>
                </div>
                <div class="card">
                    <img src="images/purchase2.jpg" alt="To Kill a Mockingbird" style="width:40%">
                    <h1>To Kill a Mockingbird</h1>
                    <p class="price"><b>550₹</b></p>
                    <p><b>To Kill a Mockingbird is a novel by the American author Harper Lee. 
                    It was published in 1960 and was instantly successful. In the United States, 
                    it is widely read in high schools and middle schools. To Kill a Mockingbird has 
                    become a classic of modern American literature, winning the Pulitzer Prize.</b></p>
                    <p><button><b>Add to Cart</b></button></p>
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