<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>KHALED AL-YOUSUF | GENERAL TRADING LLC | IMPORT/EXPORT - STATIONARY</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/alyousuf.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
    </head>
    <body>

        <!-- Header -->
        <?php include 'header.php'; ?>

        <section class="margin-extra height-500">

            <div class="full-width pull-left">
                <?php
                include_once "../components/dbconnection.php";
                $result = mysqli_query($con, "SELECT banimage FROM  banners WHERE name='stationary' ORDER BY id DESC LIMIT 1");
                        $target1 = "../images/banners/";
                         
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="full-width category-banner" style="background-image: url(<?php echo $target1 . $row['banimage']; ?>);">
                    
                </div>
                <?php } ?>
                <div class="width-1100 center-div">

                    <div class="full-width pull-left category-products">
                        <h1>Books</h1>
                        <?php
                        

                        $result = mysqli_query($con, "SELECT * FROM  stationary WHERE deleted='false' and categoryeng='book' ORDER BY id DESC");
                        $target = "../images/products/stationary/";
                        ?>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <div class="seller-product pull-left">
                                <a href="#" >
                                    <img src="<?php echo $target . $row['image']; ?>" alt="image" height="auto" width="100%"/>
                                </a>
                                <h3><a href="<?php echo $row['categoryeng']; ?>.php"><?php echo $row['categoryeng']; ?></a></h3>
                                <h2><a href="#" ><?php echo $row['ename']; ?></a></h2>
                            </div>


                        <?php }
                        ?>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--        <script src="../script/jquery-1.11.1.js"></script>-->
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript" src="../script/modernizr.custom.28468.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-stationary").addClass('nav-selected');
            });
        </script>
    </body>
</html>