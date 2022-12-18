<?php 
include 'config.php'

$id = $_GET['ID'];
$query = "DELETE FROM twu_detail WHERE Id='$id'";
mysqli_query($conn, $query); 
header("location:table-general.php");
?>
