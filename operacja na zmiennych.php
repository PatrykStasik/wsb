<?php 
$potega=2**10;
echo $potega,"<br>";

//operatory bitowe

$int=10;
$hex=0xA;
$oct=012; //2*8^0 + 1*8^1 = 10
$bin=0b1011; //11(10)

echo $int,"<br>";
echo $hex,"<br>";
echo $oct,"<br>";
echo $bin,"<br>";

//echo phpinfo();

//operatory bitowe
$x=0b1010;
echo $x; //10
$x=$x>>1;
echo $x; //5

$x=$x<<2;
echo $x; //20

//równe / identyczne
$x=1;
$y=1.0;

if ($x==$y) {
echo "równe<br>";
}else {
echo "równe<br>";
}
if ($x===$y) {
echo "identyczne<br>";
}else {
echo "nieidentyczne<br>";
}

echo gettype($x); //integer
echo gettype($y),"<hr>"; //double 

//operatory rzutowania danych

$text="123ssd";
$x=(int)$text;
echo $x; //123
echo gettype($x); //integer

$text=0;
$x=(bool)$text;
echo "\$text: $text";
echo "\$x: $x";

$text=10;
$x=(unset)$text;
echo "\$text: $text";
echo "\$x: $x";

echo gettype($text);
echo gettype($x), "<br>";

//rozmiar typu integer 
echo PHP_INT_SIZE; //8
echo PHP_INT_MIN,"<br>";
echo PHP_INT_MAX,"<br>";

//kontrola typu  zmiennych
$x=10;
echo is_int($x); //1
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x),"<br>";

//operator ignorowania błędów
$w;
echo @$w;
echo @gettype(w); //null 

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT']; //81
echo $_SERVER['SERVER_NAME']; //127.0.0.1
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['DOCUMENT_ROOT'],"br>"; //C:xampp/htdocs

$fileLocal = $_SERVER['DOCUMENT_ROOT'];
$fileLocal = $_SERVER['SCRIPT_NAME'];

echo $fileLocal,'<hr>';

//stałe - nazwa stałej z dużej litery
define("NAME", "Janusz");
echo NAME;

define("surnamE", "Kowal", true);
echo surname,"<br>";

//stałe predefiniowane
echo PHP_VERSION; //7.3.2
$echo PHP_OS; //WINNT
echo __LINE__; //107
echo __FILE__; 
echo __DIR__;
?>