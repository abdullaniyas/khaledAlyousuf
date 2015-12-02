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
                <div class="width-24 pull-left height-500 personalinfo-tab track-order-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">
                                       
                    
                    <div class="full-width pull-left panel-profile height-100 track-order">
                        <div class="track-container">
                            <div class="full-width pull-left track-head">
                                <div class="width-27 pull-left track-details">
                                    <p>Order Details</p>
                                </div>
                                <div class="width-10 pull-left track-approval">
                                    <p>Approval</p>
                                </div>
                                <div class="width-14 pull-left track-process">
                                    <p>Processing</p>
                                </div>
                                <div class="width-14 pull-left track-ship">
                                    <p>Shipping</p>
                                </div>
                                <div class="width-16 pull-left track-delivery">
                                    <p>Delivery</p>
                                </div>
                                <div class="width-18 pull-left track-subtotal">
                                    <p>Subtotal</p>
                                </div>
                            </div>
                            <div class="full-width pull-left track-body">
                                <div class="width-27 pull-left track-details">
                                    <img src="../images/3.jpg" alt="order image" />
                                    <h1>Roadster Men Pack of 3 T - shirts</h1>
                                    <p>Material, Size, Fit</p>
                                </div>
                                <div class="width-10 pull-left track-approval">
                                    <div class="full-width pull-left ts-tracker">
                                        <h5 class="round-track" data-name="ts-popup1"><span></span></h5>
                                        <div class="ts-popup1 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                <h1>Your order has been Placed</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="width-14 pull-left track-process">
                                    <div class="full-width pull-left ts-tracker">
                                        <h5 class="round-track" data-name="ts-popup2"><span></span></h5>
                                        <h5 class="round-track" data-name="ts-popup3"><span></span></h5>
                                        <h5 class="round-track" data-name="ts-popup4"><span></span></h5>
                                        <div class="ts-popup2 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                <h1>Your order has been confirmed</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                        <div class="ts-popup3 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                <h1>Waiting for the pickup</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                        <div class="ts-popup4 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                <h1>Picked up by courier</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="width-14 pull-left track-ship">
                                    <div class="full-width pull-left ts-tracker">
                                        <h5 class="round-track" data-name="ts-popup5"><span></span></h5>
                                        <h5 class="round-track" data-name="ts-popup6"><span></span></h5>
                                        <h5 class="round-track" data-name="ts-popup7"><span></span></h5>
                                        <div class="ts-popup5 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                 <h1>waiting to reach nearest hub</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                        <div class="ts-popup6 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                 <h1>Reached a hub near you</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                        <div class="ts-popup7 ts-trackpop hide">
                                            <div class="full-width pull-left">
                                                 <h1>Your item has been delivered</h1>
                                                <p>Your order has been confirmed and wil be packed soon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="width-16 pull-left track-delivery">
                                    <div class="full-width pull-left ts-tracker">
                                        <a href="#">On Sat, 8th Nov</a>
                                    </div>
                                </div>
                                <div class="width-18 pull-left track-subtotal">
                                    <div class="full-width pull-left">
                                        <p>Rs 1400</p>
                                        <h4>Selling Price <span>Rs 1250</span><br />
                                        Delivery Charge <span>Rs 150</span><br />
                                        Price <span>Rs 1400</span></h4>
                                        
                                    </div>
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