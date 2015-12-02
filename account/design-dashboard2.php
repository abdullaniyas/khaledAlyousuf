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
                <div class="width-24 pull-left height-500 personalinfo-tab design-dash-menu">
                    <?php include 'account-menu.php'; ?>
                </div>
                <div class="width-76 pull-left grey height-500">
                    
                    <div class="full-width pull-left panel-profile height-100 design-dashboard grey">
                        <div class="dashboard-container">
                            <table id="dashboard-table" class="display">
                                <thead>
                                    <tr>
                                        <th class="width-27"><p>Name</p></th>
                                        <th class="width-12"><p>likes</p></th>
                                        <th class="width-14"><p>Updated</p></th>
                                        <th class="width-14"><p>Price</p></th>
                                        <th class="width-14"><p>Sold</p></th>
                                        <th class="width-14"><p>Edit</p></th>
                                        <th class="width-14"><p>Remove</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="desidash-row" data-name="row1">
                                        <td class="dash-name"><p>Name</p></td>
                                        <td class="dash-like"><p>1</p></td>
                                        <td class="dash-update"><p>Name</p></td>
                                        <td class="dash-price"><p>Name</p></td>
                                        <td class="dash-sold "><p>Sold</p></td>
                                        <td class="dash-edit"><a href="#">Edit</a></td>
                                        <td class="dash-remove"><a href="#"></a></td>
                                    </tr>
                                    <tr class="desidash-row" data-name="row2">
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