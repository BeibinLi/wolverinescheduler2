
<!DOCTYPE html>
<html>
<body>

<form method="post" action="test3.php" enctype="multipart/form-data" >
  Department <input type="text" name="dpt" id="dpt"/></br>
  Course Number <input type="text" name="coursenum" id="coursenum"/></br>
  <input type="submit" name="submit" value="Submit" />
</form>

<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php
  $host = "tcp:rd4vxrj1mk.database.windows.net";
  $user = "SQLAdmin";
  $pwd = "Mhacks12345";
  $db = "MHacks2015";
  
  try {
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  } catch(Exception $e){
    die(var_dump($e));
  }
  
  // Based on form data, make a query to the database
  if(!empty($_POST)) {
    try {
      $dpt = $_POST['dpt'];
      $coursenum = $_POST['coursenum'];
      $coursename = $dpt . " " . $coursenum;
      $sql_select = 'SELECT coursename, credits FROM courses
      WHERE coursename = ?';
      $stmt = $conn->prepare($sql_select);
      $stmt->bindValue(1, $coursename);
      $stmt->execute();
      $courses = $stmt->fetchAll();
      if(count($courses) > 0) {
        foreach($courses as $course) {
          echo "Course: " . $course['coursename'] . ", Credits: " . $course['credits'];
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
