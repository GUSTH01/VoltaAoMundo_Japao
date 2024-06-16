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


// Verifica se o usuário não tem permissão de administrador
if ($linha['permissao'] != 'adm') {
   
    echo "<script type='text/javascript'>
            alert('Você não é um usuário administrador!');
            window.location.href = 'index.html';
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="japan.css">
    <title>Japão index</title>
</head>
<body>
    
    <div class="container-fluid">
    <ul class="row nav">
      <li class="colnav col-sm nav-link">
        <div class="dropdown">
          <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cidades 
          </button>
          <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item dropitem" href="#">Tokyo</a>
            <a class="dropdown-item dropitem" href="#">Filmes</a>
            <a class="dropdown-item dropitem" href="sobre.html">Sobre</a>
          </div>
        </div>
      </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Midia
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item dropitem" href="#">Filmes</a>
              <a class="dropdown-item dropitem" href="sobre.html">Sobre</a>
              <a class="dropdown-item dropitem" href="#">Cultura</a>
            </div>
          </div>
        </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sobre
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item dropitem" href="#">Filmes</a>
              <a class="dropdown-item dropitem" href="sobre.html">Sobre</a>
              <a class="dropdown-item dropitem" href="#">Cultura</a>
            </div>
          </div>
        </li>
        <li class="colnav col-sm nav-link">
          <div class="dropdown">
            <button class="btnav" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
            </button>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item dropitem" href="formlogin.php">Login</a>
              <a class="dropdown-item dropitem" href="cadastrar.html">Cadastro</a>
              <a class="dropdown-item dropitem" href="comentarios-listar.html">Comentarios</a>
              <?php if ($linha['permissao'] == 'adm')
                echo "<a class='dropdown-item dropitem' href='comentarios-listar.html'>Comentarios</a>";
              ?>

            
            </div>
          </div>
        </li>
      </ul>

      <div class="container mt-5">
        <h2>Comentários Ativos</h2>
        <div class="row">
            <?php

            function ativarComentario($id, $conexao) {
                $sql = "UPDATE tb_comentarios SET stts = 'ativado' WHERE id = :id";
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }

            function excluirComentario($id, $conexao) {
                $sql = "DELETE FROM tb_comentarios WHERE id = :id";
                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['acao']) && isset($_POST['id_comentario'])) {
                    $id_comentario = $_POST['id_comentario'];
                    $acao = $_POST['acao'];
                    
                    if ($acao == 'enviar') {
                        ativarComentario($id_comentario, $conexao);
                    } 

                    elseif ($acao == 'excluir') {
                        excluirComentario($id_comentario, $conexao);
                    }
                }
            }

            // Consulta SQL para selecionar os comentários ativos
            $sql = "SELECT id, nome, comentario FROM tb_comentarios WHERE stts = 'desativado'";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Exibição dos comentários na página
            foreach ($comentarios as $comentario) {
                echo "<div class='col-md-12 mt-3'>";
                echo "<h5>{$comentario['nome']}</h5>";
                echo "<p>{$comentario['comentario']}</p>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id_comentario' value='{$comentario['id']}'>";
                echo "<input type='hidden' name='acao' value='enviar'>";
                echo "<button type='submit' class='btn btn-success mr-2'>Enviar</button>";
                echo "</form>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id_comentario' value='{$comentario['id']}'>";
                echo "<input type='hidden' name='acao' value='excluir'>";
                echo "<button type='submit' class='btn btn-danger'>Excluir</button>";
                echo "</form>";
                echo "</div>";
            }
            ?>
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
      
