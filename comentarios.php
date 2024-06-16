<?php
try {
  include_once "classes/conexao.php";

  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $comentario = $_POST["comentario"];

  $sql = "INSERT INTO tb_comentarios (nome, email, comentario)
          VALUES ('{$usuario}','{$email}','{$comentario}')";

  $conexao->exec($sql);
  echo "<h3>Seu comentario foi enviado</h3>";
} catch (Exception $erro) {
  echo $erro->getMessage();
  // echo "Ocorreu um erro";
}