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

$result = mysqli_query($con, "SELECT * FROM  stationary WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/products/stationary";
?>
    
    <body>
        <div class="form-container margin-top-100">
            <h2>Add New Stationary Item</h2>
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
                        Category :
                    </label>
                    <select name="categoryeng">
                        <option value="">Select a Category</option>
                        <option value="pen">Pen</option>
                        <option value="book">Book</option>
                        <option value="eraser">Eraser</option>
                        <option value="sharpner">Sharpener</option>
                        <option value="scale">Scale</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Show Front:
                    </label>
                    <select name="showfront">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Desciption in English :
                    </label>
                    <textarea name="edescription" rows="4" cols="45">Enter Description</textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Desciption in Arabic :
                    </label>
                    <textarea name="adescription" rows="4" cols="45">Enter Description</textarea>
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
        $(".stationary-menu").addClass('active');
    });
</script>
</body>
</html>
