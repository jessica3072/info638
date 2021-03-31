<!DOCTYPE html>
<html>
<body>
<?php 
$hn = 'localhost' ;
$db = 'animal shelter';
$un = 'a_shelter_user';
$pw = 'a_shelter_user';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM `Pet Shelter`";

$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
while ($row = $result->fetch_assoc()) {
	echo $row["pet ID"]." ".$row["name"]." ".$row["date of birth"]." ";
	echo $row["sex"]." ".$row["animal type"]."<br>";
}
$result->close();
$conn->close();
    ?>
</body>
</html>