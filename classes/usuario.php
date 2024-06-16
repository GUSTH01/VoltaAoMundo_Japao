<?php
class usuario
{
    public $id;
    public $nome;
    public $email;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir()
    {
     
        //Aqui criamos o comando SQL para inserir os dados na tabela de alunos
        $sql = "INSERT INTO tb_alunos (nome, email, senha) VALUES (
                    '{$this->nome}',
                    '{$this->email}',
                    '{$this->senha}'

                    )";
        include "conexao.php";
        /*******MUNDANÇA DE CAMINHO*****/
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";
        header("refresh:5; URL= alunos-listar.php");
    }

    public function listar()
    {
        $sql = "SELECT a.id, a.foto, a.nome, a.email, a.fk_tb_turmas_id, t.descTurma
                FROM tb_alunos a JOIN tb_turmas t
                ON a.fk_tb_turmas_id = t.id
                ORDER BY a.id";

        include "conexao.php";
        /*******MUNDANÇA DE CAMINHO*****/
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

   

    public function atualizar()
    {
        print_r($this->foto);

        //Verifica se o usuário alterou a Foto do Aluno, se alterou continua daqui
        if (!empty($_FILES['imgFoto']['name'])){
            // A Função do PHP "preg_match()", pega a extensão da imagem e carrega na variável $ext
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $this->foto["name"], $ext);

            /* Esta linha usa as funções PHP md5(), uniqid() e time() 
            para gerar um nome único para a imagem. Depois concatena com a extensão extraida na linha acima */
            $this->nomeFoto = md5(uniqid(time())) . "." . $ext[1];

            //Esta linha concatena o caminho da pasta que guardaremos as imagens com nome da imagem
            $this->caminhoFoto = '../img/' . $this->nomeFoto;
            /*******MUNDANÇA DE CAMINHO*****/

            //Aqui utilizamos a função PHP move_upload_file() para salvar a imagem na pasta
            move_uploaded_file($this->foto["tmp_name"], $this->caminhoFoto);



            // Query SQL para atualizar um aluno no banco de dados pelo id
            $sql = "UPDATE tb_alunos SET 
                    nome = '$this->nome' ,
                    foto = '$this->nomeFoto',
                    email = '$this->email',
                    fk_tb_turmas_id = '$this->turma_id'
                    WHERE id = $this->id ";
        } else {
            
            // Caso o usuário não tenha alterado a FOTO, o campo chegará vazio,
            // então não realizamos o UPDATE da foto e mantemos a antiga.
            $sql = "UPDATE tb_alunos SET 
                    nome = '$this->nome' ,
                    email = '$this->email',
                    fk_tb_turmas_id = '$this->turma_id'
                    WHERE id = $this->id ";
        }

        include "conexao.php";
        /*******MUNDANÇA DE CAMINHO*****/
        $conexao->exec($sql);
    }

    public function carregar()
    {
        // Query SQL para buscar o aluno no banco de dados pelo id
        $sql = "SELECT * FROM tb_alunos WHERE id=" . $this->id;
        include "conexao.php";
        /*******MUNDANÇA DE CAMINHO*****/

        // Execução da query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos da turma recuperados do banco às propriedades do objeto
        $this->id = $linha['id'];
        $this->nome = $linha['nome'];
        $this->foto = $linha['foto'];
        $this->email = $linha['email'];
        $this->turma_id = $linha['fk_tb_turmas_id'];
    }
}
