<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comparador de Combustível</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Comparador de Combustível</h2>

    <form method="post" action="">
        <label for="etanol">Preço do Etanol (R$):</label>
        <input type="number" step="0.01" name="etanol" id="etanol" required>

        <label for="gasolina">Preço da Gasolina (R$):</label>
        <input type="number" step="0.01" name="gasolina" id="gasolina" required>

        <button type="submit">Calcular</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $etanol = floatval($_POST["etanol"]);
            $gasolina = floatval($_POST["gasolina"]);
            $limite = $gasolina * 0.7;

            echo '<div id="resultado">';
            if ($etanol < $limite) {
                echo "É mais vantajoso abastecer com <strong>Etanol</strong>.";
            } else {
                echo "É mais vantajoso abastecer com <strong>Gasolina</strong>.";
            }
            echo '</div>';
        }
        ?>
    </form>

    <div class="autor">
        Desenvolvido por Mariana
    </div>

</body>
</html>
