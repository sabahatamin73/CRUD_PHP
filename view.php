<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> View </title>
</head>
<body>

<h3> All Records </h3>
<table>
<tr>

<?php

include('connection.php');

$select = "SELECT * FROM employee_info";
$qrydisplay = mysqli_query($con, $select);
while($row = mysqli_fetch_array($qrydisplay)){
	$id  =  $row['id'];
	$name  =  $row['name'];
	$salary  =  $row['salary'];

	echo "<tr>
    <td>".$id."</td>
    <td>".$name."</td>
    <td>".$salary."</td>
    </tr>";
}

?>

</tr>
</table>

</body>
</html>