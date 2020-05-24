<!DOCTYPE html>
<html>
<body>

<?php

$x=5;
$y=6;


function myTest()
{
	$z=6;
	echo $GLOBALS['y'];
	echo "<br>";
	echo "z的值是：$z";
}

myTest()


?>


</body>
</html>
