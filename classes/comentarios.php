<?php
require_once '../classes/Disciplina.php';

$url = '../json/disciplinas.json';

$json = file_get_contents($url);

$data = json_decode($json, true);

foreach ($data as $linha) {
  $disciplina = new Disciplina();

  $nome = $linha['nome'];
  $professor = $linha['professor'];
  $carga = $linha['carga'];

  $disciplina->nome = $nome;
  $disciplina->professor = $professor;
  $disciplina->carga = $carga;

  $disciplina->inserir();
}
?>

<a href="./disciplina-listar.php">Voltar</a>