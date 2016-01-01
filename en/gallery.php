<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>KHALED AL-YOUSUF | GENERAL TRADING LLC | IMPORT/EXPORT - LUBRICANTS/Engine</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/alyousuf.css" />
        <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />
        <!--        <link rel="stylesheet" type="text/css" href="../css/style.css" />
                 Slider 
                <script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <style>
            .photo-tab ul {
                padding: 0;
                margin: 0;
            }
            .photo-tab ul li {
                list-style: none;
            }
            .photo-articles {
                border: 1px solid #2a2a2a;
                float: left;
                height: 152px;
                margin: 15px;
                overflow: hidden;
                width: 243px;
            }
            .photo-articles a {
                float: left;
                width: 100%;
                height: auto;
            }
            .photo-articles a img {
                width: 100%;
            }
            .thumbs {
                text-align: center;
            }
            .thumbs:after {
                content: " ";
                display: block;
                clear: both;
            }
            .thumbs a {
                display: inline-block;
                margin: 0 20px 0 0;
            }
            thumbs img
            {
                width: auto;
                height: 170px;
            }
            .gallery img {
                border: 1px solid #ccc;
                background: #fff;
                padding: 9px;
            }
            .thumbs img {
            }
            .thumbs a:hover img {
                border-color: #999;
            }
            .gallery {
                height: 300px;
                padding: 30px 0;
            }
            .slider {
                height: 475px;
            }
            .links {
                padding: 30px 50px;
            }
            .links a {
                line-height: 30px;
            }

            .hidden {
                display: none;
            }
            .content, .alt_content{
                color: black;
            }

            .content li, .content > p{
                padding: 5px
            }
        </style>
        <!-- Slider ends -->
    </head>
    <body>

        <!-- Header -->
        <?php include 'header.php'; ?>

        <section class="margin-extra height-500">

            <div class="full-width pull-left">
                <?php
                include_once "../components/dbconnection.php";
                ?>
                <div class="gallery-cont center-div">

                    <div class="full-width pull-left category-products">
                        <h1>Gallery</h1>
                        <div class="container alt_content photo-tab full-width pull-left height-300" >
                            <ul id="example-1" class="alt_content thumbs pull-left full-width height-300">
                        <?php
                         $result = mysqli_query($con, "SELECT * FROM  gallery WHERE deleted='false' ORDER BY id DESC");
                         $target = "../images/gallery/";
                        ?>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <li class="photo-articles"><a href="<?php echo $target . $row['image'];  ?>"><img src="<?php echo $target . $row['image'];  ?>" /></a></li>

                        <?php }
                        ?>
</ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>

        <!-- include Tos "R"Us -->
        <script type="text/javascript" language="javascript" src="../script/jquery.tosrus.min.all.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(".nav-items").removeClass('nav-selected');
                $('#example-1 a').tosrus({
                    buttons: 'inline',
                    pagination: {
                        add: true,
                        type: 'thumbnails'
                    }
                });
            });
        </script>
    </body>
</html>