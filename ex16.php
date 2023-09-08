<?php

$num = $_POST['num']; // 15
$numero = $_POST['numero']; // 10

if ($num > $numero) {

    for ($i = $num; $i >= $numero; $i = $i - 1) {

        print "$i <br />";
    }
} else {
    for ($i = $num; $i <= $numero; $i++) {

        print "$i <br />";
    }
}
