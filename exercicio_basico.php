

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
*/


?>