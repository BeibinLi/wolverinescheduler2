<!DOCTYPE html>
<html>
<body>

<h1> PHP page for algorithm </h1>

<?php echo 'hello world';
echo "<br>"; //new line
?>

<?php

class Lecture{
    public $coursename;
    public $start_time;
    public $end_time;
    
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
    function __construct3($a1,$a2,$a3){
        echo 'new Lecture created ';
        $this->coursename = $a1;
        $this->start_time = $a2;
        $this->end_time = $a3;
    }
}

$lec = new Lecture("EECS 381", 3, 5);


class Course{
    public $coursename;
    public $credit;
    
    public function set($name, $cr){
        $this->credit = $cr;
        $this->coursename = $name;
    }
    
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
    function __construct2($a1,$a2){
        echo 'new Course created ';
        $this->coursename = $a1;
        $this->credit = $a2;
    }
}

$cs = new Course("EECS 280", 4);

echo "<br>"; //new line
echo $cs->coursename; echo $cs->credit; //new line

echo "updated4";


/*

$potential_courses = array{};

$solutions = array{}; //2D array

$ALLOW_DIFF = 1;


func find_course_combination(&$potential_courses, $curr_index, $credits, &$selected) {
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

func hasConflictWithList($L, &$V){
  for ($i = 0 ; $i <= count($V); $i++) {
    if(hasConflict($L, $V[i])) return True;
  }    
  return False;
}

func find_time(&$course_list, $curr_index, &$curr_result){
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


*/
?>

</body>
</html>
