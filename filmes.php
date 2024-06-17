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
      
      <div class="contcard container-fluid">
        <div class="row ">
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgfilmes/tokyodrift.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Velozes e furiosos</h5>
                        <p class="card-text"> Em uma corrida eletrizante pelas ruas de Tóquio, um jovem rebelde se envolve com corridas clandestinas e descobre o verdadeiro significado de família e amizade.</p>
                        
                        <a href="tokyo.html" class=" botaum btn btn-primary">Assistir</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgfilmes/dragon-ball.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Drangon ball</h5>
                        <p class="card-text"> Uma aventura épica que segue a jornada de Goku, um guerreiro saiyajin, em busca das sete Esferas do Dragão para realizar seus desejos, enfrentando poderosos vilões pelo caminho.</p>
                       
                        <a href="#" class="botaum btn btn-primary">Assistir</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top " src="imgfilmes/samuraix.webp" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Samurai X</h5>
                        <p class="card-text">Baseado no mangá japonês "Rurouni Kenshin", este filme segue as aventuras de um ex-assassino conhecido como Battousai, que busca redenção e paz em um Japão do século XIX.</p>
                        
                        <a href="#" class="botaum btn btn-primary">Assistir</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img class="imagcard card-img-top" src="imgfilmes/onpunch.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">One punch man</h5>
                        <p class="card-text"> Saitama, um herói comum, treina incansavelmente para se tornar o mais forte, mas sua força é tão imensa que ele derrota qualquer inimigo com um único soco, enfrentando o tédio da vida cotidiana.</p>
                       
                        <a href="#" class="botaum btn btn-primary">Assistir</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgfilmes/wolverine-imortal-poster-2.webp" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Wolverine imortal</h5>
                      <p class="card-text">O mutante Wolverine viaja ao Japão, onde enfrenta seu passado sombrio e enfrenta uma conspiração que ameaça sua própria imortalidade, enquanto descobre o verdadeiro significado da honra e da redenção.</p>
                      
                      <a href="#" class="botaum btn btn-primary">Assistir</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgfilmes/desktop-wallpaper-ronin-47-ronin.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">47 Ronins</h5>
                      <p class="card-text"> Inspirado em eventos reais do Japão feudal, este filme conta a história de um grupo de samurais renegados que buscam vingança pela morte de seu mestre, enfrentando desafios mortais em sua jornada.</p>
                      
                      <a href="#" class="botaum btn btn-primary">Assistir</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgfilmes/whatsapp-image-2016-09-03-at-11-46-08-pm.jpeg" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Kill bill</h5>
                      <p class="card-text"> Uma noiva, conhecida como Beatrix Kiddo, busca vingança contra seus antigos colegas assassinos após ser traída e deixada para morrer no dia do seu casamento, em uma jornada repleta de ação e sangue.</p>
                     
                      <a href="#" class="botaum btn btn-primary">Assistir</a>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card" >
                  <img class="imagcard card-img-top" src="imgfilmes/filme_até_o_último_homem-864x400_c.webp" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Até o ultimo homem</h5>
                      <p class="card-text"> Baseado em uma história real, este filme segue Desmond Doss, um soldado que, durante a Segunda Guerra Mundial, se recusa a pegar em armas por suas crenças religiosas, mas salva inúmeras vidas como médico de combate.</p>
                     
                      <a href="" class="botaum btn btn-primary">Assistir</a>
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