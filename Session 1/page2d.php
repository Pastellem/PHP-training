<?php
$tab=array("bonjour1","bonjour2","bonjour3","bonjour4","bonjour5","bonjour6");
echo "<br>Krumo sortie:<br>";
include("class.krumo.php");
// Dump out the array, short and long versions
krumo($tab);
k($tab);
// Output the array and then exit();
kd($tab);
?>


