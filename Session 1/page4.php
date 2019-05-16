<?php

$name = $age = "";
$name = $_POST['NAME'] ;
$age =$_POST['age'];


if($age>18){
echo "Bonjour M/Mlle \" $name \", vous avez plus de 18ans";
}
else{
echo "Bonjour M/Mlle \" $name \", vous avez moins de 18ans";
}

?> 
