<?php
session_start();

if (!isset($_SESSION['usuario_email'])) {
    echo "<script>alert ('Você não é um administrador')
    window.location.href = 'index.html'; </script>";
    exit();
}


$sql = "SELECT permissao FROM tb_usuarios WHERE email = :email";
include_once "classes/conexao.php";

$email = $_SESSION['usuario_email'];

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':email', $email);
$linha = $resultado->execute();

$linha = $resultado->fetch();

if($linha['permissao'] != 'adm'){
    echo "<script>alert ('Você não é um administrador ')
    window.location.href = 'indexnormal.php'; </script>";
} else if($linha['permissao'] == ''){
    echo "<script>alert ('Você não é um administrador ')
    window.location.href = 'index.html'; </script>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="japan.css">
    <link rel="stylesheet" href="comentarios-listar.css">
    
    <title>Japão index</title>
</head>
<body>
    
    <div class="container-fluid ">
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

      <div class="container mt-5">
        <h2>Comentários Pendentes</h2>
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
                echo "<div class='divcoments col-md-12 mt-3'>";
                echo "<h5>{$comentario['nome']}</h5>";
                echo "<p>{$comentario['comentario']}</p>";
                echo "<div class='d-inline-block'>";
                echo "<form method='post' class='divcomentsbtn d-inline mr-2'>";
                echo "<input type='hidden' name='id_comentario' value='{$comentario['id']}'>";
                echo "<input type='hidden' name='acao' value='enviar'>";
                echo "<button type='submit' class='btn btn-success'>Enviar</button>";
                echo "</form>";
                echo "<form method='post' class='divcomentsbtn d-inline'>";
                echo "<input type='hidden' name='id_comentario' value='{$comentario['id']}'>";
                echo "<input type='hidden' name='acao' value='excluir'>";
                echo "<button type='submit' class='btn btn-danger'>Excluir</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    </div>


      <footer>
        <h2 class="footpainel hfooter">JAPÃO - GUSTAVO</h2>
        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
      
