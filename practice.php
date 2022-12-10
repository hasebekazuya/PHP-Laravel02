<?php
echo 'hello php!';
?>

<?php
$a = 3;
$b = 7;
echo $a + $b . PHP_EOL;
?>

<?php
$array_month = ['1月', '2月', '3月',  '4月',  '5月',  '6月',  '7月',  '8月',  '9月',  '10月',  '11月',  '12月'];
echo $array_month[7];
?>

<?php
$hello = "Hello,";
$name = "長谷部";
echo $hello . $name . PHP_EOL;
?>

<?php
$tech_boost ="tech";
$tech_boost .=" boost";
echo $tech_boost . PHP_EOL;
?>

<?php
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
?>