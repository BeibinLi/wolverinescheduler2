<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	echo "Hello World!";
?>

<?php

$server = "tcp:rd4vxrj1mk.database.windows.net";
$user = "SQLAdmin";
$pwd = "Mhacks1234";
$db = "School";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

if($conn === false){
	echo "Failure!";
} else {
	echo "Success!";
}

?>

</body>
</html>