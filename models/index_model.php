<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $login = json_decode(file_get_contents('php://input'));
        $email = $login[0];
        $senha = $login[1];

        $msg = array("cod" => 0, "texto" => "Login falhou!");

        $sql = $this->db->select("select * from fluxocaixa.usuario u where u.Email like '$email'");

        if (password_verify($senha, $sql[0]->senha)) {
            $firstname = explode(' ', $sql[0]->nome);

            session::init();
            session::set("nome", $sql[0]->nome);
            session::set("firstname", $firstname[0]);
            session::set("email", $sql[0]->Email);
            session::set("nivel", $sql[0]->nivel);
            $msg = /* array("cod" => 1, "texto" => "Login realizado com sucesso!") */ $_SESSION;
        } else {
            $msg = array("cod" => 0, "texto" => "Login falhou!");
        }

        echo (json_encode($msg));
    }

        function logout()
        {
            $v = json_decode(file_get_contents('php://input'));

            $msg = array("cod" => 0, "texto" => "Erro no Logout");
            if ($v == 1) {
                Session::init();
                session_unset();
                Session::destroy();
                
                $msg = array("cod" => 1, "texto" => "Logout realizado com sucesso!");
            }

            echo (json_encode($msg));
        }
}
