<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = intval($_POST["idade"]);
    $salario = floatval($_POST["salario"]);

    function calcularDescontoINSS($salarioBruto) {
        // Tabela de alíquotas do INSS
        $faixasINSS = [
            1302 => 0.075,
            2571.29 => 0.09,
            3856.94 => 0.12,
            7507.49 => 0.14
        ];
    $descontoINSS = calcularDescontoINSS($salario);

        // Encontre a faixa salarial correspondente
        foreach ($faixasINSS as $limite => $aliquota) {
            if ($salarioBruto <= $limite) {
                $descontoINSS = $salarioBruto * $aliquota;
                break;
            }
        }
        return $descontoINSS;
    }

        function calcularDescontoIRPF($salarioBruto) {
            // Tabela de alíquotas do IRPF
            // (Valores fictícios apenas para demonstração)
            $faixasIRPF = [
                2000 => 0.1,
                4000 => 0.15,
                6000 => 0.2,
                10000 => 0.25
            ];
    $descontoIRPF = calcularDescontoIRPF($salario, $idade);

        // Encontre a faixa salarial correspondente
        foreach ($faixasIRPF as $limite => $aliquota) {
            if ($salarioBruto <= $limite) {
                $descontoIRPF = $salarioBruto * $aliquota;
                break;
            }
        }
        return $descontoIRPF;
    }

    // Salário líquido
    $salarioLiquido = $salario - ($descontoINSS + $descontoIRPF);

    echo "<h2>Resultados para $nome:</h2>";
    echo "Desconto do INSS: R$ " . number_format($descontoINSS, 2, ',', '.') . "<br>";
    echo "Desconto do IRPF: R$ " . number_format($descontoIRPF, 2, ',', '.') . "<br>";
    echo "Salário Líquido: R$ " . number_format($salarioLiquido, 2, ',', '.');
}

?>