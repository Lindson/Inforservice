<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br - Lindson Amaro Lemos
 */
class Dashboard extends Conexao{
    
    function __construct() {
        parent::__construct();
    }
    
    function Chamado2018(){
      
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura)";
        $this->ExecuteSQL($query);
        return $this->TotalDados();
    }
    
    function FaturamentoMes(){
        $mes_atual = date("m");
        $query = "SELECT * FROM tb_chamados where YEAR(dt_abertura) = 2018 and MONTH(dt_abertura) = $mes_atual";
        $this->ExecuteSQL($query);
        return number_format($this->TotalDados(),2,",",".");
        
    }
}
