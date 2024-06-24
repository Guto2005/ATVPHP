<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
</head>
<body>
    <h1 class="titulo">Calcule sua Idade</h1>
    <form method="post" class="formulario" action="">
        <label for="birthdate" class="dataNasc">Data de Nascimento:</label>
        <input type="date" id="birthdate" class="Calendario" name="birthdate" required>
        <button type="submit" class="botao">Calcular Idade</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate'];
        if (!empty($birthdate)) {
            $birthDate = new DateTime($birthdate);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($birthDate);

            echo "<div class='result'>";
                echo "<h2>Resultado:</h2>";
                echo "Você trabalhou " . $interval->y . " anos, " . $interval->m . " meses e " . $interval->d . " dias.";
                echo "</div>";
        } else {
            echo "<p style='color:red;'>Por favor, insira uma data válida.</p>";
        }
    }
    ?>
</body>
</html>