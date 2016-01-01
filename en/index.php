<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>KHALED AL-YOUSUF | GENERAL TRADING LLC | IMPORT/EXPORT</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/alyousuf.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <!-- Slider -->
        <script type="text/javascript" src="../script/modernizr.custom.28468.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
    </head>
    <body>

        <div class="landing-page">

            <!-- Header -->
            <?php include 'header.php'; ?>
            <!-- header ends here -->	


            <div class="clear"></div>
            <div class="main-slider margin-extra" id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <?php
                        include_once "../components/dbconnection.php";

                        $result = mysqli_query($con, "SELECT * FROM  banners WHERE deleted='false' and name='slider' ORDER BY id DESC LIMIT 3");
                        $target = "../images/banners/";
                        ?>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <li>
                                <!--                            <h1>STATIONARY ITEMS</h1>
                                                            <h5>School, office, home</h5>
                                                            <span><a href="#">See More</a></span>-->
                                <img src="<?php echo $target . $row['banimage']; ?>" alt="4" id="wows1_0"/>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <a href="#" title="4">1</a>
                        <a href="#" title="1">2</a>
                        <a href="#" title="2">3</a>
                        <a href="#" title="3">4</a>
                    </div>
                </div>
            </div>
            <div class="scroller_anchor" style="position: absolute; bottom: 30px; width: 100%; height: 10px;"></div>
        </div>
        <section>
            <div class="section-home panels stationary-comp">
                <div class="categories " >
                    <div class="title-head margin-top-20 pull-left full-width">
                        <h3>Stationary Items<span><a href="stationary.php">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev1 prev">&lsaquo;</a>
                        <div class="carousel carousel1">
                            <ul>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM  stationary WHERE deleted='false' and showfront='yes' ORDER BY id DESC LIMIT 8");
                                $target = "../images/products/stationary/";
                                ?>

                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                    <li>
                                        <a href="#"><img src="<?php echo $target . $row['image']; ?>" alt="Color Pencil" /></a>
                                        <h3><a href="<?php echo $row['categoryeng'];   ?>.php"><?php echo $row['categoryeng'];   ?></a></h3>
                                        <h2><a href="#" ><?php echo $row['ename']; ?></a></h2>
                                    </li>

                                <?php } ?>
                            </ul>
                        </div>
                        <a href="#" class="next1 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>


                </div>
            </div>
            <div class="banner banner1 margin-top-20 pull-left full-width">
            </div>
            <div class="section-home panels">
                <div class="categories " >
                    <div class="title-head pull-left full-width">
                        <h3>Car Accessories<span><a href="car-accessories.php">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev2 prev">&lsaquo;</a>
                        <div class="carousel carousel2">
                            <ul>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM  car WHERE deleted='false' and showfront='yes' ORDER BY id DESC LIMIT 8");
                                $target = "../images/products/car/";
                                ?>

                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                    <li>
                                        <a href="#"><img src="<?php echo $target . $row['image']; ?>" alt="Color Pencil" /></a>
                                        <h3><a href="<?php echo $row['categoryeng'];   ?>.php"><?php echo $row['categoryeng'];   ?></a></h3>
                                        <h2><a href="#" ><?php echo $row['ename']; ?></a></h2>
                                    </li>

                                <?php } ?>
                            </ul>
                        </div>
                        <a href="#" class="next2 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>


            <div class="banner banner2 pull-left full-width">
            </div>

            <div class="section-home panels">
                <div class="categories " >
                    <div class="title-head pull-left full-width">
                        <h3>Mobile Accessories<span><a href="mobile-accessories.php">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev3 prev">&lsaquo;</a>
                        <div class="carousel carousel3">
                            <ul>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM  mobile WHERE deleted='false' and showfront='yes' ORDER BY id DESC LIMIT 8");
                                $target = "../images/products/mobile/";
                                ?>

                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                    <li>
                                        <a href="#"><img src="<?php echo $target . $row['image']; ?>" alt="Color Pencil" /></a>
                                        <h3><a href="<?php echo $row['categoryeng'];   ?>.php"><?php echo $row['categoryeng'];   ?></a></h3>
                                        <h2><a href="#" ><?php echo $row['ename']; ?></a></h2>
                                    </li>

                                <?php } ?>
                            </ul>
<!--                            <ul>
                                <li><a href="#"><img src="../images/products/mobile/ear-phones2.png" alt="Mobile Accessories" /><h2>Sony Earphones</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/iphone-6plus.png" alt="Mobile Accessories" /><h2>iPhone 6 Plus</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/headset.png" alt="Mobile Accessories" /><h2>Headset</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-pouch2.png" alt="Mobile Accessories" /><h2>Mobile Pouch</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-stand.png" alt="Mobile Accessories" /><h2>Mobile Stand</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/selfie-stick.png" alt="Mobile Accessories" /><h2>Selfie Stick</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-stand2.png" alt="Mobile Accessories" /><h2>Mobile Stand</h2></a></li>-->
<!--                                <li><a href="#"><img src="../images/products/mobile1.png"><h2>Mobile Covers</h2><h4>Rs : <span>499</span></h4></a></li>-->

<!--                            </ul>-->
                        </div>
                        <a href="#" class="next3 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <!--            <div class="banner banner3 pull-left full-width">
                        </div>-->
            <div class="section-home panels">
                <div class="categories " >
                    <div class="title-head pull-left full-width">
                        <h3>Lubricants<span><a href="lubricants.php">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev2 prev">&lsaquo;</a>
                        <div class="carousel carousel2">
                            <ul>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM  lubricants WHERE deleted='false' ORDER BY id DESC LIMIT 6");
                                $target = "../images/products/oil/";
                                ?>

                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                    <li>
                                        <a href="#"><img src="<?php echo $target . $row['image']; ?>" alt="Color Pencil" /></a>
                                        <h3><a href="<?php echo $row['categoryeng'];   ?>.php"><?php echo $row['categoryeng'];   ?></a></h3>
                                        <h2><a href="#" ><?php echo $row['ename']; ?></a></h2>
                                    </li>

                                <?php } ?>
                            </ul>
                        </div>
                        <a href="#" class="next2 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>
                </div>
<!--                <div class="best-seller margin-bottom-65 pull-left full-width">
                    <div class="title-head pull-left full-width">
                        <h3>Best Seller<span><a href="#">view all</a></span></h3>
                    </div>
                    <div class="seller-product pull-left width-19 height-270 offset-1">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/mobile/mobile-pouch2.png" alt="Mobile Accessories" />
                            <h2>Mobile-Pouch</h2>
                        </a>
                    </div>
                </div>-->
            </div>


        </section>

        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--        <script src="../script/jquery-1.11.1.js"></script>-->
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript" src="../script/home.js"></script>
        <script type="text/javascript" src="../script/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../script/wowslider.js"></script>
        <script type="text/javascript" src="../script/script.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(".nav-items").removeClass('nav-selected');
                $(".nav-home").addClass('nav-selected');
            });
        </script>
    </body>
</html>
