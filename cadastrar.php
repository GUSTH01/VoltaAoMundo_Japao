<?php
try {
  include_once "classes/conexao.php";

  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $senha = hash("sha256", $_POST["senha"]);

  $sql = "INSERT INTO tb_usuarios (nome, email, senha)
          VALUES ('{$usuario}','{$email}','{$senha}')";

  $conexao->exec($sql);
  echo "<h3>Registro gravado com sucesso!</h3>";
  echo "<a href='login.html'>Fazer login</a>";
} catch (Exception $erro) {
  echo $erro->getMessage();
  // echo "Ocorreu um erro";
}