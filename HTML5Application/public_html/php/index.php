<?php

echo "<img src=\"img/pelta.jpg">";
echo "<br>";
echo "<br>";

//Spojení řetězců

echo "au"."ti"."cko";
echo "blb" . "ost";
echo 5 . 7;
echo 2.3;

//Přirovnávací operátory

print "<br> ";
echo $a += $b;
var_dump($a+=$b);

print "<br> ";
echo $a--;
var_dump($a--);

print "<br> ";
echo $a++;
var_dump($a++);

print "<br>";
echo $a -= $b;
var_dump($a-=$b);

print "<br>";
echo $a *= $b;
var_dump($a*=$b);

print "<br>";
echo $a /= $b;
var_dump($a/=$b);

print "<br>Je $a větší číslo jak $b?<br>";
var_dump($a>$b);

print "<br>Je $a jiná hodnota než $b?<br>";
var_dump($a!=$b);

print "<br> Rovnají se?";
echo $a==$b;
var_dump($a==$b);


print "<br>Je $b větší než $a?<br>";
var_dump($a<$b);

?>