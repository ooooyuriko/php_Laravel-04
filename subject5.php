<?php
//strip_tags PHPでHTMLタグを取り除く
$contnts = "<b>sample</>";
$contnts = strip_tags($contnts);

echo $contnts;

//array_push 一つ以上の要素を配列の最後に追加する
$stack = array("oranage", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//array_merge 一つまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezooid", 4);
$result = array_merge($array1, $array2);
print_r($result);


//time 現在のUnixタイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now: ' . date('Y-m-d')."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

//mktime 日付をUnixのタイムスタンプとして取得する
date_default_timezone_set('UTC');

echo date('c', mktime(1, 2, 3, 4, 5, 2019));

//date ローカルの日付/時刻を書式かする
date_default_timezone_set('UTC');
echo date("l");

?>

