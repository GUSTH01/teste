<?php

$num = $_POST['num'];
$num2 = $_POST['num2'];


if ($num + $num2 >= 50){
    $result = $num + $num2;
    print "$result";
}
else{
    print "numero menor que 50";
}


?>