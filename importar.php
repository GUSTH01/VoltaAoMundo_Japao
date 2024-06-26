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
    <link rel="stylesheet" href="form.css">
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
                echo "<a class='dropdown-item dropitem' href='index.html'>Home</a>";
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

      <div class="divlogin container-fluid">
        <div class="login-container">
      <form action="classes/comentarios.php" method="post" enctype="multipart/form-data">
        <label for="jsonFile"><h2>Selecione o arquivo JSON:</h2></label><br>
        <input type="file" id="jsonFile" name="jsonFile"><br><br>
        <button type="submit">Enviar Arquivo</button>
    </form>
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