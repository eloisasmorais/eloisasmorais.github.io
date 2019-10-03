<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Video Game Grid</title>
  <link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>

  <?php
  $clicked = $_POST['submit'];
  $i = 0;
  $number;
  ?>
  <div class="container">
    <header class="life-bar">
      <div class="player">
        <p id="player-1">Player 1</p>
        <div class="life-bar-left"></div>
      </div>
      <a href="index.php">
        <h1 class="title">Video Games</h1>
      </a>
      <div class="player">
        <p id="player-2">Player 2</p>
        <div class="life-bar-right"></div>
      </div>
    </header>
    <div class="text">
      <?php
      include "consoles.inc";
      echo "<h1>Mais detalhes de $clicked</h1>";
      for ($i; $i < count($matriz_consoles); $i++) {
        if ($matriz_consoles[$i][0] == $clicked) {
          echo "<section class='detalhes'>";
          echo "<p><span style='font-weight: bold;'>Nome: </span>" . $matriz_consoles[$i][0] . "</p>";
          echo "<p><span style='font-weight: bold;'>Empresa: </span>" . $matriz_consoles[$i][1] . "</p>";
          echo "<p><span style='font-weight: bold;'>Lançamento: </span>" . $matriz_consoles[$i][2] . "</p>";
          echo "<p><span style='font-weight: bold;'>Descrição: </span>" . $matriz_consoles[$i][3] . "</p>";
          echo "
            <div class='img-container'>
              <figure>
                <img src=" . $matriz_consoles[$i][4] . " />
                <figcaption>
                " . $matriz_consoles[$i][5] . "
                </figcaption>
              </figure>
              <figure>
                <img src=" . $matriz_consoles[$i][6] . " />
                <figcaption>
                " . $matriz_consoles[$i][7] . "
                </figcaption>
              </figure>
            </div>
          ";
          echo "</section>";
        }
      }
      ?>
    </div>
</body>

</html>