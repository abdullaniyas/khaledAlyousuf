<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>KHALED AL-YOUSUF | GENERAL TRADING LLC | IMPORT/EXPORT - ABOUT US</title>
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
        $result = mysqli_query($con, "SELECT * FROM  about WHERE category='aboutdescr' and deleted='false' ORDER BY id DESC LIMIT 1");
             ?>
        <section class="margin-extra height-400">
            <div class="full-width pull-left height-400 about-banner">
                <div class="center-div">
                    <h2>About Us</h2>
                    <div class="width-70 center-div about-border"></div>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <p><?php echo $row['edescription']; ?></p>
                    
                    <?php } ?>
                    
                    <div class="width-70 center-div about-border"></div>
                </div>
            </div>
            <div class="full-width pull-left about-team">
                <div class="width-700 center-div margin-top-20">
                    <h1>Our Sponsor</h1>
                    <div class="sponsor">
                        <img src="../images/about/sponsor.jpg" alt="Sponosor" />
                        <h3>Lorem Ipsum Lorem</h3>
                        <p>Lorem Ipsum Lorem Lorem Ipsum Lorem</p>
                    </div>
                </div>
            </div>
            <div class="full-width pull-left about-team team-members-cont">
                <div class="width-1100 center-div">
                    <h1>Our Team</h1>
                    <div class="full-width pull-left ">
                        <div class="team-members">
                            <img src="../images/about/mustafa.jpg" alt="Member" />
                            <h3>Musthafa</h3>
                            <h5>Managing director</h5>
                            <p>musthafa@khaledalyouf.com</p>
                        </div>
                        <div class="team-members">
                            <img src="../images/about/no-image.jpg" alt="Member" />
                            <h3>Salam</h3>
                            <h5>Managing Partner</h5>
                            <p>salam@khaledalyouf.com</p>
                        </div>
                        <div class="team-members">
                            <img src="../images/about/no-image.jpg" alt="Member" />
                            <h3>Lorem Ipsum</h3>
                            <h5>Lorem Ipsum Lorem Lorem Ipsum Lorem</h5>
                            <p>xyzxyz@khaledalyouf.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-width pull-left about-team">
                <div class="width-700 center-div shop-certicate">
                    <h1>Our License</h1>
                    <img src="../images/about/certificate.jpg" alt="Sponosor" />
                </div>
            </div>
        </section>
        
        
        <!-- Footer -->

        <?php include 'footer.php'; ?>



<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <script src="../script/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>
<!--        <script type="text/javascript" src="../js/jquery.jcarousellite.js"></script>
        <script type="text/javascript" src="../js/wowslider.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>-->

        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-about").addClass('nav-selected');
            });
        </script>
    </body>
</html>