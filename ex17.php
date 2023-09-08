<?php

$num1 = $_POST['num1'];
$porce1 = $_POST['porce1'];
$num2 = $_POST['num2'];
$porce2 = $_POST['porce2'];

$result1 = $num1 - ($num1 * $porce1) / 100;
$result2 = $num1 - ($num2 * $porce2) / 100;
$result3 = $result1 + $result24;

print "$num1 com desconto de $porce1% é: $result1 <br>";
print "$num2 com desconto de $porce2% é: $result2 <br>";
print "A soma dos dois valores é : $result3<br>";


