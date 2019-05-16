<?php
//Déclaration d"un tableay indexé numériquement
$tab=array("bonjour1","bonjour2","bonjour3","bonjour4","bonjour5","bonjour6");
//Affiche successivement les lignes du tableau
echo "<tr><td>$tab[0]</td><td>$tab[1]</td></tr>";
echo "<tr><td>$tab[2]</td><td>$tab[3]</td></tr>";
echo "<tr><td>$tab[4]</td><td>$tab[5]</td></tr>";
echo "<br><br><br>";
//Boucle dans la table qui va afficher chaque element 
for ($i=0; $i<3; $i++)
	{
		//le multiple de 2 va permettre d'incrémenté correctement
		// +1 permet d'afficher 2 éléments de la tables
		echo "<tr><td>{$tab[2*$i]}</td><td>{$tab[2*$i+1]}</td></tr>";
	}
	
	for ($i=0; $i<6; $i++)
{
	//Instaure des conditions afin que l'affichage ce fasse dans le bonne ordre
	if ($i == 0 ||  $i==2 || $i==4)
		echo "<tr>";
		echo "<td>$tab[$i]</td>";
	if ($i == 1 ||  $i==3 || $i==5)
		echo "</tr>";
}

?>
