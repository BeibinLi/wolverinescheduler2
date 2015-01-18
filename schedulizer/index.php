<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
Name : Emerald
Description: A two-column, fixed-width design with dark color scheme.
Version : 1.0
Released : 20120902
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Plan Your Semester</title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.devrama.slider-0.9.4.js"></script>
<script type="text/javascript" src="js/list.js"></script>

	<link href="fullcalendar.css" rel="stylesheet">
	<link href="fullcalendar.print.css" rel="stylesheet" media="print">
	<script src="moment.min.js"></script>
	<script src="jquery.min.js"></script>
	
	<style>
		#calendar {
			max-width: 900px;
			margin: 0 auto;
		}
	</style>


</head>
<body>
<div id="wrapper">
<div id="header-wrapper" class="container">
<div id="header" class="container">
<div id="logo">
<img src="images/Untitled-4.png" width="230">
</div>
<div id="menu">
<ul>
<li class="current_page_item"><a href="#">Homepage</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Photos</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
</div>
<!-- end #header -->
<div id="page">
<div id="addingcourse">
<div id="add_new_course">
<h1>Enter Your Courses</h1>
</div>
<center>
<form id="addbar" action="/schedulizer/index.php" method="post" enctype="multipart/form-data">
<table style="width:70%; padding-bottom:15px">
<tr style="font-size:1.4em; font-family: 'Abel', sans-serif;">
<td>Department</td>
<td>Course Number</td>
</tr><tr>
<td><input id="dept_in1" type="text" class="class_in" name="dept_in1" value="<?php $varx = isset($_POST["dept_in1"]) ? $_POST["dept_in1"] : ""; echo $varx; ?>" onclick="changeValueDept()" style="font-family: 'Abel', Arial; color:#000000" /></td>
<td><input id="num_in1" type="text" class="class_in" name="num_in1" value="<?php $varx = isset($_POST["num_in1"]) ? $_POST["num_in1"] : ""; echo $varx; ?>" onclick="changeValueNum()" style="font-family: 'Abel', Arial; color:#000000" /></td>
</tr>
<tr>
<td><input id="dept_in2" type="text" class="class_in" name="dept_in2" value="<?php $varx = isset($_POST["dept_in2"]) ? $_POST["dept_in2"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
<td><input id="num_in2" type="text" class="class_in" name="num_in2" value="<?php $varx = isset($_POST["num_in2"]) ? $_POST["num_in2"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
</tr>
<tr>
<td><input id="dept_in3" type="text" class="class_in" name="dept_in3" value="<?php $varx = isset($_POST["dept_in3"]) ? $_POST["dept_in3"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
<td><input id="num_in3" type="text" class="class_in" name="num_in3" value="<?php $varx = isset($_POST["num_in3"]) ? $_POST["num_in3"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
</tr>
<tr>
<td><input id="dept_in4" type="text" class="class_in" name="dept_in4" value="<?php $varx = isset($_POST["dept_in4"]) ? $_POST["dept_in4"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
<td><input id="num_in4" type="text" class="class_in" name="num_in4" value="<?php $varx = isset($_POST["num_in4"]) ? $_POST["num_in4"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
</tr>
<tr>
<td><input id="dept_in5" type="text" class="class_in" name="dept_in5" value="<?php $varx = isset($_POST["dept_in5"]) ? $_POST["dept_in5"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
<td><input id="num_in5" type="text" class="class_in" name="num_in5" value="<?php $varx = isset($_POST["num_in5"]) ? $_POST["num_in5"] : ""; echo $varx; ?>" style="font-family: 'Abel', Arial; color:#000000" /></td>
<!-- <td><input id="add_button" type="image" class="add" src="images/math-add-icon.png" style="width:35px; height:35px"> </td> -->
</tr>
</table>
<input id="schedule_button" type="submit" value="CLICK TO SCHEDULE" style="background-color: #FFD700; width:40%; height: 50px;margin:0px; border:0px; font-size:1.6em; font-family: 'Abel', Arial; font-weight:bold" ></input>
</form>
</center>



		
		<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>

<?php
class Lecture{
    public $coursename;
    public $start_time;
    public $end_time;
    public $days;
    
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
    
