<?php
function ecrire_bonjour(){
	echo "bonjour ";
}
echo "<br>Boucle FOR<br>";

for($i=0; $i<10;$i++){
	ecrire_bonjour();
} 
echo "<br>Boucle While<br>";
$i=0;
while($i<10){
	ecrire_bonjour();
	$i++;
}
?>
