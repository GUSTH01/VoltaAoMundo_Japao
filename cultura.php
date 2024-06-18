<?php
session_start();

include_once "classes/conexao.php";

$email = isset($_SESSION['usuario_email']) ? $_SESSION['usuario_email'] : null;
$linha = null;

if ($email) {
    $sql = "SELECT permissao FROM tb_usuarios WHERE email = :email";
    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':email', $email);
    $resultado->execute();
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="japan.css">
    <link rel="stylesheet" href="cultura.css">
    <title>Japão index</title>
</head>
<body >
    
<div class="container-fluid">
    <ul class="row nav">
      <li class="colnav col-sm nav-link">
        <div class="dropdown">
          <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cidades 
          </button>
          <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
          <?php
                    if ($linha && isset($linha['permissao'])) {
                        if ($linha['permissao'] == 'adm') {
                            echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        } else {
                            echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        }
                    } else {
                        echo "<a class='dropdown-item dropitem' href='index.html'>Home</a>";
                        echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                        echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                        echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                        echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                    }
                    ?> 
          </div>
        </div>
      </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Midia
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
            <?php
                    if ($linha && isset($linha['permissao'])) {
                        if ($linha['permissao'] == 'adm') {
                            echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        } else {
                            echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        }
                    } else {
                        echo "<a class='dropdown-item dropitem' href='index.html'>Home</a>";
                        echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                        echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                        echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                        echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                    }
                    ?>  
            </div>
          </div>
        </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sobre
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
            <?php if ($linha && isset($linha['permissao'])) {
                        if ($linha['permissao'] == 'adm') {
                            echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        } else {
                            echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                            echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                            echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                            echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                        }
                    } else {
                        echo "<a class='dropdown-item dropitem' href='index.html'>Home</a>";
                        echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                        echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                        echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                        echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";
                    }
                    ?>  
            </div>
          </div>
        </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
            <?php  if ($linha && isset($linha['permissao'])) {
                        if ($linha['permissao'] == 'adm') {
                            echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                            echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                            echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                            echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                            echo "<a class='dropdown-item dropitem' href='importar.php'>importar</a>";
                            echo "<a class='dropdown-item dropitem' href='painel.php'>Painel</a>";
                            echo "<a class='dropdown-item dropitem' href='logout.php'>Logout</a>";
                        } else {
                            echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                            echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                            echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                            echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                            echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                            echo "<a class='dropdown-item dropitem' href='logout.php'>Logout</a>";
                        }
                    } else {
                        echo "<a class='dropdown-item dropitem' href='index.html'>Home</a>";
                        echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                        echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                        echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                        echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                    }
                    ?>
            </div>
          </div>
        </li>
      </ul>
</div>

<div class="container-fluid">
  <!-- Primeiro container -->
  <div class="linha1 row">
      <div class="col-lg">
          <img src="imgcult/imgcult.png" class="img-fluid" alt="Imagem 1">
      </div>
      <div class="tex col-lg">
          <h2>Cultura Japonesa</h2>
          <p>A cultura japonesa é rica e diversificada, com uma história milenar que influenciou profundamente não apenas o país, mas também o mundo. Desde as tradições ancestrais até a moderna cultura pop, o Japão oferece uma experiência única para os visitantes.</p>
          <p>Entre os aspectos mais conhecidos da cultura japonesa estão a cerimônia do chá, as artes marciais, como o judô e o karatê, e a delicada arte da caligrafia japonesa. Além disso, a gastronomia japonesa, com pratos como sushi, sashimi e tempurá, é apreciada em todo o mundo.</p>
      </div>
  </div>
  <!-- Segundo container -->
  <div class="linha2 row ">
      <div class="col-lg order-lg-2">
          <img src="imgcult/content.jpg" class="img-fluid" alt="Imagem 2">
      </div>
      <div class="tex col-lg order-lg-1">
          <h2>Costumes Japoneses</h2>
          <p>Os costumes japoneses são marcados pela cortesia, respeito e harmonia. A etiqueta japonesa desempenha um papel fundamental na vida diária, desde cumprimentar os outros até comer e interagir socialmente.</p>
          <p>Entre os costumes mais conhecidos estão o cumprimento com reverência, o hábito de tirar os sapatos ao entrar em casa e a prática de se inclinar como sinal de respeito. Além disso, festivais como o hanami (apreciação das flores de cerejeira) e o matsuri (festivais locais) são celebrados em todo o país ao longo do ano.</p>
      </div>
  </div>
</div>

<footer>
  <h2 class="hfootercult">JAPÃO - GUSTAVO</h2>
</footer>
 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>