    function __construct4($a1,$a2,$a3,$a4){
        // echo 'new Lecture created ';
        $this->coursename = $a1;
        $this->start_time = $a2;
        $this->end_time = $a3;
        $this->days = $a4;
    }
}
// $demodemo = new Lecture("EECS 280", 9, 10, "MWF");
// var_dump($demodemo);
class Course{
    public $coursename;
    public $credit;
    public $lectures = array();
    
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
    
    public function add($L){
        array_push($this->lectures, $L);
        // echo "ADD"; var_dump($this->lectures); echo "<br>";
    }
}
// GLOBAL VARIABLES
$solutions = array(); //2D array
$schedule = array(); //2D array
$allCourse = array(); //array for Courses 
$test_var = 1002;
function absolute_val($x){
    if($x > 0) return $x;
    $zero = 0;
    return $zero - $x;
}
function find_course_combination(&$potential_courses, $curr_index, $credits, &$selected) {
    global $solutions;
    global $schedule;
    
    // echo "find_course_comb inputs are: "; var_dump($potential_courses); 
    //       echo "<br>"; //new line
    // echo "input credit is: "; echo $credits;     echo " abs: "; echo absolute_val($credits); echo "<br>";
    // echo "selected array is: "; var_dump($selected); echo "<br>";
    
    if( absolute_val($credits) < 3){
      array_push($solutions, $selected);
    //   echo "I FIND A SOLUTION!  "; var_dump($selected);
    //   echo "<br>"; //new line
      return;
    }
    
    if($credits < 0) return;
    
    for ($i = $curr_index + 1 ; $i < count($potential_courses); $i++) {
      $course = $potential_courses[$i];
    //   echo "now pushing: "; var_dump($course); echo "<br>"; //new line
      array_push($selected, $course);
      
      $remain_credit = $credits - $course->credit;
    //   echo "Remaining Credit! Fuck: "; echo $remain_credit; echo " Course->Credit: "; echo $course->credit; 
    //       echo "input credit is: "; echo $credits; echo "<br>";
      
      find_course_combination($potential_courses, $i, $remain_credit, $selected);
      array_pop($selected);
    }  //end for
}
function isOnSameDay($L1, $L2) {
    $L1_arr = str_split((string)$L1->days);
    $L2_arr = str_split((string)$L2->days);
    foreach ($L1_arr as $c1) { // TODO horrible efficiency
        foreach ($L1_arr as $c2) {
            if ($c1 == $c2)
                return True;
        }
    }
    return False;
}
function hasConflict($L1, $L2) {
    if(isOnSameDay($L1, $L2) and $L1->start_time >= $L2->start_time and $L1->start_time < $L2->end_time)
        return True;
    if(isOnSameDay($L1, $L2) and $L2->start_time >= $L1->start_time and $L2->start_time < $L1->end_time)
        return True;
  return False;
}
function hasConflictWithList($L, &$V){
  if(count($V) == 0) return false;
  
  for ($i = 0 ; $i < count($V); $i++) {
    if(hasConflict($L, $V[$i])) return True;
  }    
  return False;
}
function find_time(&$course_list, $curr_index, &$curr_result){
    global $solutions;
    global $schedule;
    
  if(count($course_list) == count($curr_result)) {
    array_push($schedule, $curr_result);  
    return;
  }
  
  for ($i = $curr_index+1 ; $i < count($course_list); $i++) {
    $temp_course = $course_list[$i];
    for ($j = 0 ; $j < count($temp_course->lectures); $j++) {
      if( hasConflictWithList($temp_course->lectures[$j], $curr_result) ) 
        continue;
      
      array_push($curr_result, $temp_course->lectures[$j]);
      find_time($course_list, $i, $curr_result);
      array_pop($curr_result);
    }
  }
}
function debug_solutions()
{
    echo "<br>";
    global $solutions;
    global $schedule;
    
    for($i=0; $i < count($solutions); $i++){
        $total_credit = 0;
        for($j=0; $j < count($solutions[$i]); $j++){
            $course = $solutions[$i][$j];
            echo $course->coursename; echo " ";
            $total_credit += $course->credit;
        }
        echo "total: "; echo $total_credit ; echo "<br>"; //new line
    }
}
function print_time($time)
{
    $add = $time + 0.6;
    echo (int)$time; 
    
    if((int)$add == (int)$time){
    	// time o'clock
    	echo ":00";
    }else{
    	echo ":30";
    }
}
$bigstring;

