<?php
$con=mysqli_connect("localhost","root","","time");
$c=$_POST['device'];
$d=$_POST['day'];
$e=$_POST['time'];
$f=$_POST['timeto'];
$q="insert into name(device,date,time,timeto)values('$c','$d','$e','$f')";
$s=mysqli_query($con,$q);
header('location:new9.php');
?>
