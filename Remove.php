<?php 
$conn=mysqli_connect("localhost","root","","systemm") or die(mysqli_error($conn));
$id=$_GET['id'];

$sql= "delete from users where ID=$id";
$q= mysqli_query($conn,$sql) or die(mysqli_error($conn));

header("location: Home.php")



?>