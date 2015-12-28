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
  $targeti = "../../images/about/";
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
if(isset($_POST["category"])){
	$category=$_POST["category"];} else {$category="";}
        
if(isset($_POST["ename"])){
	$ename=$_POST["ename"];} else {$ename="";}
        
if(isset($_POST["aname"])){
	$aname=$_POST["aname"];} else {$aname="";}
 
if(isset($_POST["eposition"])){
	$eposition=$_POST["eposition"];} else {$eposition="";}
        
if(isset($_POST["aposition"])){
	$aposition=$_POST["aposition"];} else {$aposition="";}

if(isset($_POST["edescription"])){
	$edescription=$_POST["edescription"];} else {$edescription="";}

if(isset($_POST["adescription"])){
	$adescription=$_POST["adescription"];} else {$adescription="";} 
        
        
if(isset($_POST["email"])){
	$email=$_POST["email"];} else {$email="";}
        
if(isset($_FILES["image"])){
	$image=$targeti;} else {echo "not set2";}
        
     
if($_FILES['image']['name']=="") {
    $sql="UPDATE about SET category = '".$category."', ename = '".$ename."', aname = '".$aname."', eposition='".$eposition."', aposition='".$aposition."', edescription='".$edescription."', adescription='".$adescription."', email='".$email."' WHERE id='".$did."'" ;
} else if($_FILES['image']['name']!=""){
    $sql="UPDATE about SET category = '".$category."', ename = '".$ename."', aname = '".$aname."', image = '".$ili."',  eposition='".$eposition."', aposition='".$aposition."', edescription='".$edescription."', adescription='".$adescription."', email='".$email."' WHERE id='".$did."'" ;
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