<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   //código aqui
   <h3>Desafio 1:</h3>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <input type="submit" value="Verificar Aceitação">
        </form>

        <?php
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   //código aqui
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];

            $resultado_desafio2 = ordenarNumeros($numero1, $numero2, $numero3);
            echo "<div class='resultado'><strong>Resultado Desafio 2:</strong><br>$resultado_desafio2</div>";
        }
        ?>
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   //código aqui
   <?php
        // Desafio 3 - Calcular média
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            $resultado_desafio3 = calcularMediaAluno($nota1, $nota2, $nota3);
            echo "<div class='resultado'><strong>Resultado Desafio 3:</strong><br>$resultado_desafio3</div>";
        }
        ?>

        <h3>Desafio 3:</h3>
        <form method="post">
            <label for="nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" step="0.01" required>

            <label for="nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" step="0.01" required>

            <label for="nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" step="0.01" required>

            <input type="submit" value="Calcular Média">
        </form>
    </div>
</body>
</html>

}
?>
