<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php echo "Hello World!"; ?>

<?php

$server = "tcp:rd4vxrj1mk.database.windows.net";
$user = "SQLAdmin";
$pwd = "Mhacks12345";
$db = "School";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

if($conn === false){
	echo "Failure!";
} else {
	echo "Success!";
}

$sql = "SELECT * FROM test;";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     echo "Query failed!";
} else {
	echo "Query successful";
}

$count = mysql_num_rows($stmt); // retrieve a count of the rows in the previous query
while ($row = mysql_fetch_assoc($stmt)) { // loop through all the rows in the resultset
    echo $row['id'] . $row['number'] . $row['string'];
}

?>

</body>
</html>
