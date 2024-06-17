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
    <link rel="stylesheet" href="cidades.css">
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
      
      <div class="contcard container-fluid">
        <div class="row ">
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgcard/tokyo_resized.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Tokyo</h5>
                        <p class="card-text">Capital do Japão, conhecida por sua mistura de tradição e modernidade, Tóquio é uma metrópole vibrante, repleta de arranha-céus, parques, templos históricos e bairros movimentados e povoado .</p>
                        <a href="city/tokyo.html" class=" botaum btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgcard/SaitamaShintoshin_night_view_resized.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Saitama</h5>
                        <p class="card-text"> Localizada na região de Kanto, Saitama é uma cidade suburbana com uma atmosfera tranquila. É conhecida por suas áreas verdes, como o Parque de Hikawa, e por abrigar o estádio Saitama Super Arena.</p>
                        <a href="#" class="botaum btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgcard/Hiroshima_Peace_Memorial_resized.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Hiroshima</h5>
                        <p class="card-text">Reconhecida pelo primeiro ataque nuclear durante a Segunda Guerra Mundial. Hoje, a cidade é um símbolo de paz e reconciliação, com monumentos como o Parque Memorial da Paz e o Domo da Bomba Atômica.</p>
                        <a href="#" class="botaum btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top" src="imgcard/kawasaki_resized.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Kawasaki</h5>
                        <p class="card-text"> Situada na região de Kanto, Kawasaki é uma cidade industrial e residencial com uma cena cultural vibrante. Abriga o Museu de Ciência Emergentes e Inovação, além de festivais populares como o Kawasaki Halloween.</p>
                        <a href="#" class="botaum btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgcard/yokohama-m.avif" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Yokohama</h5>
                      <p class="card-text">Yokohama é conhecida por sua impressionante paisagem urbana, porto movimentado e diversidade cultural. Destaques incluem o Parque Yamashita, o distrito de Minato Mirai e Chinatown.</p>
                      <a href="#" class="botaum btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgcard/quioto.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Quioto</h5>
                      <p class="card-text">Antiga capital do Japão e lar de inúmeros templos, santuários, jardins e palácios imperiais, Quioto é um destino turístico popular conhecido por sua beleza tradicional e história rica.</p>
                      <a href="#" class="botaum btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgcard/kurashiki.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">kurashiki</h5>
                      <p class="card-text">Uma cidade localizada na província de Okayama, Kurashiki é famosa por seu bairro histórico preservado, conhecido como Bikan Historical Quarter, que apresenta canais, casas de comércio antigo e museus.</p>
                      <a href="#" class="botaum btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgcard/okinawa.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Okinawa</h5>
                      <p class="card-text">Um arquipélago no sul do Japão, Okinawa é conhecida por suas praias de areias brancas, águas cristalinas e rica herança cultural. É um destino popular para turistas em busca de sol, mar e cultura tradicional.</p>
                      <a href="" class="botaum btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    
  <footer>
    <h2 class="hfooter">JAPÃO - GUSTAVO</h2>
 </footer>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>