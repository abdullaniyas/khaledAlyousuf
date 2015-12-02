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
                <div class="width-24 pull-left height-500 personalinfo-tab change-password-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">
                    <div class="full-width pull-left panel-profile height-100 password-change">
                        <form>
                            <table>
                                <tr>
                                    <td><p>Email Id</p></td>
                                    <td><input type="text" name="email" class="pinfo-text" required/></td>
                                </tr>
                                <tr>
                                    <td><p>Old Password</p></td>
                                    <td><input type="password" name="old-password" class="pinfo-text" required/></td>
                                </tr>
                                <tr>
                                    <td><p>New Password</p></td>
                                    <td><input type="password" name="new-password" class="pinfo-text" required/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button>Confirm</button></td>
                                </tr>
                            </table>
                        </form>
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
    </body>
</html>