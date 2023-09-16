<?php

class Lancamento_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function Lancamento()
    {
        $post = json_decode(file_get_contents('php://input'));
        $data_hoje = date("Y/m/d");
        $valor = $post[0];
        $fluxo = $post[1];
        $tipo = $post[2];
        $obs = $post[3];

        if (strlen(trim($valor)) == 0 || strlen(trim($fluxo)) == 0 || strlen(trim($tipo)) == 0) {
            $msg = array("num" => 0, "texto" => "É necessario prencher os campos necessários");
        } else {

            if (strlen(trim($obs)) != 0) {
                $sql = $this->db->insert('fluxocaixa.lancamento', array(
                    "data" => $data_hoje,
                    "tipo" => $tipo,
                    "valor" => $valor,
                    "fluxo" => $fluxo,
                    "obs" => $obs
                ));
            } else {
                $sql = $this->db->insert('fluxocaixa.lancamento', array(
                    "data" => $data_hoje,
                    "tipo" => $tipo,
                    "valor" => $valor,
                    "fluxo" => $fluxo
                ));
            }

            if ($sql) {
                $msg = array("num" => 1, "texto" => "Lançamento feito com sucesso!", "nha" => $data_hoje);
            } else {
                $msg = array("num" => 0, "texto" => "Houve um erro no lançamento");
            }
        }

        echo (json_encode($msg));
    }
}
