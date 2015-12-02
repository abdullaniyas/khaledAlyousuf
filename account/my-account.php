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
                <div class="width-24 pull-left height-500 personalinfo-tab">
                    <div class="full-width pull-left tab3 tab3-selected margin-top-50 " data-name="profile-information">
                        <p>Profile information</p>
                    </div>
                    <div class="full-width pull-left tab3 margin-top-10" data-name="design-dashboard">
                        <p>Design Dashboard</p>
                    </div>
                    <div class="full-width pull-left tab3 margin-top-10" data-name="order-information">
                        <p>Order Information</p>
                    </div>
                    <div class="full-width pull-left tab3 margin-top-10" data-name="track-order">
                        <p>Track order</p>
                    </div>
                    <div class="full-width pull-left tab3 margin-top-10" data-name="password-change">
                        <p>Change Password</p>
                    </div>
                    <div class="full-width pull-left tab3 margin-top-10" data-name="earnings">
                        <p>Earnings</p>
                    </div>
                </div>
                <div class="width-76 pull-left grey height-500">
                    <div class="full-width pull-left panel-profile height-100 profile-information hide">
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
                    <div class="full-width pull-left panel-profile height-100 design-dashboard grey">
                        <div class="dashboard-container">
                            <table id="dashboard-table" class="display">
                                <thead>
                                    <tr>
                                        <th class="width-27"><p>Name</p></th>
                                        <th class="width-12"><p>likes</p></th>
                                        <th class="width-14"><p>Updated on</p></th>
                                        <th class="width-14"><p>Price</p></th>
                                        <th class="width-14"><p>Sold</p></th>
                                        <th class="width-14"><p>Edit</p></th>
                                        <th class="width-14"><p>Remove</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="dash-name"><p>Name</p></td>
                                        <td class="dash-like"><p>1</p></td>
                                        <td class="dash-update"><p>Name</p></td>
                                        <td class="dash-price"><p>Name</p></td>
                                        <td class="dash-sold "><p>Sold</p></td>
                                        <td class="dash-edit"><a href="#">Edit</a></td>
                                        <td class="dash-remove"><a href="#"></a></td>
                                    </tr>
                                    <tr>
                                        <td class="dash-name"><p>Name</p></td>
                                        <td class="dash-like"><p>5</p></td>
                                        <td class="dash-update"><p>Name</p></td>
                                        <td class="dash-price"><p>Name</p></td>
                                        <td class="dash-sold unsold"><p>unsold</p></td>
                                        <td class="dash-edit"><a href="#">Edit</a></td>
                                        <td class="dash-remove"><a href="#"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="full-width pull-left panel-profile height-100 order-information hide">
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
                    <div class="full-width pull-left panel-profile height-100 track-order hide">
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
                    <div class="full-width pull-left panel-profile height-100 password-change hide">
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
                    <div class="full-width pull-left panel-profile height-100 blue earnings hide">
                        <p>Earnings</p>
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