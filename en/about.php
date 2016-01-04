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
        <?php
        include 'header.php';
        include_once "../components/dbconnection.php";
        ?>
        <section class="margin-extra height-400">
            <div class="full-width pull-left height-400 about-banner">
                <div class="center-div">
                    <h2>About Us</h2>
                    <div class="width-70 center-div about-border"></div>
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM  about WHERE category='aboutdescr' and deleted='false' ORDER BY id DESC LIMIT 1");
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
                        <?php
                        $result = mysqli_query($con, "SELECT * FROM  about WHERE category='sponsor' and deleted='false' ORDER BY id DESC LIMIT 1");
                        $target1 = "../images/about/";
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <img src="<?php echo $target1 . $row['image']; ?>" alt="Sponosor" />
                            <h3><?php echo $row['ename']; ?></h3>
                            <p><?php echo $row['eposition']; ?></p>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="full-width pull-left about-team team-members-cont">
                <div class="width-1100 center-div">
                    <h1>Our Team</h1>
                    <div class="full-width pull-left ">
                        <div class="team-members">
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM  about WHERE category='team1' and deleted='false' ORDER BY id DESC LIMIT 1");
                            $target1 = "../images/about/";
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <img src="<?php echo $target1 . $row['image']; ?>" alt="Sponosor" />
                                <h3><?php echo $row['ename']; ?></h3>
                                <h5><?php echo $row['eposition']; ?></h5>
                                <p><?php echo $row['email']; ?></p>

                            <?php } ?>
                        </div>
                        <div class="team-members">
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM  about WHERE category='team2' and deleted='false' ORDER BY id DESC LIMIT 1");
                            $target1 = "../images/about/";
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <img src="<?php echo $target1 . $row['image']; ?>" alt="Sponosor" />
                                <h3><?php echo $row['ename']; ?></h3>
                                <h5><?php echo $row['eposition']; ?></h5>
                                <p><?php echo $row['email']; ?></p>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--        <script src="../script/jquery-1.11.1.js"></script>-->
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-about").addClass('nav-selected');
            });
        </script>
    </body>
</html>