function print_one_schedule($aschedule) {
    $out = array(); //2D
    
    $title = str_repeat('&nbsp;', 12) . "MONDAY". str_repeat('&nbsp;', 8).   "TUESDAY". str_repeat('&nbsp;', 5).   
    "WEDNESDAY". str_repeat('&nbsp;', 4).   "THRUSDAY". str_repeat('&nbsp;', 4).   "FRIDAY";
    for($i = 1; $i < 10; $i++){
    	$out[$i] = array(); // array of string
    	$out[$i][0] = (string)($i + 7);
    	for($j=1; $j<6;$j++){
    		$out[$i][$j] = " ";
    	}
    }
    
    //Core, set up
    foreach($aschedule as $lec){
    	$s_arr = str_split((string)$lec->days);
    	foreach($s_arr as $c){
    		if($c == "M") { $out[(int)$lec->start_time - 7][1] = $lec->coursename; }
    		else if($c == "T") { $out[(int)$lec->start_time - 7][2] = $lec->coursename;}
    		else if($c == "W") { $out[(int)$lec->start_time - 7][3] = $lec->coursename;}
    		else if($c == "R") { $out[(int)$lec->start_time - 7][4] = $lec->coursename;}
    		else if($c == "F") { $out[(int)$lec->start_time - 7][5] = $lec->coursename;}
    	}
    }
    
    //var_dump($out);
    
    //Print out
    echo "<br>";
    echo $title; echo "<br>"; 
    echo "------------------------------------------------------------------------------------------------------------";
    echo "<br>"; 
    for($i = 1; $i < count($out); $i++){
    	for($j=0; $j < 6; $j++){
    		if($i == 1 and $j == 0){
    			echo "08";
    		}else if( $i == 2 and $j == 0){
    			echo "09";
    		}else if($j == 0){ // first column
    			echo $out[$i][$j]; 
    		}else if( strlen($out[$i][$j]) < 4 ){
    			echo  str_repeat('&nbsp;', 8);
    		}else{
    		    //echo $i; echo ","; echo $j;
    		    echo strtoupper($out[$i][$j]); 
    		}
    		echo  str_repeat('&nbsp;', 10);
    	}
    	echo "<br>";
    }
}

