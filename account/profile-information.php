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
                <div class="width-24 pull-left height-500 personalinfo-tab personal-info-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">
                    <div class="full-width pull-left panel-profile height-100 profile-information">
                        <div class="profile-image show-popup" >
                            <img src="../images/yuvraj.jpg" alt="profile-image" />
                            <h3>Yuvraj Singh</h3>
                            <div class="upload-image"><p>Change the image</p></div>
                        </div>
                        <div class="profile-saved">
                            <table>
                                <tr>
                                    <td><p>First Name</p><span>:</span></td>
                                    <td><h5>Yuvraj</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Last Name</p><span>:</span></td>
                                    <td><h5>Singh</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Gender</p><span>:</span></td>
                                    <td><h5>Male</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Address 1</p><span>:</span></td>
                                    <td><h5>11th Street, 4th Cross, Chandigarh</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Address 2</p><span>:</span></td>
                                    <td><h5></h5></td>
                                </tr>
                                <tr>
                                    <td><p>City</p><span>:</span></td>
                                    <td><h5>Chandigarh</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Zip Code</p><span>:</span></td>
                                    <td><h5>678373</h5></td>
                                </tr>
                                <tr>
                                    <td><p>Phone Number</p><span>:</span></td>
                                    <td><h5>9876543210</h5></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><span class="edit">Edit</span></td>

                                </tr>
                            </table>
                        </div>
                        <form class="hide">
                            <table>
                                <tr>
                                    <td><p>User Name</p></td>
                                    <td><input type="text" name="username" class="pinfo-text" required/></td>
                                </tr>
                                <tr>
                                    <td><p>First Name</p></td>
                                    <td><input type="text" name="fname" class="pinfo-text" required/></td>
                                </tr>
                                <tr>
                                    <td><p>Last Name</p></td>
                                    <td><input type="text" name="lname" class="pinfo-text" required /></td>
                                </tr>
                                <tr>
                                    <td><p>Gender</p></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gender" value="Male" class="" required /><label>Male</label>
                                        <input type="radio" name="gender" value="Female" class="" required /><label>Female</label></td>
                                </tr>
                                <tr>
                                    <td><p>Address 1</p></td>
                                    <td><textarea class="pinfo-text"></textarea></td>
                                </tr>
                                <tr>
                                    <td><p>Address 2</p></td>
                                    <td><textarea class="pinfo-text"></textarea></td>
                                </tr>
                                <tr>
                                    <td><p>City</p></td>
                                    <td><input type="text" name="city" class="pinfo-text" required /></td>
                                </tr>
                                <tr>
                                    <td><p>Zip Code</p></td>
                                    <td><input type="text" name="zip" class="pinfo-text" required /></td>
                                </tr>
                                <tr>
                                    <td><p>Phone Number</p></td>
                                    <td><input type="text" name="telephone" class="pinfo-text" required /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="save">SAVE</button></td>

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
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#dashboard-table').DataTable();
            } );
        </script>
    </body>
</html>