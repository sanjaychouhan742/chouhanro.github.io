<?php 
$con=mysqli_connect("localhost","root","","test") or mysqli_error($con);
$id=$_GET["id"];
$query=mysqli_query($con,"select * from chouhanro where id='".$id."' ");
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>chouhan</title>
</head>
<body>
	 


<table>
    <form>
 <tr>
<td>Name:</td>
<td><input type="text" name="name" id="name" value="<?php echo $row["Name"]; ?>"></td>
</tr> 

<tr>
<td>Mobile NO:</td>
<td><input type="text" name="mo" id="mo" value="<?php echo $row["Mobile"]; ?>"></td>
</tr>

<tr>
<td>NO of jar:</td>
<td><input type="text" name="jar" id="jar" value="<?php echo $row["Jar"]; ?>"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="add" id="add" value="<?php echo $row["Address"]; ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" id="submit"></td>
</tr>
</form>
</table>
</body>
</html>