<?php
$con=mysqli_connect("localhost","root","","auto");
$c=$_POST['DEVICE1'];
$d=$_POST['DEVICE2'];
$e=$_POST['DEVICE3'];
$f=$_POST['DEVICE4'];
$p="delete from name";
mysqli_query($con,$p);
$q="insert into name(DEVICE1,DEVICE2,DEVICE3,DEVICE4)values('$c','$d','$e','$f')";

$s=mysqli_query($con,$q);
header('location:new9.php');


?>