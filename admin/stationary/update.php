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
  $targeti = "../../images/products/stationary/";
  $ili = $_FILES['image']['name'];
  
  //die($il);
  $targeti = $targeti . $_FILES['image']['name']; 
  
 // echo $target;  
  
  if(move_uploaded_file($_FILES['image']['tmp_name'], $targeti)) 
     {
     //echo "The image has been uploaded ";
     } 
     else
     {
     //echo "Sorry, there was a problem uploading your image.";
     }
  }
  
  $did = $_GET["id"];
if(isset($_POST["ename"])){
	$ename=$_POST["ename"];} else {$ename="";}
        
if(isset($_POST["aname"])){
	$aname=$_POST["aname"];} else {$aname="";}  

if(isset($_POST["categoryeng"])){
	$categoryeng=$_POST["categoryeng"];} else {$categoryeng="";}
        
if(isset($_FILES["image"])){
	$image=$targeti;} else {echo "not set2";}
        
     
if($_FILES['image']['name']=="") {
    $sql="UPDATE stationary SET ename = '".$ename."', aname = '".$aname."', categoryeng = '".$categoryeng."' WHERE id='".$did."'" ;
} else if($_FILES['image']['name']!=""){
    $sql="UPDATE stationary SET ename = '".$ename."', aname = '".$aname."', categoryeng = '".$categoryeng."', image = '".$ili."' WHERE id='".$did."'" ;
}


if (!mysqli_query($con, $sql))
  {
    
	  //console.log('failed');
  //die('Error: '.mysqli_error($con));
  echo " couldnt upload. Error: ".mysqli_error($con);
  } else {
      header('Location: index.php');
  }
  
//  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">';    
//exit;
?>