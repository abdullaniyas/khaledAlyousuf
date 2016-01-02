<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>KHALED AL-YOUSUF | GENERAL TRADING LLC | IMPORT/EXPORT - CONTACT</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/alyousuf.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
    </head>
    <body>

        <!-- Header -->
        <?php include 'header.php'; ?>

        <section class="margin-extra  ">
            <div class="full-width pull-left contact-page">
                <div class="contact-map full-width">
                    <div class="full-width pull-left google-maps ">
                        <div id="map"></div>
                    </div>
                    <div class="address-contact">
                        <h5>Address</h5>
                        <ul>
                            <li>Maryam Tower, Room No 203,</li>
                            <li>Near Golden Coffee Shop,</li>
                            <li>Nuimia, Ajman, UAE - 7774</li>  
                            <li>067438427</li>
                        </ul>
                    </div>
                </div>
                <div class="full-width pull-left height-300 contact-form">
                    <h1>Write To Us</h1>
                    <form id="form-contact" class="styled" action="../components/form.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <ol>
                                <li class="form-row">
                                    <h3>Name :</h3><input type="text" name="name" id="name" class="input required " placeholder="Your Name" required/><br/>
                                </li>
                                <li class="form-row">
                                    <h3>Email :</h3><input type="email" name="email" id="email" class="input required email" placeholder="Email Address" required/><br/>
                                </li>
                                <li class="form-row">
                                    <h3>Contact :</h3><input type="text" name="contact" id="contact" class="input required " placeholder="Contact Number" required/><br/>
                                </li>
                                <li class="form-row">
                                    <h3>Message :</h3><textarea name="descr" id="descr" class="input-text required " placeholder="Your Message" aria-invalid="false" aria-required="true" rows="3" cols="43" required></textarea><br/>
                                </li>
                                <li class="form-row">
                                    <h3></h3><button class="btn-submit" >Send</button>
                                </li>
                            </ol>
                        </fieldset>
                    </form>
                    <div id="result">
                        <!--                            <div class='success-message'>
                                                        <span class='close-msg'>X</span>
                                                        <p>Thank you for your enquiry. A member of our team will contact you shortly.</p>
                                                    </div>-->
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->

        <?php include 'footer.php'; ?>



        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--        <script src="../script/jquery-1.11.1.js"></script>-->
        <script language="javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3"></script>
        <script type="text/javascript" src="../script/alyousuf.js"></script>
        <script type="text/javascript" src="../script/main.js"></script>
        <script type="text/javascript" src="../components/formsubmit.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".nav-items").removeClass('nav-selected');
                $(".nav-contact").addClass('nav-selected');
            });
        </script>
    </body>
</html>