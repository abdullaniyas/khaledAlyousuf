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
        
        <!--        <link rel="stylesheet" type="text/css" href="../css/style.css" />
                 Slider 
                <script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
        <!-- Slider ends -->
        <link rel="stylesheet" type="text/css" href="../css/teemstore.css" />
    </head>
    <body>

        <!-- Header -->
        <?php include '../components/header.php'; ?>
            <div class="popup-container hide">
                <div class="popup-inner">
                    <h1>Upload a New Picture</h1>
                    <form>
                        <input type="file" value="Upload image" name="username"/><br/>
                        <input type="submit" value="Upload" class="submit" />
                    </form>
                    
                </div>
            </div>
        <section class="margin-extra background-color height-500">
            
            <div class="width-1024 center-div height-500 blue">
                <div class="width-24 pull-left height-500 personalinfo-tab order-info-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">
                    
                    
                    <div class="full-width pull-left panel-profile height-100 order-information">
                        <!-- Order 1 -->
                        <div class="order-container">
                            <div class="full-width pull-left border-order">
                                <div class="width-14 pull-left order-img">
                                    <img src="../images/3.jpg" alt="order image" />
                                </div>
                                <div class="width-38 pull-left order-desc">
                                    <a href="#">OUTFNasdJS41724535</a>
                                    <p>T shirt<br />
                                    Made by Zazzle Apparel<br />
                                    Basic t-shirt, White, Adult L   </p>
                                </div>
                                <div class="width-10 pull-left order-price">
                                    <p>RS 1300</p>
                                </div>
                                <div class="width-24 pull-left order-delivery">
                                    <p>Delivered on Sat, 8th Feb 2015</p>
                                </div>
                                <div class="width-14 pull-left order-return">
                                    <a href="#">Return</a>
                                </div>
                            </div>
                            <div class="full-width pull-left">
                                <div class="width-30 pull-left order-date">
                                <p>Date: Thursday, 20th Jan 2015</p>
                                </div>
                                <div class="width-30 pull-right order-total">
                                    <p>Total OrderRs 1300</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order 2 -->
                        
                        <div class="order-container">
                            <div class="full-width pull-left border-order">
                                <div class="width-14 pull-left order-img">
                                    <img src="../images/3.jpg" alt="order image" />
                                </div>
                                <div class="width-38 pull-left order-desc">
                                    <a href="#">OUTFNasdJS41724535</a>
                                    <p>T shirt<br />
                                    Made by Zazzle Apparel<br />
                                    Basic t-shirt, White, Adult L   </p>
                                </div>
                                <div class="width-10 pull-left order-price">
                                    <p>RS 1300</p>
                                </div>
                                <div class="width-24 pull-left order-delivery">
                                    <p>Delivered on Sat, 8th Feb 2015</p>
                                </div>
                                <div class="width-14 pull-left order-return">
                                    <a href="#">Return</a>
                                </div>
                            </div>
                            <div class="full-width pull-left">
                                <div class="width-30 pull-left order-date">
                                <p>Date: Thursday, 20th Jan 2015</p>
                                </div>
                                <div class="width-30 pull-right order-total">
                                    <p>Total OrderRs 1300</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order 3 -->
                        
                        <div class="order-container">
                            <div class="full-width pull-left border-order">
                                <div class="width-14 pull-left order-img">
                                    <img src="../images/3.jpg" alt="order image" />
                                </div>
                                <div class="width-38 pull-left order-desc">
                                    <a href="#">OUTFNasdJS41724535</a>
                                    <p>T shirt<br />
                                    Made by Zazzle Apparel<br />
                                    Basic t-shirt, White, Adult L   </p>
                                </div>
                                <div class="width-10 pull-left order-price">
                                    <p>RS 1300</p>
                                </div>
                                <div class="width-24 pull-left order-delivery">
                                    <p>Delivered on Sat, 8th Feb 2015</p>
                                </div>
                                <div class="width-14 pull-left order-return">
                                    <a href="#">Return</a>
                                </div>
                            </div>
                            <div class="full-width pull-left">
                                <div class="width-30 pull-left order-date">
                                <p>Date: Thursday, 20th Jan 2015</p>
                                </div>
                                <div class="width-30 pull-right order-total">
                                    <p>Total OrderRs 1300</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include '../components/footer.php'; ?>



<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <script src="../js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../js/teemstore.js"></script>
<!--        <script type="text/javascript" src="../js/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../js/wowslider.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>-->
<!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#dashboard-table').DataTable();
            } );
        </script>
    </body>
</html>