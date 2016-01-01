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
<div id="paging_container2" class="show-container container"> 
    <div class="clear"></div>
    <aside>
        <a href="form.php">ADD NEW</a>
    </aside>
    <div class=" pull-right page_navigation r-offset-12"></div>
    <div class="clear"></div>
    <ul class="admin-container content gallery">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <li>
                <div class="pull-left full-width">
<!--                    <a class="update" href="update-show.php?id=<?php// echo $row['id']; ?>" title="click here to Edit">Edit</a>-->
                    <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" title="click here to Delete">Delete</a>
                    <img src="<?php echo $target . $row['image']; ?>" alt="image" height="auto" width="100%"/>
                </div>
                
                
            </li>


        <?php }
        ?>
    </ul>
</div>

<?php include_once "../footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/admin.js" type="text/javascript" ></script>
<script src="../js/jquery.pajinate.js" type="text/javascript" ></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".gallery-menu").addClass('active');
    });
</script>
</body>
</html>