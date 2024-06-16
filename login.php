<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senhaLimpa = $_POST['senha'];
$senha = hash("sha256", $senhaLimpa);

$sql = "SELECT * FROM tb_usuarios
        WHERE nome = :user
        AND senha = :passwd AND email = :email";

include "classes/conexao.php";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':user', $usuario);
$resultado->bindParam(':email', $email);
$resultado->bindParam(':passwd', $senha);
$linha = $resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['nome'];
$email = $linha['email'];
$permissao = $linha['permisao'];


if ($linha['permissao'] == 'adm') {
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		echo "usuario não existe";
	} else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: painel.html');
	}
} else {
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		echo "Usuario não cadastrados";
	} else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: index.html');
        
	}
}
