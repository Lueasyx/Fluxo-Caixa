<?php

class Cadastrar_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cadNewUser()
    {
        $data = json_decode(file_get_contents('php://input'));

        $nome = $data[0];
        $email = $data[1];
        $senha = $data[2];
        $nivel = $data[3];
        $msg = array("num" => 0, "texto" => "erro no cadastro!");

        $sql = $this->db->insert('fluxocaixa.usuario', array(
            "nome" => $nome,
            "email" => $email,
            "senha" => password_hash($senha, PASSWORD_DEFAULT),
            "nivel" => $nivel
        ));

        if ($sql) {
            $msg = array("num" => 1, "texto" => "cadastro realizado com sucesso!");
        }

        echo (json_encode($msg));
    }
}
