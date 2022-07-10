<?php
echo 'hello php!';

// 課題 【PHP】 04 

// １.$a　という変数に3を、$b　という変数に７を代入して、
// echoを使って$a+$bの結果を表示してみましょう
$a = 3;
$b = 7;

echo $a + $b;


// ２.$array_month という配列に1月〜12月の文字列を代入し、
// echoで8月を表示してみましょう
$array_month =[
    "Jamuary" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "Nobember" => "11月",
    "December" => "12月"
    ];

// 8月を表示
echo $array_month["August"];


// ３.$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
// $world という変数に　”‘s World!” を代入して、各変数を連結させて 
// “Hello, あなたの名前’s World!” と表示してみましょう
$hello = "Hello,";
$name = "Satoko";
$world ="'s World!";

echo $hello,$name,$world;


// ４.$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」
// と表示されるように実装してみましょう
$tech_boost = "tech";
$tech_boost .= "_boost";

echo $tech_boost;


// ５.【応用】次のプログラムにはバグがあります。
// どこにバグが有るか調べて修正してみましょう(バグは一つとは限りません。)
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
?>