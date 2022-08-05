<!DOCTYPE html>
<html>
<body>
<?php
$n = 9; 

$count = 0;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
?>

</body>
</html>