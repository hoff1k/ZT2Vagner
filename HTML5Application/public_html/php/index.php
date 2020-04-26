<?php
//Úkol č.2
//Proměnná
$promenna1 = 4;
$promenna2 = 2;

//Podmínka
if (true) {
    echo "test123";
    echo "<br><br>";
}

//Podmínka else
$promenna4 = "Dzejkob";
$prommena3 = "Vejgnr";

if ($promenna1 != $promenna2) {
    echo $promenna4 ;
}else{
    echo $prommena3 ;
}
echo "<br>";
//Switch & case 
print "Odpověď: ";
switch ($promenna1) {
    case 0: 
        echo "ne";
        break;
    case 1: 
        echo "cyka blyat";
        break;
    case 2: 
        echo "furt ne";
        break;
    case 3: 
        echo "nevim no";
        break;
    case 4:
        echo "spise ne";
        break;
    default: 
        echo "default se vybere v pripade, ze zadny case nebude platit";
        break;
}

//Jednorozmerne pole
print "Auta:";
$auta = array(1 => "porsche",
    2 => "audi",
    3 => "bmw",
    4 => "skoda",
    5 => "lamborghini",
    6 => "subaru");
var_dump($auta);

//Vnorene pole 
print "PC: ";
$pc = array( 
    "1" => array(
        "2" => array(
            "3" => array('procesor' => 'i7', 
                'gpu' => 'rx570',
                'pamet' => '8gb',
                'uloziste' => '1tb'),
                'cena' => '18 500,- czk'),
            array('procesor' => 'i9', 
                'gpu' => 'rx2700',
                'pamet' => '32gb',
                'uloziste' => '4tb',
                'cena' => '50 000,- czk'),
            array('procesor' => 'i3', 
                'gpu' => 'gtx 1050ti',
                'pamet' => '16gb',
                'uloziste' => '2tb',
                'cena' => '20 000,- czk'),
            array('procesor' => 'i5', 
                'gpu' => 'rx590',
                'pamet' => '16gb',
                'uloziste' => '1.5tb',
                'cena' => '25 000,- czk'),
            array('procesor' => 'i9', 
                'gpu' => 'rtx 2070',
                'pamet' => '32gb',
                'uloziste' => '5tb',
                'cena' => '65 000,- czk'),
            array('procesor' => 'i5', 
                'gpu' => 'rx580',
                'pamet' => '16gb',
                'uloziste' => '1tb',
                'cena' => '20 000,- czk'),
        )
    );
var_dump($pc[1]);




//Úkol č.1 
//
//
//Spojeni retezcu
echo "au"."ti"."cko";
echo "<br>";
echo "blb" . "ost";
echo "<br>";
echo 5 . 7;
echo 2.3;

//Prirovnavaci operatory
$a = 2;
$b = 3;

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