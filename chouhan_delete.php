<?php

$con=mysqli_connect("localhost","root","","test") or mysqli_error($con);
$id=$_GET["id"];
$query=mysqli_query($con,"delete from chouhanro where id='".$id."'");
header("location:chouhan_view.php");
?>