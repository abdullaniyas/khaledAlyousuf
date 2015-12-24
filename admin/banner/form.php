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

$result = mysqli_query($con, "SELECT * FROM  lubricants WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/banners/";
?>
    
    <body>
        <div class="form-container margin-top-100">
            <h2>Add New Lubricant</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Name:
                    </label>
                    <select name="name">
                        <option value="">Select a Category</option>
                        <option value="slider">Slider</option>
                        <option value="lubricants">Lubricants</option>
                        <option value="stationary">Stationary</option>
                        <option value="caracces">Car-Accessories</option>
                        <option value="mobileacces">Mobile-Accessories</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Upload an image :
                    </label>
                    <input type="file" name="banimage" required/>
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
        $(".banner-menu").addClass('active');
    });
</script>
</body>
</html>
