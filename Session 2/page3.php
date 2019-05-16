<?php

$a = $b = $c = "";
$a=$_POST['numb1'];
$b=$_POST['numb2'];
$c=$_POST['numb3'];

echo "<br>";
//Verifie que $c existe sinon mettre 1 : Defaut
if(isset($_POST['numb3'])){
	$c=$_POST['numb3'];
	}
else{ $c=1;}

$tab=NULL;
//Initialisation de la table
if (is_numeric($a) && is_numeric($b) && is_numeric($c)){
	if ($a==$b)	{
	echo "Les deux nombre sont identiques";
	}
	elseif ($a>$b && $b>=0){
	$tab=range($b,$a,$c);
	}
	elseif ($b>$a && $a>=0) {
		$tab=range($a,$b,$c);
	}
}

$max=sizeof($tab);
//Verifie que la table est bien initialise
if ($tab!=NULL){
	while ($j<2)
	{	
		$chiffre="";
		//Boucle pour ordre croissant d'affichage
		for ($i=0; $i<$max; $i++){
		if($i==0){
		$chiffre = $chiffre.$tab[$i];
		}
		else{
			$chiffre = $chiffre."-".$tab[$i];
			}
		}
		echo $chiffre;
		echo "<hr>";
		$chiffre="";
		//Boucle pour ordre decroissant d'affichage
		for ($i=($max); $i>-1; $i--){
			if($i==$max){
				$chiffre = $chiffre.$tab[$i];
			}
			else{
			$chiffre = $chiffre.$tab[$i]."-";
			}
			}
		echo $chiffre;
		$j++;
		echo "<hr>";
		}
}

?> 
