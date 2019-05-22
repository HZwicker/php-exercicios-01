<?php

$idade = 17;
$pessoasAcompanhadas = 1;

$valorSeVerdadeiro = "Você tem $idade anos. Pode entrar sozinho";
$valorSeFalso ="Voçê tem $idade anos não pode entrar, deve estar acompanhado";


echo "Você só pode entrar se tiver mais de 18 anos ou a partir de 16 anos acompanhado". PHP_EOL;


if($mensagem = $idade >= 18 and  $pessoasAcompanhadas > 1 ? $valorSeVerdadeiro : $valorSeFalso) { // EM BOOLEAN
    echo $mensagem . PHP_EOL;
}
    /*if ($idade >= 18){
        echo "Você tem $idade anos. Pode entrar sozinho".PHP_EOL;
    }
    else if ($idade >= 16 and $pessoasAcompanhadas > 1){
            echo "Você tem $idade anos. Está Acompanhado, então pode entrar." . PHP_EOL;
    } else {
    echo "Você só tem $idade anos. Não pode entrar e não está acompanhado" . PHP_EOL;
    }




