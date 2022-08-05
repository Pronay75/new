<!DOCTYPE html>
<html>
<body>

<?php
$tem = array("sat"=>"34", "sun"=>"32", "mon"=>"31", "tue"=>"32", "wed"=>"33", "thu"=>"34", "fri"=>"34");
$value = max($tem);
$value1 = min($tem);


$key = array_search($value, $tem);
$key1 = array_search($value1, $tem);

$average = array_sum($tem)/count($tem);
echo "The max temperature  is: ".$value.", its Day is: ".$key  ;
echo "<br>";
echo "The min temperature  is: ".$value.", its Day is: ".$key;
echo "<br>";
echo "The Average temperature  is: ".$average;


?>

</body>
</html>

