<?php
if(empty($_POST["valor1"]||$_POST["valor2"])){
    echo "Lançe todas valores para o calculo";
    echo "<br><a href=\"index.php\">Novo calculo </a>";

}
$valor1= $_POST["valor1"];
$valor2= $_POST["valor2"];


$soma = $valor1+$valor2;

echo "Total:".$soma;
?>
<br>
<a href="index.php">Novo calculo</a>