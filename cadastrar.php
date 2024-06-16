<?php
try {
  include_once "classes/conexao.php";

  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $senha = hash("sha256", $_POST["senha"]);

  // Verificar se o email já existe
  $sqlCheckEmail = "SELECT * FROM tb_usuarios WHERE email = :email";
  $stmtCheckEmail = $conexao->prepare($sqlCheckEmail);
  $stmtCheckEmail->bindParam(':email', $email);
  $stmtCheckEmail->execute();
  $emailExists = $stmtCheckEmail->fetch();

  if ($emailExists) {
    echo "<script type='text/javascript'>
            alert('O email já está cadastrado! Tente novamente');
            window.location.href = 'cadastrar.html'; // Redireciona para a página de cadastro
          </script>";
  } else {
    // Inserir novo registro se o email não existir
    $sql = "INSERT INTO tb_usuarios (nome, email, senha) VALUES (:usuario, :email, :senha)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    echo "<script type='text/javascript'>
            alert('Registro gravado com sucesso !!! Faça Login agora.');
            window.location.href = 'login.html'; // Redireciona para a página de cadastro
          </script>";
  }
} catch (Exception $erro) {
  echo $erro->getMessage();
  // echo "Ocorreu um erro";
}
?>