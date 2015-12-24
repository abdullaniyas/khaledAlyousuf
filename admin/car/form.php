<?php //
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['username']))    //login session
    header("Location: ../index.php");
?>
<?php
include_once "../header.php";
include_once "../../components/dbconnection.php";

$result = mysqli_query($con, "SELECT * FROM  car WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/products/car";
?>
    
    <body>
        <div class="form-container margin-top-100">
            <h2>Add New Lubricant</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Name in English :
                    </label>
                    <input type="text" name="ename" required/>
                </fieldset>
                <fieldset>
                    <label>
                        Name in Arabic :
                    </label>
                    <input type="text" name="aname" required/>
                </fieldset>
                <fieldset>
                    <label>
                        Category (English):
                    </label>
                    <select name="categoryeng">
                        <option value="">Select a Category</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Grease">Grease</option>
                        <option value="Gear">Gear</option>
                        <option value="Engine">Engine</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Upload an image :
                    </label>
                    <input type="file" name="image" required/>
                </fieldset>
                <fieldset>
                    <button>Submit</button>
                    <a href="index.php">Cancel</a>
                </fieldset>
            </form>
        </div>
<?php include_once "../footer.php"; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".car-menu").addClass('active');
    });
</script>
</body>
</html>
