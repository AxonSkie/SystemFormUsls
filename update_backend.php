<?php  

$conn=mysqli_connect("localhost","root","","systemm") or die(mysqli_error($conn));
$id= $_GET['id'];

$Verify= $_POST['Verify'];



$sql="update users set Status='$Verify' where ID= '$id'";
$q=mysqli_query($conn,$sql) or die (mysqli_error($conn));
header("location: adminHome.php")




?>