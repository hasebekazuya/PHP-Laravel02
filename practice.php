<?php
echo 'hello php!';


$a = 3;
$b = 7;
echo $a + $b . PHP_EOL;


$array_month = ['1月', '2月', '3月',  '4月',  '5月',  '6月',  '7月',  '8月',  '9月',  '10月',  '11月',  '12月'];
echo $array_month[7];


$hello = "Hello,";
$name = "長谷部";
echo $hello . $name . PHP_EOL;


$tech_boost ="tech";
$tech_boost .=" boost";
echo $tech_boost . PHP_EOL;


$calendar =[
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "Jyly" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "Nobember" => "11月",
    "December" => "12月"
];
echo $calendar["December"] . PHP_EOL;

$name = "kazuya" ;
if ($name == "kazuya") {
   echo "私は ".$name."です".PHP_EOL;
}else{
    echo $name."ではありません。" . PHP_EOL;
}

$total = 0;
for ($i =0; $i <= 10000; $i ++) {
$total + $i;
}
echo $total . PHP_EOL;

$fruits = ["strawberry", "apple", "Japnese apple", "pine apple", "grape"] ;
foreach ($fruits as $fruit) {
    echo $fruit.PHP_EOL;
}

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i ++) {
    if ($i %  5 == 0) {
        echo $i;
    }
}