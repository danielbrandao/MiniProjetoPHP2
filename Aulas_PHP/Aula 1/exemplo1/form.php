<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

if($media >= 7){
    echo "<h2>Aluno APROVADO com média $media.</h2>";
}else if($media >= 4){
    echo "<h2>Aluno com média $media. Fará PROVA FINAL.</h2>";
}else{
    echo "<h2>Aluno REPROVADO com média $media.</h2>";
}

?>