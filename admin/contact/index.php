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
?>
<div id="paging_container2" class="show-container container"> 
    <div class="margin-bottom-4p pull-left"></div>
    <aside>
        
    </aside>
    <div class="clear"></div>

<?php

echo "<div style='overflow:auto;'>";

echo "<table border='1' id='memberslist' class='table table-striped'>";

echo "<thead>";

echo "<th>ID</th>";

echo "<th>Name</th>";

echo "<th>Email</th>";

echo "<th>Contact</th>";

echo "<th>Message</th>";

echo "<th>Date</th>";

echo "</thead>";

echo "<tbody>";



$result = mysqli_query($con,"SELECT * FROM  contact ORDER BY id DESC");
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
  echo "<td>" . $row['descr'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
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
        $(".contact-menu").addClass('active');
    });
</script>
</body>
</html>