<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Conversor de Fuso Horário</title>
</head>
<body class="body">
    <h1  class="titulo">Conversor de Fuso Horário</h1>
    <form action="converter.php" method="post" class="principal">
        <label for="datetime" class="datahora">Digite a data e hora:</label><br>
        <input type="text" id="datetime" name="datetime" required class="datahora-inserção"><br><br>

        <label for="country" class="country">Escolha um país:</label><br>
        <select id="country" name="country" required class="country-selector">
            <option value="Europe/Berlin">Alemanha (Berlim)</option>
            <option value="Europe/London">Reino Unido (Londres)</option>
            <option value="Asia/Tokyo">Japão (Tóquio)</option>
            <option value="Australia/Sydney">Austrália (Sydney)</option>
            <option value="America/New_York">Estados Unidos (Nova Iorque)</option>
        </select><br><br>

        <input type="submit" value="Converter" class="botão">
    </form>
</body>
</html>