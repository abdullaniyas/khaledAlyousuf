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

$result = mysqli_query($con, "SELECT * FROM car WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/products/car/";
?>
<div id="paging_container2" class="show-container container"> 
    <div class="clear"></div>
    <aside>
        <a href="form.php">ADD NEW</a>
    </aside>
    <div class="clear"></div>

<?php

echo "<div style='overflow:auto;'>";

echo "<table border='1' id='memberslist' class='table table-striped'>";

echo "<thead>";

echo "<th>ID</th>";

echo "<th>Name<br />(English)</th>";

echo "<th>Name<br />(Arabic)</th>";

echo "<th>Category</th>";

echo "<th>Decription<br />(English)</th>";

echo "<th>Decription<br />(Arabic)</th>";

echo "<th>Image</th>";

echo "<th>Show Front</th>";

echo "<th>Modify</th>";

echo "</thead>";

echo "<tbody>";



$result = mysqli_query($con,"SELECT * FROM  car WHERE deleted='false' ORDER BY id DESC");
$target = "../../images/products/car/";
$update = "update-show.php?id=";
$delete = "delete.php?id=";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['ename'] . "</td>";
  echo "<td>" . $row['aname'] . "</td>";
  echo "<td>" . $row['categoryeng'] . "</td>";
  echo "<td>" . $row['edescription'] . "</td>";
  echo "<td>" . $row['adescription'] . "</td>";
  echo "<td><img src=" . $target . $row['image'] . " width='150px' /></td>";
  echo "<td>" . $row['showfront'] . "</td>";
  echo "<td><a class='update' href=" . $update . $row['id'] . ">Edit</a><br /><a class='delete' href=" . $delete . $row['id'] . ">Delete</a></td>";
  echo "</tr>";
  }
 	 	
echo "</tbody>";

echo "</table>";

echo "</div>";

?>
</div>

<?php include_once "../footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="../js/show/jquery.dataTables.min.js" ></script> 
<script type="text/javascript" src="../js/show/ZeroClipboard.js" ></script> 
<script type="text/javascript" src="../js/show/TableTools.js" ></script>  
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#memberslist').dataTable( {
            "aaSorting": [[ 0, "desc" ]],
            "sDom": 'T<"clear">lfrtip',
                                        
            "oTableTools": {
                "aButtons": [
				
                    {
                        "sExtends": "pdf",
                        "sPdfOrientation": "landscape",
                        "sPdfMessage": "Orders."
                    }]
            }
        } );
    } );
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".inner-navs").removeClass('active');
        $(".car-menu").addClass('active');
    });
</script>
</body>
</html>