
<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'testdb';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_REQUEST['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM courses WHERE cname LIKE '$searchTerm%' ORDER BY cname ASC");
while ($row = $query->fetch_assoc()) {
	$f=$row['cname'];
    $data[] = $f;
}
//return json data
echo json_encode($data);
?>
