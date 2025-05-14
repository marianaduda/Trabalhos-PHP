<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e1f0; /* Cor de fundo suave roxa */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .container {
            background-color: #9b59b6; /* Fundo roxo */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 36px;
        }

        label {
            display: block;
            margin-bottom: 15px;
            color: white;
            font-size: 18px;
        }

        input[type="number"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #8e44ad; /* Cor roxa mais escura */
            border-radius: 8px;
            font-size: 18px;
            background-color: #f9f3f9; /* Cor de fundo suave para os campos */
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #8e44ad; /* Botão roxo */
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #732d91; /* Cor roxa escura no hover */
        }

        .result {
            margin-top: 30px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            color: white;
        }

        .footer {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: #5d2f6e; /* Cor roxa mais escura */
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="footer">
        Mariana Eduarda 3A
    </div>

    <div class="container">
        <h1>Cálculo de IMC</h1>
        <form id="imcForm">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" required>

            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" required>

            <button type="button" onclick="calcularIMC()">Calcular IMC</button>

            <div class="result" id="resultadoIMC"></div>
        </form>
    </div>

    <script>
        function calcularIMC() {
            var peso = parseFloat(document.getElementById('peso').value);
            var altura = parseFloat(document.getElementById('altura').value);
            
            if (isNaN(peso) || isNaN(altura) || peso <= 0 || altura <= 0) {
                document.getElementById('resultadoIMC').textContent = "Por favor, insira valores válidos para peso e altura.";
                return;
            }

            var imc = peso / (altura * altura);
            var resultado = '';

            if (imc < 18.5) {
                resultado = 'Abaixo do peso';
            } else if (imc >= 18.5 && imc < 24.9) {
                resultado = 'Peso normal';
            } else if (imc >= 25 && imc < 29.9) {
                resultado = 'Sobrepeso';
            } else {
                resultado = 'Obesidade';
            }

            document.getElementById('resultadoIMC').textContent = 'Seu IMC é ' + imc.toFixed(2) + ' - ' + resultado;
        }
    </script>

</body>
</html>