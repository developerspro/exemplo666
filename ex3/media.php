<?php
if(empty($_POST["nota1"]||$_POST["nota2"]||$_POST["nota3"])){
    echo "Lançe todas as notas para o calculo";
    echo "<br><a href=\"index.php\">Novo calculo da média</a>";
    exit;
}
$nota1= $_POST["nota1"];
$nota2= $_POST["nota2"];
$nota3= $_POST["nota3"];

$media = ($nota1+$nota2+$nota3)/3;

if($media>=7){
    echo "<h1>Parabéns sua média é:".$media."</h1>";
} else { 
    echo "<h1>Reprovado:".$media."</h1>";
}
?>
<br>
<a href="index.php">Novo calculo da média</a>