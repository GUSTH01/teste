<?php

$dados = array(1,2,4,8,16,32);

print "<p>array original</p>";

for($i=0; $i<=5;  $i++){
    print "$dados[$i] <br>";
   
}

print "<br>Outro<br>";
for($i=0; $i<=5; $i++){
    $dados[$i] = $dados[$i] * 3;
    print "$dados[$i] <br>";
   
}


?>