<?php
$lines = file("nombre.txt"); //Lis le fichier
$tab = array();//crée une table vide
foreach($lines as $n => $lines){
	array_push($tab,$lines);
}
print_r($tab);
?> 
