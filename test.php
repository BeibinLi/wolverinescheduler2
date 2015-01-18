<!DOCTYPE html>
<html>
<body>

<h1> PHP page for algorithm </h1>

<?php echo "Hello World!"; ?>

<?php

class Lecture{
    public $coursename;
    public $start_time;
    public $end_time;
    
    function __construct(){
        echo "new Lecture created\r\n";
    }
}

$lec = new Lecture();

?>

</body>
</html>
