<?php
echo "informe a altura";
$altura = readline ();

echo "informe o sexo";
$sexo = readline ();

if($sexo =="feminino")
{
    echo (62.1 *$altura)-44.7;
}
else
{
    echo (72.7 *$altura)-58;

}
