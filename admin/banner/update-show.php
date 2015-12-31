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
$target = "../../images/products/oil";
?>
    
    <body>
<?php  
include_once "../../components/dbconnection.php";

$did = $_GET["id"];
$target = "../../images/banners/";
$result = mysqli_query($con, "SELECT * FROM banners WHERE id='".$did."'");
while($row = mysqli_fetch_array($result)) {
?>
<div class="form-container">
            <h2>Update Banner Image</h2>
            <form action="update.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Name
                    </label>
                    <select name="name" >
                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                        <option value="slider">Slider</option>
                        <option value="lubricants">Lubricants</option>
                        <option value="stationary">Stationary</option>
                        <option value="caracces">Car-Accessories</option>
                        <option value="mobileacces">Mobile-Accessories</option>
                    </select> 
                </fieldset>
                <hr />
                <fieldset>
                    <label>
                        Old Image :
                    </label>
                    <img  id="slected-img" src="<?php echo $target.$row['banimage'];?>" width="200" height="auto" /><div class="clear"></div>
                    <label>
                        Upload a new image
                    </label>
                    
                    <input type="file" name="banimage" id="image-selcted" value="<?php echo $row['image']; ?>" class="image-selected" />
                    
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
        $(".banner-menu").addClass('active');
    });
</script>
</body>
</html>

