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

$result = mysqli_query($con, "SELECT * FROM  about WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/about/";
?>
    
    <body>
        <div class="form-container margin-top-100">
            <h2>Add New Lubricant</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Category (English):
                    </label>
                    <select name="category">
                        <option value="">Select a Category</option>
                        <option value="aboutdescr">About Description</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="team1">Team 1</option>
                        <option value="team2">Team 2</option>
                        <option value="team3">Team 3</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Name in English :
                    </label>
                    <input type="text" name="ename" />
                </fieldset>
                <fieldset>
                    <label>
                        Name in Arabic :
                    </label>
                    <input type="text" name="aname" />
                </fieldset>
                <fieldset>
                    <label>
                        Position in English :
                    </label>
                    <input type="text" name="eposition" />
                </fieldset>
                <fieldset>
                    <label>
                        Position in Arabic :
                    </label>
                    <input type="text" name="aposition" />
                </fieldset>
                <fieldset>
                    <label>
                        Email :
                    </label>
                    <input type="text" name="email" />
                </fieldset>
                <fieldset>
                    <label>
                        Desciption :
                    </label>
                    <textarea name="edescription" rows="6" cols="45">Enter Description</textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Desciption in Arabic :
                    </label>
                    <textarea name="adescription" rows="6" cols="45">Enter Description</textarea>
                </fieldset>
                
                <fieldset>
                    <label>
                        Upload an image :
                    </label>
                    <input type="file" name="image" />
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
        $(".about-menu").addClass('active');
    });
</script>
</body>
</html>
