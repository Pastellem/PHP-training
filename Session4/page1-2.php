<?php
$file = NULL;
$file = $_FILES["MyFile"]["name"];
$text= file($file); //lis le fichier et le stock dans un array

echo "Exerce 1 <br>";
echo "Votre fichier : $file <br> Premiere ligne : $text[0]<br>";
echo "<hr>";
echo "Exerce 2 <br> Afficher une ligne sur 2 <br>";

for($i=0;$i<sizeof($text);$i++){
	if($i==0 || $i%2){
	echo "$text[$i]<br>";}
}
echo "Votre fichier : $file à $lines lignes<br>";
echo "<hr>";

?>
