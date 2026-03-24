<?php

function media($n1,$n2,$n3){
    $total = ($n1+$n2+$n3)/3;
    exibir($total);
}


function soma($n1,$n2){
$total = $n1+$n2;
return $total;
}

function exibir($valor){
echo "<h1>Valor:".$valor."</h1>";
}