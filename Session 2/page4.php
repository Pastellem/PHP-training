<?php
$table ="<table>";
$x=1; //incrémenteur valeur de table
for ($i=0; $i<10; $i++) //boucle pour les lignes
	{
		$j=0; // incrementeur col
		$table=$table."<tr>";
		while($j<10){ //boucle pour les colonnes
		
		$table=$table."<td>{$x}</td>";
		$j++;
		$x++;
		}
		$table=$table."</tr>";
	}
echo $table."</table>";
echo "<br><br>";
?>
