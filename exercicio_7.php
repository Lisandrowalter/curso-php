<?php
echo" insira primeiro valor";
$nota1 = readline();
echo" insira o segundo valor";
$nota2 = readline();
echo "insira o terceiro valor";
$nota3 = readline();
echo "insira o quarto valor";
$nota4 = readline();
$medias=($nota1 + $nota2 + $nota3 + $nota4)/4;
if($medias>=7){
    
    echo"aluno aprovado";
}
else {
    echo" insira nota de exame";
    $exame = readline();

}
