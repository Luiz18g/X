<?php
echo 'Ola Mundo';
echo 'Luiz Gustavo';
/*
https://localhost/X/index.php
*/

// cometario de uma linha
print('<h1>escrevendo</h1>');

print_r('<h2>escrevendo de novo</h2>');

$nome = 'Luiz' ;
$idade = 19 ;
$altura = 1.82 ;
$fumante = false;

echo '<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura . '<br>';
echo $fumante . '<br>';
echo 'Olá ' . $nome . ', voce tem ' .$idade . 
'anos';

echo '<hr>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br';
echo gettype($fumante) . '<br>';
$altura = '1.83';
echo gettype($altura) . '<br>';
?>