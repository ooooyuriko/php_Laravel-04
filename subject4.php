<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
     $max_number = $a;
 }
 }
 return $max_number;

 }
 echo max_array(array(8, 5, 7, 6, 13));
 
 