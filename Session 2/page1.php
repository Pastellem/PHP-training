<?php
$j=0;
$tab=range(1,100); //crée une table contenant les chiffres 1 à 100
while ($j<2){	//condition pour affichié 2 fois
	$chiffre="";//initialisation de la chaine de caractere
	//Boucle pour ordre croissant d'affichage
	for ($i=0; $i< sizeof($tab); $i++)
		{
		if($i==0){ //evite de mettre un tire avant le zero
		$chiffre = $chiffre.$tab[$i];
		}
		else{
			$chiffre = $chiffre."-".$tab[$i];
			}
		}
	
	echo $chiffre."<br>";
	echo "<hr>";
	$chiffre="";
	//Boucle pour ordre decroissant d'affichage
	for ($i=(sizeof($tab)); $i>-1; $i--){
		if($i==sizeof($tab)){
				$chiffre = $chiffre.$tab[$i];//evite de mettre un tire avant le 100
			}
			else{
			$chiffre = $chiffre.$tab[$i]."-";
			}
		}	
	echo $chiffre."<br>";
	$j++;
	echo "<hr>";
}
?> 
