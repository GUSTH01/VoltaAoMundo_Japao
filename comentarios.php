<?php
try {
  include_once "classes/conexao.php";

  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $comentario = $_POST["comentario"];

  $sql = "INSERT INTO tb_comentarios (nome, email, comentario, stts)
          VALUES ('{$usuario}','{$email}','{$comentario}' , 'desativado')";

  $conexao->exec($sql);
  echo "<script>
        alert('Comentário enviado, seu comentário será avaliado por um administrador');
         window.location.href = 'comentarios-listar.php';
    </script>";
} catch (Exception $erro) {
  echo $erro->getMessage();
  // echo "Ocorreu um erro";
}