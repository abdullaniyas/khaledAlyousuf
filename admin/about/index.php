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

$result = mysqli_query($con, "SELECT * FROM  about WHERE deleted='false' ORDER BY id ASC");
$target = "../../images/about/";
?>
<div id="paging_container2" class="show-container container"> 
    <aside>
        <a href="form.php" class="hide">ADD NEW</a>
    </aside>
    <div class=" pull-right page_navigation r-offset-12"></div>
    <div class="clear"></div>
    <ul class="admin-container content about-cont">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <li>
                <div class="pull-left width-50">
                        <a class="update" href="update-show.php?id=<?php echo $row['id']; ?>" title="click here to Edit">Edit</a>
                        <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" title="click here to Delete">Delete</a>
                        
                        <p><strong>Category :</strong>&nbsp;<?php echo $row['category']; ?></p>
                        <?php if ($row['ename'] != "" ) {?>
                            <p><strong>Name (English) :</strong>&nbsp;<?php echo $row['ename']; ?></p>
                        <?php } else {}
                        
                        if ($row['aname'] != "" ) {?>
                            <p><strong>Name (Arabic) :</strong>&nbsp;<?php echo $row['aname']; ?></p>
                        <?php } else {}
                        
                        if ($row['eposition'] != "" ) {?>
                            <p><strong>Position (English):</strong>&nbsp;<?php echo $row['eposition']; ?></p>
                        <?php } else {}
                        
                        if ($row['aposition'] != "" ) {?>
                            <p><strong>Position (Arabic):</strong>&nbsp;<?php echo $row['aposition']; ?></p>
                        <?php } else {}
                         if ($row['email'] != "" ) {?>
                            <p><strong>Email :</strong>&nbsp;<?php echo $row['email']; ?></p>
                        <?php } else {}
                         if ($row['edescription'] != "" ) {?>
                            <p><strong>Decription (English):</strong>&nbsp;<?php echo $row['edescription']; ?></p>
                        <?php } else {}
                        if ($row['adescription'] != "" ) {?>
                            <p><strong>Decription (English):</strong>&nbsp;<?php echo $row['adescription']; ?></p>
                        <?php } else {} ?>
                </div>
                <div class="pull-left width-50">
                    <?php
                    if ($row['image'] != "" ) {?>
                            <img src="<?php echo $target . $row['image']; ?>" alt="image" />
                        <?php } else {} ?>
                    
                </div>
            </li>


        <?php }
        ?>
    </ul>
</div>

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