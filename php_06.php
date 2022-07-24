<?php

// 課題 【PHP】 05 


// １.引数に数値を指定して実行すると、
// 数値を2倍にして返す関数を作成してください
function double($number) {
    return $number * 2;
}
echo double(4);


// ２.$a と $b を仮引数に持ち、
// $a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
    return $a + $b;
}
echo add(10,2);


// ３.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
// その要素をすべてかけた結果を返す関数を作成してください
$arr = [1, 3, 5, 7, 9];
echo "product(arr) = " . array_product($arr) . "\n";

function arr_product($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo arr_product([1,3,5,7,9]);
echo "\n";


// ４.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
// 途中の部分を完成させてください
// function max_array($arr){
//   // とりあえず配列の最初の要素を一番大きい値とする
//   $max_number = $arr[0];
//   foreach($arr as $a){
//     // ここで配列の中の1番大きい値を探したい
//   }

//   return $max_number;
// }

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array([1,4,5,3,8]);
echo "\n";


// ５.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
// strip_tags
$text = "<p>タグを削除</p>";
echo strip_tags($text);
echo "\n";

// array_push
$members = ["鈴木","佐藤","田中"];
array_push($members, "藤本","高橋");
var_dump($members);

// array_merge
$fruits1 = ["apple", "orange", "melon", "banana"];
$fruits2 = ["strawberry", "cherry", "watermelon"];
$fruits3 = ["anzu", "papaya"];

$fruits_merge = array_merge($fruits1,$fruits2,$fruits3);

print_r($fruits_merge);

// time, mktime
$time = mktime(10);
var_dump(date('Y/m/d/h:i:s',$time));

// date
echo date('Y/m/d');
?>