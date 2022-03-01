<?php

$idade = 21;
$numeroDePesssoas = 2;

echo "Você só pode entrar, se tiver mais de 18 anos ou ";
echo "a partir de 16 anos acompanhado";

if ($idade > 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePesssoas > 21) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";
