<?php //
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['username']))    //login session
    header("Location: ../index.php");
?>
<?php
include_once "../header.php";

?>
    
    <body>
<?php  
include_once "../../components/dbconnection.php";

$did = $_GET["id"];
$target = "../../images/products/mobile/";
$result = mysqli_query($con, "SELECT * FROM mobile WHERE id='".$did."'");
while($row = mysqli_fetch_array($result)) {
?>
<div class="form-container">
            <h2>Update Lubricants</h2>
            <form action="update.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Name in English
                    </label>
                    <input type="text" name="ename" value="<?php echo $row['ename']; ?>" required/>
                </fieldset>
                <fieldset>
                    <label>
                        Name in Arabic
                    </label>
                    <input type="text" name="aname" value="<?php echo $row['aname']; ?>" required/>
                </fieldset>
                <fieldset>
                    <label>
                        Category in English
                    </label>
                    <select name="categoryeng" >
                        <option value="<?php echo $row['categoryeng']; ?>"><?php echo $row['categoryeng']; ?></option>
                        <option value="earphones">Ear phones</option>
                        <option value="mobile">Mobile</option>
                        <option value="mobilepouch">Mobile Pouch</option>
                        <option value="mobilestand">Mobile Stand</option>
                        <option value="selfiestick">Selfie Stick</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label>
                        Show Front:
                    </label>
                    <select name="showfront">
                        <option value="<?php echo $row['showfront']; ?>"><?php echo $row['showfront']; ?></option>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select> 
                </fieldset>
                <fieldset>
                    <label>
                        Desciption in English :
                    </label>
                    <textarea name="edescription" rows="4" cols="45"><?php echo $row['edescription']; ?></textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Desciption in Arabic :
                    </label>
                    <textarea name="adescription" rows="4" cols="45"><?php echo $row['adescription']; ?></textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Old Image :
                    </label>
                    <img  id="slected-img" src="<?php echo $target.$row['image'];?>" width="200" height="auto" /><div class="clear"></div>
                    <label>
                        Upload a new image
                    </label>
                    
                    <input type="file" name="image" id="image-selcted" value="<?php echo $row['image']; ?>" class="image-selected" />
                    
                </fieldset>
                <hr />
                <fieldset>
                    <a href="index.php">Cancel</a>
                    <button>Update</button>
                </fieldset>
            </form>
            
        </div>
    <?php } ?>
        
        <?php include_once "../footer.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".mobile-menu").addClass('active');
    });
</script>
</body>
</html>

