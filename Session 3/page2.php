<?php
function compare2nb($nb1,$nb2){
	if ($nb1==$nb2)	{//egalité
	echo "Les deux nombre sont identiques<br>";
	}
	elseif ($nb1>$nb2){
	echo "le nombre le plus grand est $nb1, le nombre le plus petit est $nb2<br>";
	}
	else{
		echo "le nombre le plus grand est $nb2, le nombre le plus petit est $nb1<br>";
	}
}
echo "Avec 13 et 23<br>";
compare2nb(13,23);
echo "Avec 666 et 666<br>";
compare2nb(666,666);
echo "Avec 4 et 1<br>";
compare2nb(69,1);
?>
