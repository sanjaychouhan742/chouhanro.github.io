<!DOCTYPE html>
<html>
<head>
	<title>chouhan</title>
</head>
<body>
<?php 
$con=mysqli_connect("localhost","root","","test") or mysqli_error($con);
?>

<table border="1" width="70%" align="center">
	<tr>
		<h1 style="text-align: center; color: red; ">Order List</h1>
		<th>ID</th>
		<th>Name </th>
		<th>Mobile</th>
		<th>Jar</th>
		<th>Address</th>
		<th>Action</th>
</tr>
 <?php
$query=mysqli_query($con,"select * from chouhanro");
while($row=mysqli_fetch_assoc($query)){
?>
     <tr>
     	<td> <?php echo $row["id"]; ?> </td>
        <td> <?php echo  $row["Name"]; ?> </td>
        <td> <?php echo  $row["Mobile"]; ?> </td>
        <td> <?php echo  $row["Jar"]; ?> </td>
        <td> <?php echo  $row["Address"]; ?> </td>
        <td><a href="chouhan_detail.php?id=<?php echo $row["id"]; ?>">View</a>/<a href="chouhan_delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure wants to delete')">Delete</a></td>
     </tr>

 <?php } ?>
</table>
</body>
</html>