<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Insert Records</title>
</head>
<body>
<?php

include("connection.php");
include("search.php");
include("employee.sql");

if(isset($_POST['insertdata'])) {

  $name = $_POST['name'];
  $salary = $_POST['salary'];

if(!empty($name) && !empty($salary)) {

$sql = "INSERT INTO employee_info (`name`, `salary`) VALUES ('$name','$salary')";
$qry = mysqli_query($con, $sql);
if($qry) {
    header("location:http://localhost/php/view.php");
}

}
else {
	echo "<br />All fields must be filled";
}
}

?>

<h3> Insert new record </h3>
<form action="" method="POST">
	
<input type="text" name="name" placeholder="Employee Name"><br ><br >
<input type="number" name="salary" placeholder="Employee Salary"><br ><br >
<input type="submit" name="insertdata" value="insert">

</form>
</body>
</html>