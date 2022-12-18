<?php
$conn = mysqli_connect("localhost","root","","ideatrip","3308");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);
mysqli_close($conn);
?>