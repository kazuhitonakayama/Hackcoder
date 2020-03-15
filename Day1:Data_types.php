<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// fopenでファイルを開く（'r'は読み込みモードで開く）
// Declare second integer, double, and String variables.

//fgetsで対処のファイルを１行ずつ読み込む
$f='fgets';

// Read and save an integer, double, and String to your variables.
$i2 = $f(STDIN);
$d2 = $f(STDIN);
$s2 = $f(STDIN);

// Print the sum of both integer variables on a new line.
// https://qiita.com/sola-msr/items/0814c4470dcbbd1f5ec3  ."/n"は改行のため
echo ($i+$i2)."\n";

// Print the sum of the double variables on a new line.
// https://www.flatflag.nir87.com/number_format-925   第二引数で小数点第何位までを評するかを設定
echo number_format($d+$d2,1)."\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.

// ここでは以下のことを学んだ
// ①fopen,fgetsの使い方
// ②改行は"/n"
// ③number_format()の使い方
echo $s.$s2."\n";
fclose($handle);
?>