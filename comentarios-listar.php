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
                        <a class="dropdown-item dropitem" href="login.html">Login</a>
                        <a class="dropdown-item dropitem" href="cadastrar.html">Cadastro</a>
                        <a class="dropdown-item dropitem" href="comentarios.html">Comentários</a>
                        <a class="dropdown-item dropitem" href="logout.php">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="container mt-5">
        <h2>Comentários Ativos</h2>
        <div class="row">
            <?php
            // Inclua o arquivo de conexão com o banco de dados
            include_once "classes/conexao.php";

            // Consulta SQL para selecionar os comentários ativos
            $sql = "SELECT nome, comentario FROM tb_comentarios WHERE stts = 'ativado'";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Exibição dos comentários na página
            foreach ($comentarios as $comentario) {
                echo "<div class='col-md-12 mt-3'>";
                echo "<h5>{$comentario['nome']}</h5>";
                echo "<p>{$comentario['comentario']}</p>";
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
