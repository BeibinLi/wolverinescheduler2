<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo "Baby" ;


Server: rd4vxrj1mk.database.windows.net,1433 \r\nSQL 
Database: School\r\nUser 
Name: SQLAdmin\r\n\r\nPHP 
Data Objects(PDO) 
Sample Code:\r\n\r\ntry {\r\n   
$conn = new PDO ( \"sqlsrv:server = tcp:rd4vxrj1mk.database.windows.net,1433; Database = School\", \"SQLAdmin\", \"{your_password_here}\");\r\n    
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) 
{\r\n   print( \"Error connecting to SQL Server.\" );\r\n   
die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n
$connectionInfo = array(\"UID\" => \"SQLAdmin@rd4vxrj1mk\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"School\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:rd4vxrj1mk.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);


$potential_courses = array{};

$solutions = array{}; //2D array

$ALLOW_DIFF = 1;


func find_course_combination($potential_courses, $curr_index, $credits, $selected) {
    if($credits <= $ALLOW_DIFF or (0-credits <= $ALLOW_DIFF)){
      array_push($solutions, $selected);
      return;
    }
    
    if($credits < 0) return;
    
    for ($i = $curr_index + 1 ; $i <= count($potential_courses); $i++) {
       array_push($selected, $potential_courses[i]);
       find_course_combination($potential_courses, $i, $creidts - $potential_courses[i]->credit, $selected);
       array_pop($selected);
    }  //end for
}


func hasConflict($L1, $L2){
//??? todo for monday? tuesday?
  if($L1->start_time >= $L2->start_time and $L1->start_time < $L2->end_time) return True;
  if($L2->start_time >= $L1->start_time and $L2->start_time < $L1->end_time) return True;
  return False;
}

$schedule = array{} //2D array

func hasConflictWithList($L, $V){
  for ($i = 0 ; $i <= count($V); $i++) {
    if(hasConflict($L, $V[i])) return True;
  }    
  return False;
}

func find_time($course_list, $curr_index, $curr_result){
  if(count($course_list) == count($curr_result)) {
    array_push($schedule, $curr_result);  
    return;
  }
  
  for ($i = $curr_index+1 ; $i <= count($course_list); $i++) {
    $temp_course = $course_list[i];
    for ($j = 0 ; $j <= count($temp_course->lectures); $j++) {
      if( hasConflictWithList($temp_course->lectures[j], $curr_result) ) 
        continue;
      
      array_push($curr_result, $temp_course->lectures[j]);
      find_time($course_list, $i, $curr_result);
      array_pop($curr_result);
    }
  }
}



?>

</body>
</html>
