<!DOCTYPE html>
<html>
<body>
<?php 
$hn = 'localhost' ;
$db = 'publications';
$un = 'a_pub_user';
$pw = 'a_pub_user';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM `Classics`";

$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
while ($row = $result->fetch_assoc()) {
	echo $row["author"]." ".$row["title"]." ".$row["year"]." ";
	echo $row["isbn"]." ".$row["category"]."<br>";
}
$result->close();
$conn->close();
    ?>
</body>
</html>