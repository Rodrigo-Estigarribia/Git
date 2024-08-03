<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <link rel="shortcut icon" href="imagens/calculadora.png" type="image/x-icon">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <h1>Calculadora</h1>
    <div class="row">
      <div class="calculadora">
        <form name="CALCULADORA" method="post" class="row">
          <div class="calc-form">
            <h3>Calculadora desenvolvida com Php</h3><br>
            <input type="text" class="form-controle" name="primeiroCampo" placeholder="Digite el primer numero...">
            <input type="text" class="form-controle" name="segundoCampo" placeholder="Digite el segundo numero...">
            <select name="op" class="form-controle">
              <option value="soma">Somar</option>
              <option value="subtrair">Subtrair</option>
              <option value="multiplicar">Multiplicar</option>
              <option value="dividir">Dividir</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
            <input type="reset" class="btn btn-danger" value="Limpiar Campos" style="margin: 20px 10px">
          </div>

          <!-- calculadora -->
          <?php
          if (isset($_POST['primeiroCampo']) && ($_POST['segundoCampo'])) {
            $a = $_POST['primeiroCampo'];
            $b = $_POST['segundoCampo'];
            $op = $_POST['op'];
            $c = [];

            if ($op == "soma") {
              $c = $a + $b;
              echo '<br>';

              echo "El resultado de la suma es: $c";
            } else if ($op == "subtrair") {
              $c = $a - $b;
              echo '<br>';

              echo "El resultado de la resta es: $c";
            } else if ($op == "multiplicar") {
              $c = $a * $b;
              echo '<br>';

              echo "El resultado de la multiplicación es: $c";
            } else if ($op == "dividir") {
              $c = $a / $b;
              echo '<br>';

              echo "El resultado de la división es: $c";
            } else if ($op != "Sumar" || $op != "Restar" || $op != "Multiplicar" || $op != "Dividir")
              echo '<br>';
          }
          ?>
        </form>
      </div>
    </div>
  </div>

          <div style="text-align: center;">
            <label for="">Rodrigo Estigarribia=Traducción portugues/español</label>
          </div>

</body>

</html>