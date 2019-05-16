<?php

$name = "";
$name = $_POST['NAME'] ;

echo "<br> Case sensible<br>";
if ($name=="Dupond"){
	echo "Bravo M. $name, vous avez gagné ";
}
else{
	echo "Désolé M. $name, vous avez perdu";
}

echo "<br>  Case insensible <br>";
if (strcasecmp($name,"Dupond") == 0){ //Verifie si str identique sans case sensibility
	$namel=strtolower($name); //transforme la chaine de caractère en miniscule
	echo "Bravo M. $namel , vous avez gagné ";
}
else{
	echo "Désolé M. $name, vous avez perdu";
}


?> 
