<?php

$letra = $_POST['letra'];

if (($letra == "A") or ($letra == "a" )){
    print "AZUL";
}

elseif (($letra == "V") or ($letra == "v" )) {
    print "vermelho";
}
else{
    print "digite algo valido";
}
?>