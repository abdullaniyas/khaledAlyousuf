<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/alyousuf.css" />
        <!--        <link rel="stylesheet" type="text/css" href="../css/style.css" />
                 Slider 
                <script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
    </head>
    <body>

        <!-- Header -->
        <?php include 'header.php'; ?>

        <section class="margin-extra height-500">
            
            <div class="full-width pull-left">
                <div class="full-width category-banner"  style="background-image: url(../images/banners/banner4.jpg);">
                </div>
                <div class="width-1100 center-div">
                    
                    <div class="full-width pull-left category-products">
                        <h1>Lubricants</h1>
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/ATF-DEXRON.png" alt="Product" />
                                <h2>ATF Dexron II & III</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/AUTOMOTIVE-GEAR-OIL.png" alt="AUTOMOTIVE GEAR OIL" />
                                <h2>Automotive Gear Oil</h2>
                            </a>
                        </div>
                            
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/brealflus.png" alt="Brake Fluid" />
                                <h2>Brake Fluid</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/desilengion.png" alt="Brake Fluid" />
                                <h2>Premium Desil Engine Oil</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/desilengion.png" alt="Premium Diesel Engine Oil" />
                                <h2>Premium Diesel Engine Oil</h2>
                            </a>
                        </div>       
                        <div class="seller-product pull-left">
                            <a href="product.php" >
                                <img src="../images/products/oil/grease.png" alt="Grease Calcium & Lithium" />
                                <h2>Grease Calcium & Lithium</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php">
                                <img src="../images/products/oil/HYDRAULIC-OIL.png" alt="Hydraulic Oil AW" />
                                <h2>Hydraulic Oil AW</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php">
                                <img src="../images/products/oil/INDUSTRIALGEAROIL.png" alt="Industrial Gear Oil" />
                                <h2>Industrial Gear Oil</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php">
                                <img src="../images/products/oil/MARINEENGINEOIL.png" alt="Marine Engine Oil" />
                                <h2>Marine Engine Oil</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="product.php">
                                <img src="../images/products/oil/petrolengn.png" alt="Supreme Petrol Engine Oil" />
                                <h2>Supreme Petrol Engine Oil</h2>
                            </a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include 'footer.php'; ?>



<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <script src="../script/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-oil").addClass('nav-selected');
            });
        </script>
    </body>
</html>