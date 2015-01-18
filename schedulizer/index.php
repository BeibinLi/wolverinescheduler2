<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Emerald 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Emerald by FCT</title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.devrama.slider-0.9.4.js"></script>
<script type="text/javascript" src="js/list.js"></script>
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
            <h1>Add New Course</h1>
        </div>
        <center>
        <form id="addbar" action="" method="post">
          <table style="width:70%">
            <tr style="font-size:1.4em; font-family: 'Abel', sans-serif;">
                <td>Department</td>
                <td>Course Number</td>
            </tr><tr>
                <td><input id="dept_in" type="text" class="class_in" name="deptN" value="ENGR" onclick="changeValueDept()" style="font-family: 'Abel', Arial; color:#CCCCCC" /></td>
                <td><input id="num_in" type="text" class="class_in" name="numN" value="101" onclick="changeValueNum()" style="font-family: 'Abel', Arial; color:#CCCCCC" /></td>
                <td><input id="add_button" type="image" class="add" src="images/math-add-icon.png" style="width:35px; height:35px"></td>
            </tr>
          </table>
         </form>
         </center>
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
        <div id="schedule_btn_div" style="padding-top:25px" align="center">
            <input id="schedule_button" type="button" value="CLICK TO SCHEDULE" style="background-color: #FFD700; width:40%; height: 50px;margin:0px; border:0px; font-size:1.6em; font-family: 'Abel', Arial; font-weight:bold" ></input>
        </div>
        <div id="course_list">
            <table id="course_table"></table>
        </div>
        
    </div>

    
    <div id="num_schedule">
        1 possible schedule:
    </div>

    <div id="my-slide" >
        <div>
        <table width="100%" id="caltable">
            <tr>
                    <th>Time</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thru</th>
                    <th>Fri</th>
            </tr>

            <tr>
                <th rowspan="2">8:00 - 9:00am</th>

                <td>Physics-1</td>
                <td>English</td>
                <td title="No Class" class="Holiday"></td>
                <td>Chemestry-1</td>
                <td>Alzebra</td>
            </tr>

            <tr>

                <td>Math-2</td>
                <td>Chemestry-2</td>
                <td>Physics-1</td>
                <td>Hindi</td>
                <td>English</td>
            </tr>

            <tr>
                <th rowspan="2">9:00 - 10:00am</th>

                <td>Hindi</td>
                <td>English</td>
                <td>Math-1</td>
                <td>Chemistry</td>
                <td>Physics</td>

            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>

            </tr>

            <tr>
                <th rowspan="2">10:00 - 11:00am</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>
                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">11:00 - 12:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">12:00 - 1:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">1:00 - 2:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">2:00 - 3:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>
                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">3:00 - 4:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">4:00 - 5:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">5:00 - 6:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">6:00 - 7:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">7:00 - 8:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>
                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">8:00 - 9:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">9:00 - 10:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>

            <tr>
                <th rowspan="2">10:00 - 11:00pm</th>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </tr>

            <tr>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
            </tr>
        </table>
        </div>
        <div data-lazy-background="http://devrama.com/static/devrama-slider/images/4247776023_81a3f048ca_b.png">
        </div>
    
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#my-slide').DrSlider({
                width: 1024, //slide width
                height: 400  //slide height
            }); //Yes! that's it!
        });
        </script>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page -->
</div>
<!-- end #footer -->

<?php
	$result = babyFunction();	//TODO
	$temp_row=array_fill(0,5,"");
	$timetable=array_fill(0,30,$temp_row);

	class Index {
		public $row;	// day
		public $col;	// time

		function __construct($row_in, $col_in) {
			$this->row = $row_in;
			$this->col = $col_in;
		}
	}

	$indexes = array();

	foreach($result as &$solution){	// for each solution
		foreach($solution as &$lec){	// for each lecture
			
			$days_arr = str_split($lec->days);
			foreach($days_arr as &$day) {
				switch($day) {
					case "M":break;
					case "T":break;
					case "W":break;
					case "R":break;
					case "F":break;
					default: break;
				}


				$time_diff = $end_col-$start_col;
				$timetable[0][$start_col*2] = "course";
				$timetable[0][$end_col*2] = "end";
				for($z = 0; $z < $time_diff-1; $z++)
				{
					$temp_arr[0][$z+$start] = "fill";
				}
			}
		}
	}
	a array_fill(int)
	result;
	for ($x = 0; $x <= 10; $x++) {
		for ($x = 0; $x <= row_max; $x++) {
			for ($x = 0; $x <= col; $x++) {
				...
			} 
		} 
    } 
?>
</body>
</html>
