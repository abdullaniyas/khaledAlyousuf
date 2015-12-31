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

$result = mysqli_query($con, "SELECT * FROM  banners WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/banners/";
?>
<div id="paging_container2" class="show-container container"> 
    <div class="clear"></div>
    <aside class="hide">
        <a href="form.php">ADD NEW</a>
    </aside>
    <div class=" pull-right page_navigation r-offset-12"></div>
    <div class="clear"></div>
    <ul class="admin-container content">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <li>
                <div class="pull-left width-50">
                    <a class="update" href="update-show.php?id=<?php echo $row['id']; ?>" title="click here to Edit">Edit</a>
                    <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" title="click here to Delete">Delete</a>
                    <p>Name:&nbsp;<?php echo $row['name']; ?></p>
                </div>
                <div class="pull-left width-50">
                    <img src="<?php echo $target . $row['banimage']; ?>" alt="image" height="auto" width="100%"/>
                </div>
                
                
            </li>


        <?php }
        ?>
    </ul>
</div>

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