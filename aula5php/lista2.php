<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa que calcula os reajustes. 
    Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual: salários até R$ 280,00 (incluindo) :
    aumento de 20% salários entre R$ 280,00 e R$ 700,0 00 : aumento de 15% salários entre R$ 700,00 e R$ 1500,00 : aumento de 10% salários de R$ 1500,00 em diante :
    aumento de 5% Após o aumento ser realizado, informar na tela: o salário antes do reajuste; o percentual de aumento aplicado; o valor do aumento; o novo salário, após o aumento. -->

     <form action="lista2.php" method="get">
        Qual seu salário: <br />
        <input type="text" name="salario">
        <br /> <br />
        <input type="submit" value="Calcular">
    </form>

    <?php
    //Entrada
    $sal = $_GET["salario"];

    //Processamento

    if ($sal <= "280") {
        $salarion = $sal * 1.20;
        $aumento = $salarion - $sal;
        $percentual = 20;
        echo"<br /> Seu salário é: ".$sal;  
        echo"<br /> Percentual de aumento: ".$percentual;
        echo"<br /> Valor do aumento: ".$aumento;
        echo"<br /> Seu  novo salário é: ".$salarion;
   
    } else if ($sal > "280" && $sal <=700) {
        $salarion = $sal * 1.15;
        $aumento = $salarion - $sal;
        $percentual = 15;
        echo"<br /> Seu salário é: ".$sal;  
        echo"<br /> Percentual de aumento: ".$percentual;
        echo"<br /> Valor do aumento: ".$aumento;
        echo"<br /> Seu  novo salário é: ".$salarion;
    
    } else if ($sal > "700" && $sal <=1500) {
        $salarion = $sal * 1.10;
        $aumento = $salarion - $sal;
        $percentual = 10;
        echo"<br /> Seu salário é: ".$sal;  
        echo"<br /> Percentual de aumento: ".$percentual;
        echo"<br /> Valor do aumento: ".$aumento;
        echo"<br /> Seu  novo salário é: ".$salarion;

    } else {
        $salarion = $sal * 1.05;
        $aumento = $salarion - $sal;
        $percentual = 5;
        echo"<br /> Seu salário é: ".$sal;  
        echo"<br /> Percentual de aumento: ".$percentual;
        echo"<br /> Valor do aumento: ".$aumento;
        echo"<br /> Seu  novo salário é: ".$salarion;
    }

?>
</body>
</html>
