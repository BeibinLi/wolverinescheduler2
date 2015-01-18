
<!DOCTYPE html>
<html>
<body>

<form method="post" action="index.php" enctype="multipart/form-data" >
  Department <input type="text" name="dpt" id="dpt"/></br>
  Course Number <input type="text" name="coursenum" id="coursenum"/></br>
  <input type="submit" name="submit" value="Submit" />
</form>

<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php
  $server = "tcp:rd4vxrj1mk.database.windows.net";
  $user = "SQLAdmin";
  $pwd = "Mhacks12345";
  $db = "MHacks2015";
  
  try {
    $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
  } catch(Exception $e){
    die(var_dump($e));
  }
  
  if(!empty($_POST)) {
    try {
      //$dpt = $_POST['dpt'];
      //$coursenum = $_POST['coursenum'];
      //$coursename = $dpt . " " . $coursenum;
      $sql_select = "SELECT coursename, credits FROM MHacks2015
      WHERE coursename = 'EECS281'";
      $stmt = $conn->query($sql_select);
      //$stmt->bindValue(1, $coursename);
      $courses = $stmt->fetchAll();
      if(count($courses) > 0) {
        foreach($courses as $course) {
          echo $course['coursename'];
          echo $course['credits'];
        }
      }
    }
    catch(Exception $e) {
      die(var_dump($e));
    }
  }
  
?>

</body>
</html>
