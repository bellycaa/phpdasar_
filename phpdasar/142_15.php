<?php
$a=0b10110101; $b=0b01101100; // 10110101 biner = 181 desimal // 01101100 biner = 108 desimal
$hasil = $a & $b; echo $hasil; echo "<br />"; // 36 (desimal) = 00100100 biner
$hasil = $a | $b; echo $hasil; echo "<br />"; // 253 (desimal) = 11111101 biner
$hasil = $a^ $b; echo $hasil; // 217 (desimal) = 11011001 biner
echo "<br />";
$hasil = ~$a;
echo $hasil; echo "<br />"; //-182 (desimal)
$hasil = $a >> 1;
echo $hasil; echo "<br />"; // 90 (desimal) = 1011010 biner
$hasil = $b << 2; echo $hasil;
// 432 (desimal) = 0110110000 biner