<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Servicos extends Conexao {

    function __construct() {
        parent::__construct();
    }

    function GetServicos() {
        $query = "select * from {$this->prefix}servicos";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id_servico' => $lista['id_servico'],
                'tipo' => $lista['tipo'],
                                
            );
            $i++;
        endwhile;
    }
    

}
