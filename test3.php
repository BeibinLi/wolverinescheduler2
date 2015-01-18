
<!DOCTYPE html>
<html>
<body>

<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php
  $server = "tcp:rd4vxrj1mk.database.windows.net";
  $user = "SQLAdmin";
  $pwd = "Mhacks12345";
  $db = "MHacks2015";
  $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
  if($conn === false){
    echo "Connection Failure\r\n";
  } else {
    echo "Connection Success\r\n";
  }
  $sql = "SELECT coursename, credits
    FROM courses
    WHERE credits = 4;";
  $stmt = sqlsrv_query($conn, $sql);
  if( $stmt === false ) {
    echo "Query failed\r\n";
  } else {
    echo "Query successful\r\n";
  }
  while(sqlsrv_fetch($stmt)) {
    $coursename = sqlsrv_get_field( $stmt, 0);
    echo "$coursename : ";
    $credits = sqlsrv_get_field( $stmt, 1);
    echo "$credits\r\n";
  }
?>

</body>
</html>
