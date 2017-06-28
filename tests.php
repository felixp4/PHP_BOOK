<?php

echo "Привет !!!";

$capitals = array("US"=>"Washington", "UK"=>"London", "Austria"=>"Vienna");
var_dump($capitals);

// sort($capitals);
// var_dump($capitals);

// asort($capitals);
// var_dump($capitals);

ksort($capitals);
var_dump($capitals);

$var = "first";
$$var = "Second";
var_dump($$var);

$first = "second";
$second = "third";

echo $first."<br>";
echo $$first."<br>";

$url = "http://zn.ua";
// header('location: '.$url);
// return $this->redirect($url);

class myClass
{
    public function __construct()
    {
        echo "Привет из конструктора !!! <br><br>";
    }
}

$my = new myClass();

$ar = array('h','e','l','l','o');
$ra = array_reverse($ar);
print_r($ra);

$reverse = array();
for($i=0; $i < count($ar); $i++) array_unshift($reverse, $ar[$i]);
print_r($reverse);

$str = "Turn me baby";
$rev = strrev($str);
print_r($rev);

for($i = strlen($str); $i>=0; $i--) $revarr[] = $str[$i];
print_r($revarr);
$revstr = implode("", $revarr);
echo "<br><br>".$revstr;

$a = "Turn me baby";
$b = "";

for($i = strlen($a)-1; $i>=0; $i--) $b.=$a[$i];
$a = $b;
echo "<br><br>".$a;

function fac($x)
{
    if($x===0)
        return 1;
    else
        return $x*fac($x-1);
}
echo "<br><br>".fac(4);

function fibonacci($n)
{
    if($n < 3)
        return 1;
    else
        return fibonacci($n-1) + fibonacci($n-2);
}
echo "<br><br>";
for ($n = 1; $n <=16; $n++)
{
    echo fibonacci($n) . ", ";
}
echo "... \n";

$sum = "123" + "abc";
echo "<br> $sum";

$sum1 = 123 + "abc";
echo "<br> $sum1";

$beer = 'Velikopopovetsky kozel';
echo "<br> $beer";
echo '<br> $beer';

$cars = array("BMW", "Audi", "Mercedes", "Porsche");
var_dump($cars);
print_r($cars);

echo "<br /><br />";
foreach($cars as $car)
{
    echo $car . "<br />";
}

$people = array("Иванов" => "Иван", "Сидоров" => "Николай", "Петров" => "Петр");
echo "<br /><br />";
echo $people["Иванов"] . "<br />";
echo $people["Сидоров"] . "<br />";
echo $people["Петров"] . "<br />";

function boo($num)
{
    switch($num)
    {
        case 2:
            echo "<br /> two !";
            break;
        case 3:
            echo "<br /> tree !";
            break;
        default:
            echo "<br /> shnyaga !!!";
            break;
    }
}
boo(5);

$arr = array(3,8,15,25,16,11,10,5,7,30);
echo "<br />" . count($arr) . "</br>";

for($i=0; $i<count($arr); $i++) {
    if ($arr[$i] % 5 == 0) {
        echo $i . "</br>";
    }
}

echo "</br></br>";
$lst = array();
$k = "prostoe";

for($i=2; $i<100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0)
            $k = "не простое";
    }

    if ($k == "простое")
        $lst[] = $i;
    else
        $k = "простое";
}

foreach ($lst as $list)
    echo $list . "</br>";

echo "</br></br>";
do {
    $a = rand(0, 10);
    $b = rand(0, 10);
    $c = rand(0, 10);

    $result = $a + $b + $c;
    echo $result . "</br>";
} while ($result < 14);


