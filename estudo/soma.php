<?php
include "funcoes.php";



$valor1= $_POST["valor1"];
$valor2= $_POST["valor2"];
/*
if(empty($_POST["valor1"]||$_POST["valor2"])){
    echo "Lançe todas valores para o calculo";
    echo "<br><a href=\"index.php\">Novo calculo </a>";

} */

   
exibir(soma($valor1,$valor2));
?>
<br>
<a href="index.php">Novo calculo</a>