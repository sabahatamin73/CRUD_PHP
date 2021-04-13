<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Records</title>
</head>
<body>
<h3> Search for any existing record </h3>
<?php

include("connection.php");

if(isset($_POST['submit'])){
$name = $_POST['search'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}
else{
	$mistake = '<h4>No match found!</h4>';
	$select = "SELECT * FROM employee_info WHERE name LIKE '%$name%' || salary LIKE '%$name%'";
	$result = mysqli_query($con,$select);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id		: '.$row['id'];
		echo '<br> name		: '.$row['name'];
        echo '<br> salary	: '.$row['salary'];
		echo '</h4>';
	}
}
else{
echo'<h4> Search Results :</h4>';
print ($mistake);
}
mysqli_free_result($result);
}
}
?>
<form action="" method="post">
<input type="text" name="search" placeholder="Enter search value">
<input type="submit" name="submit" value="Search">
</form>
<body>
</html>