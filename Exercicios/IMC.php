<?php

$peso = 78;
$altura = 1.78;
$imc = $peso / $altura ** 2;

echo "O seu IMc é de $imc . Você está com o imc ";

if ($imc <= 18.5) {
    echo "Abaixo do recomendado";
} elseif ($imc > 25){
    echo "Na média do recomendado";

} else {
    echo "Acima do recomendado";
}