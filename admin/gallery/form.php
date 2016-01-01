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

$result = mysqli_query($con, "SELECT * FROM  gallery WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/gallery/";
?>
    
    <body>
        <div class="form-container margin-top-100">
            <h2>Add New Lubricant</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Name:
                    </label>
                    <input type="text" name="name" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".gallery-menu").addClass('active');
    });
</script>
</body>
</html>
