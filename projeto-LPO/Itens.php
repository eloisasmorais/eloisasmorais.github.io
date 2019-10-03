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
  $escolha = $_POST['escolha'];
  ?>
  <div class='container'>
    <header class='life-bar'>
      <div class='player'>
        <p id='player-1'>Player 1</p>
        <div class='life-bar-left'></div>
      </div>
      <a href='index.php'>
        <h1 class='title'>Video Games</h1>
      </a>
      <div class='player'>
        <p id='player-2'>Player 2</p>
        <div class='life-bar-right'></div>
      </div>
    </header>
    <div class='text'>
      <?php
      if ($escolha == 'Consoles') {
        echo "<p>Clique abaixo para saber mais detalhes sobre consoles.</p>";
      } else {
        echo "<p>Clique abaixo para saber mais detalhes sobre empresas desenvolvedoras de jogos.</p>";
      }
      ?>
    </div>
    <section>
      <form class='cards' action='Detalhes.php' method='POST'>
        <?php
        if ($escolha == "notFound") echo "<h1>descubra</h1>";
        else if ($escolha == 'Consoles') { //Render consoles section container
          echo "
              <div>
                <button type='submit' class='card ps' name='submit' value='PlayStation 4'>
                  <img src='./img/ps.png' alt='' class='icon' />
                </button>
                <p class='names'>PlayStation 4</p>
              </div>
              <div>
                <button type='submit' class='card switch' name='submit' value='Switch'>
                  <img src='./img/switch.png' alt='' class='icon' />
                </button>
                <p class='names'>Nintendo Switch</p>
              </div>
              <div>
                <button type='submit' class='card n64' name='submit' value='Nintendo 64'>
                  <img src='./img/n64.png' alt='' class='icon' />
                </button>
                <p class='names'>Nintendo 64</p>
              </div>
              <div>
                <button type='submit' class='card xbox' name='submit' value='Xbox One'>
                  <img src='./img/xbox.png' alt='' class='icon' />
                </button>
                <p class='names'>Xbox One</p>
              </div>
            ";
        } else { //Render developer companies container
          echo "
          <div>
            <button type='submit' class='card ps' name='submit' value='PlayStation'>
              <img src='./img/ps.png' alt='' class='icon' />
            </button>
            <p class='names'>PlayStation 4</p>
          </div>
          <div>
            <button type='submit' class='card switch' name='submit' value='Switch'>
              <img src='./img/switch.png' alt='' class='icon' />
            </button>
            <p class='names'>Nintendo Switch</p>
          </div>
          <div>
            <button type='submit' class='card n64' name='submit' value='Nintendo64'>
              <img src='./img/n64.png' alt='' class='icon' />
            </button>
            <p class='names'>Nintendo 64</p>
          </div>
          <div>
            <button type='submit' class='card xbox' name='submit' value='Xbox'>
              <img src='./img/xbox.png' alt='' class='icon' />
            </button>
            <p class='names'>Xbox One</p>
          </div>
          ";
        }
        ?>
      </form>
    </section>
  </div>
</body>

</html>