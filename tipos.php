<?php
// PHP não precisa colocar tipo como int double gflout bloolean pois é dinamicamente tipada.
$idade=21;

$salario=1000.3;

$divisão=10/3;

// se colocar de novo ele automaticamente muda e ignora o anterior

$divisão= 3;

$texto="Olá Mundo";

$verdadeiro = true;
$falso=false;

echo gettype($idade);
echo gettype($salario);
echo gettype($divisão);
echo gettype($texto);
echo gettype($verdadeiro);
echo gettype($falso);