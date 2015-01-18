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
        // echo 'new Lecture created ';
        $this->coursename = $a1;
        $this->start_time = $a2;
        $this->end_time = $a3;
    }
}

// $lec = new Lecture("EECS 381", 3, 5);


class Course{
    public $coursename;
    public $credit;
    
    // public function set($name, $cr){
    //     $this->credit = $cr;
    //     $this->coursename = $name;
    // }
    
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
    function __construct2($a1,$a2){
        // echo 'new Course created ';
        $this->coursename = $a1;
        $this->credit = $a2;
    }
}


$solutions = array(); //2D array



$ALLOW_DIFF = 2;


function absolute_val($x){
    if($x > 0) return $x;
    $zero = 0;
    return $zero - $x;
}

function find_course_combination(&$potential_courses, $curr_index, $credits, &$selected) {
    // echo "find_course_comb inputs are: "; var_dump($potential_courses); var_dump($selected); echo "<br>";
    if( absolute_val($credits) < $ALLOW_DIFF ){
      array_push($solutions, $selected);
      echo "I FIND A SOLUTION!  "; var_dump($selected);
      echo "<br>"; //new line
      return;
    }
    
    if($credits < 0) return;
    
    for ($i = $curr_index + 1 ; $i < count($potential_courses); $i++) {
      echo $i; echo " ";  var_dump($potential_courses);
      $course = $potential_courses[i];
      foreach($potential_courses as $fuck){
          echo $fuck->coursename; echo " ";
      }

      echo "now pushing: "; var_dump($course); echo "<br>"; //new line
      array_push($selected, $course);
      find_course_combination($potential_courses, $i, $creidts - $course->credit, $selected);
      array_pop($selected);
    }  //end for
}


function hasConflict($L1, $L2){
//??? todo for monday? tuesday?
  if($L1->start_time >= $L2->start_time and $L1->start_time < $L2->end_time) return True;
  if($L2->start_time >= $L1->start_time and $L2->start_time < $L1->end_time) return True;
  return False;
}

$schedule; //2D array


function hasConflictWithList($L, &$V){
  for ($i = 0 ; $i <= count($V); $i++) {
    if(hasConflict($L, $V[i])) return True;
  }    
  return False;
}



function find_time(&$course_list, $curr_index, &$curr_result){
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

function debug_solutions()
{
    for($i=0; $i < count($solutions); $i++){
        $total_credit = 0;
        for($j=0; $j < count($solutions[i]); $j++){
            $course = $solutions[$i][$j];
            echo $course->coursename; echo " ";
            $total_credit = $total_credit + $course->credit;
        }
        echo "total: " << $total_credit ; echo "<br>"; //new line
    }
}
// var_dump($cs);


//begin main
$c1 = new Course("EECS 280", 4);
$c2 = new Course("EECS 370", 4);
$c3 = new Course("MATH 412", 3);
$c4 = new Course("MATH 500", 3);

$allCourse = array($c1, $c2, $c3, $c4);
$temp_sol = array();


echo "update2"; echo "<br>"; //new line

find_course_combination($allCourse, -1, 4, $temp_sol);
echo "THE SOLUTION IS: "; var_dump($solutions);
debug_solutions();

?>

</body>
</html>
