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
$target = "../../images/about/";
$result = mysqli_query($con, "SELECT * FROM about WHERE id='".$did."'");
while($row = mysqli_fetch_array($result)) {
?>
<div class="form-container">
            <h2>Update About us</h2>
            <form action="update.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label>
                        Category in English
                    </label>
                    <select name="category" >
                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                        <option value="aboutdescr">About Description</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="team1">Team 1</option>
                        <option value="team2">Team 2</option>
                        <option value="team3">Team 3</option>
                    </select>
                    </select>
                </fieldset>
                <fieldset>
                    <label>
                        Name in English
                    </label>
                    <input type="text" name="ename" value="<?php echo $row['ename']; ?>" />
                </fieldset>
                <fieldset>
                    <label>
                        Name in Arabic
                    </label>
                    <input type="text" name="aname" value="<?php echo $row['aname']; ?>" />
                </fieldset>
                <fieldset>
                    <label>
                        Position in English :
                    </label>
                    <input type="text" name="eposition" value="<?php echo $row['eposition']; ?>" />
                </fieldset>
                <fieldset>
                    <label>
                        Position in Arabic :
                    </label>
                    <input type="text" name="aposition" value="<?php echo $row['aposition']; ?>" />
                </fieldset>
                <fieldset>
                    <label>
                        Desciption :
                    </label>
                    <textarea name="edescription" rows="6" cols="45"><?php echo $row['edescription']; ?></textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Desciption :
                    </label>
                    <textarea name="adescription" rows="6" cols="45"><?php echo $row['adescription']; ?></textarea>
                </fieldset>
                <fieldset>
                    <label>
                        Email :
                    </label>
                    <input type="text" name="email" value="<?php echo $row['email']; ?>"/>
                </fieldset>
                <hr />
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
<script type="text/javascript" src="../js/jquery.pajinate.js"></script>
<script src="../js/admin.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".about-menu").addClass('active');
    });
</script>
</body>
</html>

