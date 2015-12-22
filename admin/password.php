<?php

$password = 'niyas';
//502bdd090083d2cab14b41699bfb60bd
//e5de81655caaea1616f2d5afe6cb3d23
echo md5($password);

?>

<?php //
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['username']))    //login session
    header("Location: ../index.php");
?>
