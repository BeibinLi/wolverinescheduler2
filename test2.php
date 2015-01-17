<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

echo "Hello World!";

$server = "tcp:<value of SERVER from section above>";
$user = "<value of USERNAME from section above>"@SERVER_ID;
$pwd = "password";
$db = "testdb";

// $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

// if($conn === false){
//     #die(print_r(sqlsrv_errors()));
//     echo "Failure!";
// } else {
//     echo "Success!";
// }


?>

</body>
</html>
