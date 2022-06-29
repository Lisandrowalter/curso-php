<?php
echo "calculadora \n";

echo "informe um número:\n";
$n1 = readline ();

echo"Informe outro número \n";
$n2 = readline();

echo ($n2 + $n1);
echo "Exercício 1\n";
echo "informe um número Inteiro:\n";
$n1 = readline ();
if( ($n1 % 2) == 0) {
    echo 'Número é par'   
} else {
    echo 'Número é impar';
}
