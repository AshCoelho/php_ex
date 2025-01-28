<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
    <?php 
    $nota1 = isset($_GET["nota1"])?$_GET['nota1']:null;
    $nota2 = isset($_GET["nota2"])?$_GET['nota2']:null;
    $media = ($nota1 + $nota2)/2;

    if ($media < 5) {
        $situacao = "REPROVADO";

    } elseif ($media < 7){
        $situacao = "RECUPERAÇÃO";
        
    } else {
        $situacao = "APROVADO";
    }
    echo "<br> A média entre $nota1 e $nota2 é igual a $media <br> Situação do aluno: $situacao" ;
    ?>
    </div>
</body>
</html>