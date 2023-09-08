<?php

$let = $_POST['letra'];
$letra = array("A","B","C","D","E");

for($i=0; $i<=4;  $i++){
    if($letra[$i] == $let){
        
        print "X <br>";

    }
    else{

    print "$letra[$i] <br>";

    }
   
}




?>