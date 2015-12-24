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
<div id="paging_container2" class="show-container container"> 
    <div class="clear"></div>
    <aside>
        <a href="form.php">ADD NEW</a>
    </aside>
    <div class=" pull-right page_navigation r-offset-12"></div>
    <div class="clear"></div>
    <ul class="admin-container content">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <li>
                <a class="update" href="update-show.php?id=<?php echo $row['id']; ?>" title="click here to Edit">Edit</a>
                <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" title="click here to Delete">Delete</a>
                <p>Name (English) :&nbsp;<?php echo $row['ename']; ?></p>
                <p>Name (Arabic) :&nbsp;<?php echo $row['aname']; ?></p>
                <p>Category (English):&nbsp;<?php echo $row['categoryeng']; ?></p>
                <img src="<?php echo $target . $row['image']; ?>" alt="image" height="auto" width="100%"/><br />
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
        $(".stationary-menu").addClass('active');
    });
</script>
</body>
</html>