<?php //
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['username']))    //login session
    header("Location: ../index.php");
?>
<?php
include_once "../../components/dbconnection.php";

 //die($_FILES['file']['name']);   
 if(isset($_FILES['image']['name'])){
  
  $exti = end(explode('.', $_FILES['image']['name']));
  
  $exti;
  $targeti = "../../images/products/car/";
  $ili = $_FILES['image']['name'];
  
  //die($il);
  $targeti = $targeti . $_FILES['image']['name']; 
  
  //echo $target;  
  
  if(move_uploaded_file($_FILES['image']['tmp_name'], $targeti)) 
     {
     echo "The image has been uploaded ";
     } 
     else
     {
     echo "Sorry, there was a problem uploading your image.";
     }
  }
  
if(isset($_POST["ename"])){
	$ename=$_POST["ename"];} else {$ename="";}
        
if(isset($_POST["aname"])){
	$aname=$_POST["aname"];} else {$aname="";}

if(isset($_POST["categoryeng"])){
	$categoryeng=$_POST["categoryeng"];} else {$categoryeng="";}
        
if(isset($_POST["image"])){
	$image=$targeti;} else {echo "not set2";}
     
        
$sql="INSERT INTO  car (ename, aname, categoryeng, image)
        VALUES ('$ename', '$aname', '$categoryeng', '$ili')";


if (!mysqli_query($con, $sql))
  {
    
	  //console.log('failed');
  //die('Error: '.mysqli_error($con));
  echo " Sorry for the inconvenience, please insert again. Error: ".mysqli_error($con);
  } else {
      header('Location: index.php');
  }
  
//  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">';    
//exit;
?>