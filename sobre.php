<?php
session_start();

if (!isset($_SESSION['usuario_email'])) {
    header('Location: index.html');
    exit();
}

$sql = "SELECT permissao FROM tb_usuarios WHERE email = :email";
include_once "classes/conexao.php";

$email = $_SESSION['usuario_email'];

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':email', $email);
$linha = $resultado->execute();

$linha = $resultado->fetch();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="japan.css">
    <link rel="stylesheet" href="sobre.css">
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
          <?php if ($linha['permissao'] == 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else if ($linha['permissao'] != 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else{
                echo "<a class='dropdown-item dropitem' href='index.php'>Home</a>";
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
            <?php if ($linha['permissao'] == 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else if ($linha['permissao'] != 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else{
                echo "<a class='dropdown-item dropitem' href='index.php'>Home</a>";
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
            <?php if ($linha['permissao'] == 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else if ($linha['permissao'] != 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='filmes.php'>Filmes</a>";
                echo "<a class='dropdown-item dropitem' href='cultura.php'>Cultura</a>";
                echo "<a class='dropdown-item dropitem' href='cidades.php'>Cidades</a>";
                echo "<a class='dropdown-item dropitem' href='sobre.php'>Sobre</a>";

            }else{
                echo "<a class='dropdown-item dropitem' href='index.php'>Home</a>";
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
            <?php if ($linha['permissao'] == 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexadm.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                echo "<a class='dropdown-item dropitem' href='importar.php'>importar</a>";
                echo "<a class='dropdown-item dropitem' href='painel.php'>Painel</a>";
                echo "<a class='dropdown-item dropitem' href='logout.php'>Logout</a>";
            }else if ($linha['permissao'] != 'adm'){
                echo "<a class='dropdown-item dropitem' href='indexnormal.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                echo "<a class='dropdown-item dropitem' href='logout.php'>Logout</a>";
            }else{
                echo "<a class='dropdown-item dropitem' href='index.php'>Home</a>";
                echo "<a class='dropdown-item dropitem' href='login.html'>Login</a>";
                echo "<a class='dropdown-item dropitem' href='cadastrar.html'>Cadastrar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios.html'>Comentar</a>";
                echo "<a class='dropdown-item dropitem' href='comentarios-listar.php'>Comentarios</a>";
                echo "<a class='dropdown-item dropitem' href='logout.php'>Logout</a>";

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
                <img src="fotosobre/Flag_of_Japan.png" class="imagsobre img-fluid" alt="Imagem 1">
            </div>
            <div class="tex col-lg">
                <h2>Curiosidades sobre o Japão</h2>
                <p>O Japão é um país incrivelmente fascinante, com uma rica história e cultura. Aqui estão algumas curiosidades interessantes sobre este país:</p>
                <ul>
                    <li>A bandeira do Japão, conhecida como Hinomaru, apresenta uma bola vermelha no centro, simbolizando o sol nascente.</li>
                    <li>Tóquio, a capital do Japão, é uma das maiores e mais populosas cidades do mundo, conhecida por sua incrível mistura de tradição e modernidade.</li>
                    <li>O Monte Fuji, um cone vulcânico icônico, é o pico mais alto do Japão e uma importante fonte de inspiração para artistas e poetas japoneses ao longo dos séculos.</li>
                    <li>O sushi, uma das comidas mais famosas do Japão, é uma forma de culinária que se originou no país e se tornou popular em todo o mundo.</li>
                    <li>O Japão é conhecido por suas estações de trem pontuais e eficientes, que são um símbolo da precisão japonesa.</li>
                </ul>
            </div>
        </div>

           <!-- Segundo container -->
           <div class="linha2 row">
            <div class="col-lg">
                <img src="fotosobre/jigokudane.png" class="imagsobre img-fluid" alt="Imagem 2">
            </div>
            <div class="tex col-lg">
                <h2>Lugares incríveis para visitar no Japão</h2>
                <p>O Japão é repleto de lugares incríveis para visitar, desde cidades vibrantes até paisagens naturais deslumbrantes. Aqui estão alguns destaques:</p>
                <ul>
                    <li>Quioto, uma cidade histórica conhecida por seus templos e santuários tradicionais.</li>
                    <li>Hiroshima, onde você pode aprender sobre a história e as consequências da Segunda Guerra Mundial no Japão.</li>
                    <li>O Parque Nacional de Jigokudani, onde você pode ver macacos da neve relaxando em fontes termais naturais.</li>
                    <li>As ilhas de Okinawa, conhecidas por suas praias deslumbrantes e rica cultura Ryukyu.</li>
                    <li>O Castelo de Himeji, um dos castelos mais bem preservados do Japão e Patrimônio Mundial da UNESCO.</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
      <h2 class="hfootersobre">JAPÃO - GUSTAVO</h2>
   </footer>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>