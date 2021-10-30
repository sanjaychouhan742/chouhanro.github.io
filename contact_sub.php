<?php
$con=mysqli_connect("localhost","root","","test") or mysqli_error($con);

$name=$_POST["name"];
$mobile=$_POST["mo"];
$jar=$_POST["jar"];
$address=$_POST["add"];
//echo "insert into chouhanro(`Name`,`Mobile`,`Jar`,`Address`) values('".$name."','".$mobile."';'".$jar."';'".$address."')";die;
$sql="insert into chouhanro (`Name`,`Mobile`,`Jar`,`Address`) values('".$name."','".$mobile."','".$jar."',
'".$address."')";

$rst=mysqli_query($con,$sql);

if($rst)
{
//echo "successfull";
	header("location:contact.php");

}
else
{
	echo "unsuccessfull".mysqli_error($con);
}

?>