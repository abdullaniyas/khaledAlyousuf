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
                <div class="width-24 pull-left height-500 personalinfo-tab design-dash-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">

                    <div class="full-width pull-left panel-profile height-100 dashboard-deign grey">
                        <div class="container-dashboard">
                            <div class="full-width pull-left dashboard-header">
                                <div class="width-27 pull-left"><p>Name</p></div>
                                <div class="width-10 pull-left"><p>likes</p></div>
                                <div class="width-14 pull-left"><p>Updated</p></div>
                                <div class="width-12 pull-left"><p>Price</p></div>
                                <div class="width-12 pull-left"><p>Sold</p></div>
                                <div class="width-12 pull-left"><p>Edit</p></div>
                                <div class="width-12 pull-left"><p>Remove</p></div>
                            </div>
                            <div class="full-width pull-left dashboard-body">
                                <div class="full-width pull-left dashboard-row" data-name="row1">
                                    <div class="width-27 pull-left name-dash"><p>Name</p></div>
                                    <div class="width-10 pull-left like-dash"><p>likes</p></div>
                                    <div class="width-14 pull-left update-dash"><p>Updated</p></div>
                                    <div class="width-12 pull-left price-dash"><p>Price</p></div>
                                    <div class="width-12 pull-left sold-dash"><p>Sold</p></div>
                                    <div class="width-12 pull-left edit-dash"><p>Edit</p></div>
                                    <div class="width-12 pull-left remove-dash"><p>Remove</p></div>
                                    <div class="full-width pull-left red row1 hide">
                                        
                                    </div>
                                </div>
                                <div class="full-width pull-left dashboard-row" data-name="row2">
                                    <div class="width-27 pull-left name-dash"><p>Name</p></div>
                                    <div class="width-10 pull-left like-dash"><p>likes</p></div>
                                    <div class="width-14 pull-left update-dash"><p>Updated</p></div>
                                    <div class="width-12 pull-left price-dash"><p>Price</p></div>
                                    <div class="width-12 pull-left sold-dash"><p>Sold</p></div>
                                    <div class="width-12 pull-left edit-dash"><p>Edit</p></div>
                                    <div class="width-12 pull-left remove-dash"><p>Remove</p></div>
                                    <div class="full-width pull-left red row2 hide">
                                        
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="../js/teemstore.js"></script>
<!--        <script type="text/javascript" src="../js/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../js/wowslider.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>-->
    </body>
</html>