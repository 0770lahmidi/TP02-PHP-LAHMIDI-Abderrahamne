<?php
$v1 = 42;         
$v2 = "42";        
$v3 = 15.8;       
$v4 = true;       
$v5 = false;      
$v6 = null;        

echo "<h2>1. Examen des types initiaux avec var_dump()</h2>";
echo "<pre>";
var_dump($v1, $v2, $v3, $v4, $v5, $v6);
echo "</pre>";

$conv1 = (int) "42";
$conv2 = (int) 15.8;
$conv3 = (string) 42;

echo "<h2>2. Conversions demandées</h2>";
echo "<pre>";
echo "Conversion de \"42\" en int : ";
var_dump($conv1);
echo "Conversion de 15.8 en int : ";
var_dump($conv2);
echo "Conversion de 42 en string : ";
var_dump($conv3);
echo "</pre>";

//. Afficher true et false avec echo, puis avec var_dump()
echo "<h2>3. Affichage de true et false</h2>";
echo "Avec echo :<br>";
echo "true : " . $v4 . "<br>";
echo "false : " . $v5 . "<br><br>"; 
echo "Avec var_dump() :<br>";
echo "<pre>";
var_dump($v4);
var_dump($v5);
echo "</pre>";

//. Convertir '0', '"0"', '"PHP"' et un tableau vide en booléens
$b1 = (bool) 0;
$b2 = (bool) "0";
$b3 = (bool) "PHP";
$b4 = (bool) [];

echo "<h2>4. Conversions en booléens</h2>";
echo "<pre>";
echo "(bool) 0 : "; var_dump($b1);
echo "(bool) \"0\" : "; var_dump($b2);
echo "(bool) \"PHP\" : "; var_dump($b3);
echo "(bool) [] : "; var_dump($b4);
echo "</pre>";
?>