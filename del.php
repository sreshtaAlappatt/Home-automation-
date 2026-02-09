<?php
$con=mysqli_connect("localhost","root","","time");
$n=$_GET['id'];
$q=mysqli_query($con,"delete from name where id='$n'");
header('Location:new8.php');
?>