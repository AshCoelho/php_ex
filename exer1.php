<?php 
echo "Verificador de idade para entrar na party <br>";
$idade = 56;

if ($idade >= 18 && $idade <= 50) {
    echo "Com $idade anos vc Entra";
} elseif ($idade > 50) {
    echo "Com $idade anos, slk velho não paga";
} else {
    echo "Criança com $idade anos vc não entra";
}
?>