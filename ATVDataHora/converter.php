<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Resultado da Conversão</title>
</head>
<body class="body-php">
    <h1 class="titulo">Resultado da Conversão de Fuso Horário</h1>

    <?php
    // Definir o fuso horário padrão como UTC para assegurar que a entrada seja tratada corretamente
    date_default_timezone_set('UTC');

    // Recuperar os valores 'datetime' e 'country' do formulário
    $datetime = $_POST['datetime'];
    $country = $_POST['country'];

    // Criar DateTime para a data fornecida no fuso horário padrão (UTC)
    $date = new DateTime($datetime);

    // Definir o novo fuso horário
    $date->setTimezone(new DateTimeZone($country));

    // Exibir a data e hora convertidas para o país selecionado
    echo "Data e hora convertidas para $country: " . $date->format('Y-m-d H:i:s') . "<br><br>";

    // Exibir a data atual e a hora atual no fuso horário selecionado
    $currentDate = new DateTime("now", new DateTimeZone($country));
    echo "Data atual em $country: " . $currentDate->format('d-m-Y') . "<br>";
    echo "Hora atual em $country: " . $currentDate->format('H:i:s') . "<br><br>";

    // Adicionar 10 dias à data fornecida e exibir o resultado
    $data = "2024-06-02";
    $nova_data = date("Y-m-d", strtotime($data . " +10 days"));
    echo "Nova data (10 dias depois de $data): $nova_data";
    ?>

    <br><br>
    <a href="index.php" class="botão-voltar">Voltar</a>
</body>
</html>

