<?php
$a = $b = "";
$a=$_POST['numb1'];
$b=$_POST['numb2'];
echo "<br>";

if (is_numeric($a) && is_numeric($b)){
	if ($a==$b)	{
	echo "Les deux nombre sont identiques";
	}
	elseif ($a>$b){
	echo "le nombre le plus grand est $a, le nombre le plus petit est $b";
	}
	else{
		echo "le nombre le plus grand est $b, le nombre le plus petit est $a";
	}
}
else{
	echo "vous n'avez pas saisez deux nombres";
}
?> 
