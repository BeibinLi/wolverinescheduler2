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
$db = "MHacks2015";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

if($conn === false){
	echo "Failure!";
} else {
	echo "Success!";
}

$sql = "SELECT coursename, credits
FROM courses
WHERE credits = 4;";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     echo "Query failed!";
} else {
     echo "Query successful";
}

echo "\r\n";

// Make the first (and in this case, only) row of the result set available for reading.
while( sqlsrv_fetch( $stmt ) ) {

	// Get the row fields. Field indeces start at 0 and must be retrieved in order.
	// Retrieving row fields by name is not supported by sqlsrv_get_field.
	$name = sqlsrv_get_field( $stmt, 0);
	echo "$name: ";
	echo "\r\n";

	$comment = sqlsrv_get_field( $stmt, 1);
	echo $comment;
	echo "\r\n";
}



?>

</body>
</html>
