<?php
$lines = file("nombre.txt"); //Lis le fichier
$tab = array();//crée une table vide
foreach($lines as $n => $lines){//itere dans fichier
	array_push($tab,$lines);//remplie la table
}
print_r($tab); 
?> 
