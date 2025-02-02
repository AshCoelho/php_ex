

<?php

/* ---------  Exercicios Básico usando "WHILE" -------------

1- Escreva um programa que exiba os números de 1 a 10. 

$contador = 1;
while ($contador <= 10){
    echo $contador . " ";
    $contador++;
}
    
2 - Crie um programa que mostre apenas os números pares de 1 a 20.



$contador = 2;
while ($contador <= 20) {
    echo $contador . " ";
    $contador += 2;
}


3 - Faça um programa que exiba a tabuada do número 7 de 1 a 10.


$contador = 7;
$tabuada = 0;
$i = 1;

while ($i <= 10){
$tabuada = $contador * $i;
$i++;
echo "<br>$contador X $i = $tabuada";

}

4 - Escreva um programa que exiba uma contagem regressiva de 10 até 1 e depois exiba "FIM!"

$contador = 10;
while($contador >= 1) {
    echo $contador . " ";
    $contador--;
}


5 - Crie um programa que some todos os números de 1 a 50 e exiba o resultado.


$contador = 1;
$soma = 0;

while ($contador <= 50) {
    $soma += $contador;
    $contador++;
} echo "os números de 1 a 50 é igual a $soma";

6 - Peça para o usuário digitar um número maior que zero. Se ele digitar um número inválido, continue pedindo até que ele forneça um válido.


$numero = readline("Digite um número maior que zero: ");
// UTILIZAR O METODO 'redline' PERMITE QUE O USUÁRIO INSIRA UM NUMERO NO TERMINAL
while ($numero <= 0) {
    echo "Número inválido! Tente novamente.\n";
    $numero = readline("Digite um número maior que zero: ");
}

echo "Número válido inserido: $numero\n";

7 - Crie um programa que gere um número aleatório entre 1 e 10 e peça para o usuário adivinhar. O programa só termina quando ele acertar.

$certo = rand(1,10); 

// O METODO rand(min..., max...) GERA UM NÚMERO ALEATÓRIO ENTRE MÁX E MIN

$numero = readline("Tente adivinhar um número entre 1 e 10: ");

while ($numero != $certo) {
    echo "Errado! Tente novamente.";
    $numero = readline("Tente adivinhar o número");
}

echo "Parabéns! Você acertou. Número correto é $certo";

8 - O programa deve pedir números ao usuário até que ele digite um número negativo. No final, exiba quantos números positivos foram digitados.

$numero = readline("Digite um número: ");
$soma = 0;
$contador = 0;

while ($numero > 0) {
    $contador++;
    $soma = $contador + $numero;
    $numero = readline("Digite um número: ");

} echo "Você digitou $contador números positivos.";

*/

?>