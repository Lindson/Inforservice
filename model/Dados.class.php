<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
*/
class Dados extends Conexao {
   
            
    function __construct() {
        parent::__construct();
    }
   
    function ContaChamado2017($mes){
      
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = 2017 and MONTH(dt_abertura) = {$mes}";
        $this->ExecuteSQL($query);
        return $this->TotalDados();
    }
   function ContaChamado2018($mes){
      
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = 2018 and MONTH(dt_abertura) = {$mes}";
        $this->ExecuteSQL($query);
        return $this->TotalDados();
    }

}
