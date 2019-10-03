<?php
//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5, 7, 9)を渡すとその要素をすべてかけた結果を返す関数を作成してください
function sum($arr){
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++){
     
            $result *= $arr[$i];
            
        }
            
        return $result;
        }

echo sum(array(1, 3, 5, 7, 9));
