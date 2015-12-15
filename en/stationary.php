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
                <div class="full-width category-banner"  style="background-image: url(../images/banners/banner.jpg);">
                </div>
                <div class="width-1100 center-div">
                    
                    <div class="full-width pull-left category-products">
                        <h1>Stationary Accessories</h1>
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/book.png" alt="Book" />
                                <h2>Book</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/color-pencil.png" alt="Color Pencil" />
                                <h2>Color Pencil</h2>
                            </a>
                        </div>
                            
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/color-pencil2.png" alt="Color Pencil" />
                                <h2>Color Pencil</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/crayons.png" alt="crayons" />
                                <h2>Crayons</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/eraser.png" alt="Eraser" />
                                <h2>Eraser</h2>
                            </a>
                        </div>       
                        <div class="seller-product pull-left">
                            <a href="#" >
                                <img src="../images/products/stationary/eraser2.png" alt="Eraser" />
                                <h2>Eraser</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#">
                                <img src="../images/products/stationary/pen.png" alt="Pen" />
                                <h2>Pen</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#">
                                <img src="../images/products/stationary/pen2.png" alt="Pen" />
                                <h2>Pen</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#">
                                <img src="../images/products/stationary/sharpner.png" alt="Sharpner" />
                                <h2>Sharpner</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#">
                                <img src="../images/products/stationary/sharpner2.png" alt="Sharpner" />
                                <h2>Sharpner</h2>
                            </a>
                        </div>
                        <div class="seller-product pull-left">
                            <a href="#">
                                <img src="../images/products/stationary/sharpner3.png" alt="Sharpner" />
                                <h2>Sharpner</h2>
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
                $(".nav-stationary").addClass('nav-selected');
            });
        </script>
    </body>
</html>