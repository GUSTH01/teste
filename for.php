<?php

$num = $_POST['num'];

for ($i = 0 ; $i < $num ; $i++){
    print "$i,";
    if ($i == 50){
        print "<br>";
    }
}


?>