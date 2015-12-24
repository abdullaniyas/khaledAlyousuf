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
 if(isset($_FILES['banimage']['name'])){
  
  $exti = end(explode('.', $_FILES['image']['name']));
  
  $exti;
  $targeti = "../../images/banners/";
  $ili = $_FILES['banimage']['name'];
  
  //die($il);
  $targeti = $targeti . $_FILES['banimage']['name']; 
  
 // echo $target;  
  
  if(move_uploaded_file($_FILES['banimage']['tmp_name'], $targeti)) 
     {
     //echo "The image has been uploaded ";
     } 
     else
     {
     //echo "Sorry, there was a problem uploading your image.";
     }
  }
  
  $did = $_GET["id"];

if(isset($_POST["name"])){
	$name=$_POST["name"];} else {$name="";}
        
if(isset($_FILES["banimage"])){
	$banimage=$targeti;} else {echo "not set2";}
        
     
if($_FILES['banimage']['name']=="") {
    $sql="UPDATE banners SET name = '".$name."' WHERE id='".$did."'" ;
} else if($_FILES['banimage']['name']!=""){
    $sql="UPDATE banners SET name = '".$name."', banimage = '".$ili."' WHERE id='".$did."'" ;
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