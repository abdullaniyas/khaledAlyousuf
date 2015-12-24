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

                        $result = mysqli_query($con, "SELECT * FROM  banners WHERE deleted='false' and name='slider' ORDER BY id DESC");
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
            <!--<nav>
                
                <ul class="width-1024">
                    <li class="nav-items nav-selected nav-home" data-name="section-home">HOME</li>
                    <li class="nav-items nav-shop" data-name="section-shop">SHOP</li>
                    <li class="nav-items nav-design" data-name="section-design">DESIGN</li>
                    <li class="nav-items nav-gallery" data-name="section-gallery">GALLERY</li>
                    <li class="nav-items nav-getintouch" data-name="section-getintouch">GET IN TOUCH</li>
                </ul>
            </nav>-->
        </div>
        <section>
            <div class="section-home panels">
                <div class="categories " >
                    <div class="title-head margin-top-20 pull-left full-width">
                        <h3>Stationary Items<span><a href="#">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev1 prev">&lsaquo;</a>
                        <div class="carousel carousel1">
                            <ul>
                                <li><a href="#"><img src="../images/products/stationary/color-pencil.png" alt="Color Pencil" /><h2>Color Pencil</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationary/eraser2.png" alt="Eraser" /><h2>Eraser</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationary/color-pencil2.png" alt="Color Pencil" /><h2>Color Pencil</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationary/pen.png" alt="Color Pencil" /><h2>Pen</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationary/sharpner3.png" alt="Sharpner" /><h2>Sharpner</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationary/book.png" alt="Book" /><h2>Book</h2></a></li>
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
                        <h3>Car Accessories<span><a href="#">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev2 prev">&lsaquo;</a>
                        <div class="carousel carousel2">
                            <ul>
                                <li><a href="#"><img src="../images/products/car/headlight.png" alt="headlight" />h2>Headlight</h2></a></li>
                                <li><a href="#"><img src="../images/products/car/headlight2.png" alt="headlight" /><h2>Headlight</h2></a></li>
                                <li><a href="#"><img src="../images/products/car/car-stickers2.png" alt="Car Stickers" /><h2>Car Stickers</h2></a></li>
                                <li><a href="#"><img src="../images/products/car/tyre.png" alt="tyre" /><h2>Tyre</h2></a></li>
                                <li><a href="#"><img src="../images/products/car/car-stickers.png" alt="Car Stickers" /><h2>Car Stickers</h2></a></li>
                                <li><a href="#"><img src="../images/products/car/wheel-cap.png" alt="Wheel Cap" /><h2>Wheel Cap</h2></a></li>
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
                        <h3>Mobile Accessories<span><a href="#">view all</a></span></h3>
                    </div>

                    <div class="custom-container slider-tab scrollMore">
                        <a href="#" class="prev3 prev">&lsaquo;</a>
                        <div class="carousel carousel3">
                            <ul>
                                <li><a href="#"><img src="../images/products/mobile/ear-phones2.png" alt="Mobile Accessories" /><h2>Sony Earphones</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/iphone-6plus.png" alt="Mobile Accessories" /><h2>iPhone 6 Plus</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/headset.png" alt="Mobile Accessories" /><h2>Headset</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-pouch2.png" alt="Mobile Accessories" /><h2>Mobile Pouch</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-stand.png" alt="Mobile Accessories" /><h2>Mobile Stand</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/selfie-stick.png" alt="Mobile Accessories" /><h2>Selfie Stick</h2></a></li>
                                <li><a href="#"><img src="../images/products/mobile/mobile-stand2.png" alt="Mobile Accessories" /><h2>Mobile Stand</h2></a></li>
<!--                                <li><a href="#"><img src="../images/products/mobile1.png"><h2>Mobile Covers</h2><h4>Rs : <span>499</span></h4></a></li>-->
                                
                            </ul>
                        </div>
                        <a href="#" class="next3 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            
<!--            <div class="banner banner3 pull-left full-width">
            </div>-->
            <div class="section-home panels">
                <div class="best-seller margin-bottom-65 pull-left full-width">
                    <div class="title-head pull-left full-width">
                        <h3>Best Seller<span><a href="#">view all</a></span></h3>
                    </div>
                    <div class="seller-product pull-left width-19 height-270 offset-1">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/mobile/mobile-pouch2.png" alt="Mobile Accessories" />
                            <h2>Mobile-Pouch</h2>
                        </a>
                    </div>
                    <div class="seller-product pull-left">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/car/car-stickers2.png" alt="Car Stickers" />
                            <h2>Car Stickers</h2>
                        </a>
                    </div>
                    <div class="seller-product pull-left">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/mobile/mobile-stand.png" alt="Mobile Accessories" />
                            <h2>Mobile Stand</h2>
                        </a>
                    </div>
                    <div class="seller-product pull-left">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/car/tyre2.png" alt="tyre" />
                            <h2>Tyre</h2>
                        </a>
                    </div>
                    <div class="seller-product pull-left">
                        <a href="#" class="height-270 full-width pull-left">
                            <img src="../images/products/stationary/color-pencil2.png" alt="Color Pencil" />
                            <h2>Color Pencil</h2>
                        </a>
                    </div>
                </div>
                <!--                <div class="uploads margin-top-20">
                                    <div class="upload-container">
                                        <div class="pull-left width-37 selfie">
                                            <button>Upload Selfie</button>
                                        </div>
                                        <div class="pull-left width-37 events offset-26">
                                            <button>Company Events</button>
                                        </div>
                                    </div>
                                </div>-->
            </div>
<!--            <div class="banner banner4 pull-left full-width">
            </div>-->


        </section>

        <!-- Footer -->

        <?php include 'footer.php'; ?>



<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <script src="../script/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript" src="../script/home.js"></script>
        <script type="text/javascript" src="../script/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../script/wowslider.js"></script>
        <script type="text/javascript" src="../script/script.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-home").addClass('nav-selected');
            });
        </script>
    </body>
</html>
