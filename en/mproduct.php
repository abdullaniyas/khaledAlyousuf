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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
    </head>
    <body>

        <!-- Header -->
        <?php include 'header.php';
        include_once "../components/dbconnection.php";

        $did = $_GET["id"];
        $target = "../images/products/mobile/";
        $result = mysqli_query($con, "SELECT * FROM mobile WHERE id='".$did."'");
        
?>
        <section class="margin-extra">
        <?php 
while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="product-page center-div">
                <div class="full-width pull-left">
                    <div class="width-50 pull-left">
                        <div class="custom-container widget">
                            <div class="mid">
                                <img alt="1" src="<?php echo $target.$row['image'];?>">
                            </div>
<!--                            <a href="#" class="prev">&lsaquo;</a>
                            <div class="carousel carousel-prod">
                                <ul>
                                    <li><img src="../images/products/caraccess.png"></li>
                                    <li><img src="../images/products/mobile1.png"></li>
                                    <li><img src="../images/products/caraccess.png"></li>
                                    <li><img src="../images/products/stationaries.png"></li>
                                    <li><img src="../images/products/mobile1.png"></li>
                                    <li><img src="../images/products/stationaries.png"></li>
                                </ul>
                            </div>
                            <a href="#" class="next">&rsaquo;</a>-->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="width-50 pull-left product-descr">
                        <div class="full-width pull-left product-head">
                            <h3><?php echo $row['ename']; ?></h3>
                        </div>
                        <div class="full-width pull-left product-body">
                            <div class="width-90 offset-5 pull-left">
                                <h4>Category :</h4><p><a href="<?php echo $row['categoryeng']; ?>.php"><?php echo $row['categoryeng']; ?> </a></p>
                            </div>
                            <div class="width-90 offset-5 pull-left">
                                <h4>Desription :</h4><p><?php echo $row['edescription']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php } ?>
<!--            <div class="full-width pull-left moreproducts-head">
                <div class="width-1024 center-div">
                    <h3>People who bought this also bought</h3>
                </div>
            </div>
            <div class="full-width pull-left">
                <div class="width-1024 center-div">
                    <div class="custom-container moreproducts-tab scrollMore">
                        <a href="#" class="prev1 prev">&lsaquo;</a>
                        <div class="carousel carousel1">
                            <ul>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                                <li><a href="#"><img src="../images/products/stationaries.png"><h2>Books</h2></a></li>
                            </ul>
                        </div>
                        <a href="#" class="next1 next">&rsaquo;</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div> -->
        </section>

        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../script/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript" src="../script/modernizr.custom.28468.js"></script>
<!--        <script type="text/javascript" src="../script/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../script/product.js"></script>-->
        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-mobile").addClass('nav-selected');
            });
        </script>
    </body>
</html>