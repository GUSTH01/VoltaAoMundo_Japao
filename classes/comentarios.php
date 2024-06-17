<?php
require_once 'conexao.php';

if ($_FILES['jsonFile']['error'] === UPLOAD_ERR_OK) {
    $jsonFile = $_FILES['jsonFile']['tmp_name'];
    $fileType = mime_content_type($jsonFile);

    if ($fileType === 'application/json') {
        $jsonContent = file_get_contents($jsonFile);
        $data = json_decode($jsonContent, true);

        $sql = "INSERT INTO tb_comentarios (nome, email, comentario, stts) VALUES (:nome, :email, :comentario, 'desativado')";
        $resultado = $conexao->prepare($sql);

        foreach ($data as $linha) {
            $nome = $linha['nome'];
            $email = $linha['email'];
            $comentario = $linha['comentario'];

            $resultado->bindParam(':nome', $nome);
            $resultado->bindParam(':email', $email);
            $resultado->bindParam(':comentario', $comentario);

            $resultado->execute();
        }

        $mensagem = "Arquivo JSON processado e inserido no banco de dados com sucesso!";
        echo "<script type='text/javascript'>
                alert('$mensagem');
                window.location.href = '../comentarios.php';
              </script>";
    } else {

        $mensagem = "Erro: O arquivo enviado não é um arquivo JSON.";
        echo "<script type='text/javascript'>
                alert('$mensagem');
                window.location.href = '../importar.php';
              </script>";
    }
} else {

    $mensagem = "Erro ao processar o arquivo JSON. Nenhum arquivo foi selecionado ou houve um problema com o upload.";
    echo "<script type='text/javascript'>
            alert('$mensagem');
            window.location.href = '../importar.php';
          </script>";
}
?>
