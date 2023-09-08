<?php

$num = $_POST['num'];
$i = 0;
while ($i < $num){
    $i++;
    if(($i % 2) != 0){
        print"$i";

    }
}


?>