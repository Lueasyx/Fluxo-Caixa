<?php

class Relatorio_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRelatorio()
    {
        $post = json_decode(file_get_contents('php://input'));

        $sql = $this->db->select("select l.sequencia, l.data, l.valor, t.descricao as fluxo, t2.descricao as tipo, l.obs from lancamento l join tipofluxo t on l.fluxo = t.codigo join tipolancamento t2 on l.tipo = t2.sequencia;");

        echo (json_encode($sql));
    }
}
