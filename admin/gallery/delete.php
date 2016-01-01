<?php //
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['username']))    //login session
    header("Location: ../index.php");
?>
<?php  
include_once "../../components/dbconnection.php";

$did = $_GET["id"];
mysqli_query($con, "UPDATE gallery SET deleted='true' WHERE id='".$did."'");
header('Location: index.php');
 ?>