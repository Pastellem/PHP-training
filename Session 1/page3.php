<?php

$mail = $msg = $case = $radio = $bouton = $name = $age = "";
$file = NULL;
$mail = $_POST['mail']; #recupère l'adresse mail
$msg = $_POST['msg']; #recupère l'adresse le commentaire
$radio = $_POST['bouton'];#recupère la valeur radio
$file = $_FILES["MyFile"]["name"];
$bouton = $_POST['soumission'];#recupère la valeur bouton

if (isset($_POST['CASE'])){
	$checkbox= $_POST['CASE']; #recupère la valeur checkbox
}

echo "votre email $mail <br>";
echo "votre message : $msg<br>";
echo "Votre choix checkbox : $checkbox <br>";
echo "Votre choix radio $radio<br>";
echo "Votre fichier : $file<br>";
echo "Valeur du bouton : $bouton<br>";

?>
