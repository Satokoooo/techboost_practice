<?php

// 課題 【PHP】 05 


// １.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
// もし違ったら「あなたの名前ではありません」と表示するように実装してください
$name = "Satoko Harada";
if ($name == "Satoko Harada") {
  echo "私は{$name}です。";
} else {
  echo "私は{$name}ではありません。";
}


// ２.for文を使って、1から10000までの合計の値を表示してください
$number = 0;
for ($i = 1; $i <= 1000; $i++){
  $number += $i;
}
echo $number;


// ３.$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$fruits = array("banana", "apple", "grape", "peach", "melon");
foreach($fruits as $fruit) {
    echo $fruit;
}


// ４.【応用】下記のプログラムのバグを修正し、
// 1から100までの間で5の倍数のみ表示するようにしてみてください
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>