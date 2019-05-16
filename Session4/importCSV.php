<?php

if (($file = fopen("import.csv", "r")) !== FALSE){//Verifie que le fichier existe bien
    while (($data = fgetcsv($file, 1000, ";")) !== FALSE){//lire le fichier csv ligne par lignes
        $num = count($data);//Nombre de données par ligne
       echo "<br>";
        for ($i=0; $i < $num; $i++){//Formatage des données à l'affichage
           echo $data[$i] . " | ";
        }
    }
    fclose($file);
}
?>

