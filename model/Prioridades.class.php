<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Prioridades extends Conexao{
    
    private $id_prioridade, $status;
    
    function __construct() {
        parent::__construct();
    }
     private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id_prioridade' => $lista['id_prioridade'],
                'status' => $lista['status'],
            );
            $i++;
        endwhile;
    }
    
       function GetPrioridades() {
        $query = "select * from {$this->prefix}prioridades";
        $this->ExecuteSQL($query);

        $this->GetLista();
    }
    
}

