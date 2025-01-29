<?php 
/* 
--------------------Exercícios Básicos-------------------------

1 - EXERCICIO: Escreva um programa que imprima os números de 1 a 10 usando while.

$contador = 1;
while ($contador <= 10) {
    echo $contador . " ";
    $contador++;
}

2 - EXERCICIO: Mostre todos os números pares de 1 a 20.

$contador = 2;
while ($contador <=20 ) {
    
    echo $contador . " ";
    $contador += 2;
}

3 - EXERCICIO: Exiba todos os números ímpares entre 1 e 15.

$contador = 1;
while ($contador <=15) {
    echo $contador . "";
    $contador += 2;
}

4 - EXERCICIO: Exiba a tabuada do número 5 usando while.

$contador = 5;
$i = 1;
while ($i <=10 ) {
    $tabuada = $contador * $i;
    echo "$contador X $i = $tabuada <br>";
    $i++;
}

5 - EXERCICIO: Calcule e exiba a soma dos números de 1 a 100.

$contador = 1;
$soma = 0;
while ($contador <= 100) {
    $soma += $contador;
    $contador++;
    
}echo "A soma de todos os numeros entre 1 e 100 é $soma";

--------------------Exercícios Intermediários-------------------------

5 - EXERCICIO: Calcule o fatorial de um número fornecido pelo usuário.

$numero = isset($_GET["numero"])?$_GET["numero"]:null;
$fatorial = 1;
$contador = 1;

while ($contador <= $numero ){
    $fatorial = $fatorial * $contador;
    $contador+=1;
}

echo $fatorial;


6 - EXERCICIO: Faça uma contagem regressiva de 10 até 1 e exiba "Lançar foguete!" ao final.

$contador = 11;
while ($contador > 1) {
    $contador--;
    echo "<br>$contador";
}echo "<br>Lançar foguete!";

6 - EXERCICIO: Exiba os números de 1 a 30 que são divisíveis por 3.

echo "Os números divisíveis por 3 são: ";
$contador = 1;
while ($contador <= 30) {
    echo $contador . " ";
    $contador+=3;
}


7 - EXERCICIO: Peça ao usuário um número limite e conte quantos números são múltiplos de 2 ou 5 nesse intervalo.*/


?>