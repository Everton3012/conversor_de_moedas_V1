<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas: Euro e Dolar</h1>
        <p>
            <?php 

                $real = $_POST["real"] ?? 0;

                $cotacaoDol = 4.91;

                $cotacaoEur = 5.34;

                $dolar =  $real / $cotacaoDol;

                $euro  =  $real / $cotacaoEur;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivale a " . numfmt_format_currency($padrao, $dolar, "USD") .  " Dolares" . " e também equivale a " . numfmt_format_currency($padrao, $euro, "EUR") . " Euros";
            ?>
    </p>
    <button onclick="javascript:window.location.href='index.html';">&#x2B05; Voltar</button>
    </main>
</body>
</html>