function debug_schedule(){
        echo "<br>";
    global $solutions;
    global $schedule;
    
    //var_dump($schedule);
    
    global $bigstring;
    
    echo "Here are the possibe solutions:"; echo "<br>";
    $count = 1;
    if( count($schedule) == 0 || $schedule[0] == NULL ){
    	echo "Ooops! No Output! Try difference courses"; echo "<br>";
    	return;
    }

	$i = 0;  echo "<br>";
	for($j=0; $j<count($schedule[$i]); $j++){
            $lect = $schedule[$i][$j];
            $bigstring = $bigstring . $lect->coursename . ", "  . $lect->start_time . ", ". $lect->end_time . ", " . $lect->days . ";";
        }
	// var_dump($bigstring);  echo "<br>";
    
    for($i=0; $i<count($schedule); $i++){
        echo "Schedule: "; echo $count; echo "<br>";
        for($j=0; $j<count($schedule[$i]); $j++){
            $lect = $schedule[$i][$j];
            echo $lect->coursename; echo ": "; 
            print_time( $lect->start_time ); echo " - "; print_time( $lect->end_time);
            echo "   "; echo $lect->days; echo "<br>";
        }
        print_one_schedule($schedule[$i]);

        echo "<br>"; echo "<br>"; echo "<br>";
        $count++;
    }
    
    echo "<br>";
}


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
  $inputs = array();
  for ($i = 1; $i < 6; $i++) {
    try {
      $dpt = trim($_POST['dept_in' . $i]);
      $coursenum = trim($_POST['num_in' . $i]);
      $coursename = $dpt . " " . $coursenum;
      array_push($inputs, $coursename);
    }
    catch(Exception $e) {
        die(var_dump($e));
      }
    }
  // START SQL FETCH
  error_reporting(-1);
  ini_set('display_errors', true);
  $server = "tcp:rd4vxrj1mk.database.windows.net";
  $user = "SQLAdmin";
  $pwd = "Mhacks12345";
  $db = "MHacks2015";
  $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
  if($conn === false){
  echo "Failure!";
  } else {
  // echo "Success!";
  }
  foreach($inputs as $course_name){
  $sql = "SELECT credits
  FROM courses
  WHERE coursename = '" . $course_name . "';";
  $stmt = sqlsrv_query( $conn, $sql);
  if( $stmt === false ) {
  echo "Query failed!";
  } else {
  // echo "Query successful";
  }
  // var_dump($stmt);
  // Make the first (and in this case, only) row of the result set available for reading.
  if( sqlsrv_fetch( $stmt ) ) {
  // Get the row fields. Field indeces start at 0 and must be retrieved in order.
  // Retrieving row fields by name is not supported by sqlsrv_get_field.
  $num_credit = sqlsrv_get_field( $stmt, 0);
  $new_course = new Course($course_name, $num_credit);
  $sql = "SELECT starttime, endtime, days
  FROM lectures
  WHERE coursename = '" . $course_name . "';";
  $stmt = sqlsrv_query( $conn, $sql);
  if( $stmt === false ) {
  echo "Query failed!";
  } else {
  //echo "Query successful";
  }
  while( sqlsrv_fetch( $stmt ) ) {
  $start_time = sqlsrv_get_field( $stmt, 0);
  $end_time = sqlsrv_get_field( $stmt, 1);
  $days = sqlsrv_get_field( $stmt, 2);
  $new_lecture = new Lecture($course_name, $start_time, $end_time, (string)$days); //?? todo for location
  $new_course->add($new_lecture);
  }
  array_push($allCourse, $new_course);
  }
  }//end foreach inputs
  // var_dump($allCourse); //??todo
  //$allCourse = array();
  $temp_sol = array();
  function max_credits(){
  global $allCourse;
  $total = 0;
  foreach($allCourse as $oneCourse){
  $total += $oneCourse->credit;
  }
  if($total > 18) return 18;
  return $total - 1;
  }
  $student_credit = max_credits();
  find_course_combination($allCourse, -1, $student_credit, $temp_sol);
  // echo "THE SOLUTION IS: "; var_dump($solutions);
  for($i=0; $i < count($solutions); $i++){
  global $solutions;
  global $schedule;
  $total_credits = 0;
  for($j=0; $j<count($solutions[$i]); $j++){
  $sch = $solutions[$i][$j];
  $total_credits += $sch->credit;
  // echo $sch->coursename; echo " ";
  }
  // echo "total: "; echo $total_credits; echo "<br>";
  $dumb = array();
  find_time($solutions[$i], -1, $dumb);
  }
  echo "<br>";
  debug_schedule();
  // var_dump($schedule);
}
// CHANGE SCHEDULE TO A STRING?
?>




<!--
<form id="addbar" style="width:80%" action="" method="post">
<h2>Department
Course Number
</h2>
<br>
<input id="dept_in" type="text" class="class_in" value="ENGR" onclick="changeValueDept()" style="color:#A9A9A9; text-size:1.1em">
<input id="num_in" type="text" class="class_in" value="101" onclick="changeValueNum()" style="color:#A9A9A9; ">
<input id="add_button" type="image" src="images/math-add-icon.png" class="add" style="width:40px; height:40px"></input>
</form>
-->
<!--
<table width="80%" align="center" >
<tr id="adding_bar" style="font-size:1.5em">
<td height="12">
Department
</td>
<td height="12">
Course Number
</td>
</tr>
<tr id="textbox">
<td>
<input id="dept_in" type="text" class="class_in" value="ENGR" onclick="changeValueDept()" style="color:#A9A9A9; text-size:1.1em">
</td>
<td>
<input id="num_in" type="text" class="class_in" value="101" onclick="changeValueNum()" style="color:#A9A9A9; ">
</td>
<td>
<input id="add_button" type="image" class="add" src="images/math-add-icon.png" style="width:40px; height:40px"></input>
</td>
</tr>
</table>
-->
<div id="course_list">
<table id="course_table"></table>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
$('#my-slide').DrSlider({
width: 1024, //slide width
height: 400 //slide height
}); //Yes! that's it!
});
</script>
<div style="clear: both;">&nbsp;</div>
</div>
<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
<!-- end #page -->
</div>
<!-- end #footer -->
