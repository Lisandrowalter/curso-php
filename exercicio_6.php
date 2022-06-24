<?php
echo "insira primeiro valor";
$nota1 = readline();
echo "insira segundo valor";
$nota2 = readline();
echo "insira terceiro valor";
$nota3 = readline();
echo"insira o quarto valor";
$nota4 = readline();

$medias=($nota1+ $nota2 + $nota3 + $nota4)/4;
if($medias>=5){
    echo"aluno aprovado";
}
else{
    echo"reprovado";
}
?>