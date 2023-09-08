<?php

$termo = $_POST['termo'];
$quant = $_POST['quant'];
$razao = $_POST['razao'];

for($i = $termo;$i <= $quant; $i++){
    $termo = $termo * $razao;
    $resul = $termo;
    print "a$i... $resul <br>";

}


?>