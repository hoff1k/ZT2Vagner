<?php
//Spojeni retezcu
echo "au"."ti"."cko";
echo "blb" . "ost";
echo 5 . 7;
echo 2.3;

//Prirovnavaci operatory

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

print "<br>Je $a vetsi cislo jak $b?<br>";
var_dump($a>$b);

print "<br>Je $a jinaci hodnota nez $b?<br>";
var_dump($a!=$b);

print "<br> Rovna se?";
echo $a==$b;
var_dump($a==$b);


print "<br>Je $b vetsi císlo nez $a?<br>";
var_dump($a<$b);

//Aritmeticke operatory

print "<br>Nasobek = ";
echo $a*$b;
var_dump($a*$b);

print "<br>Deleni = ";
echo $a/$b;
var_dump($a/$b);
?>

print "<br>Scitani = ";
echo $a+$b;
var_dump($a+$b);

print "<br>Odcitani = ";
echo $a-$b;
var_dump($a-$b);
    
?>

</body>