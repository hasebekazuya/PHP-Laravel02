<?php
/* 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください */
function calc ($num) {
    $total = $num * 2;
    return $total;
}
echo calc(100) . PHP_EOL;

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/
function sum ($a, $b) {
    return $a + $b ;
}
echo sum (2, 5) . PHP_EOL;
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください*/
function num ($arr) {
    $result = 1;
    foreach ($arr as $i) {
        $result *= $i;
    }
    return $result;
}
echo num (array(1, 3, 5, 7, 9,)) .PHP_EOL;
/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください*/
function max_array($arr) {
 $max_number = $arr[0];
 foreach($arr as $a) {
   if ($max_number < $a) {
     $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . PHP_EOL;
/*5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください*/
/*strip_tags*/
$str = "<h1>strip_tags関数</h1>". "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) .PHP_EOL;
/*array_push*/
$fuits = ["apple", "orange", "pineapple"];
array_push($fuits,"apple");
print_r($fuits);
/*array_merge*/
$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
/*time, mktime*/
$new_Week =time() + (2 * 24 * 60 * 60) ;
echo 'Now:'. date('Y-m-d') .PHP_EOL;
/*date*/
echo date('Y-m-d') .PHP_EOL;