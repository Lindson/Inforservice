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
        $ano_atual = date("Y");
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = :ano_atual";
        $params = array(':ano_atual'=>$ano_atual);
        $this->ExecuteSQL($query,$params);
        return $this->TotalDados();
    }
    
    function FaturamentoMes(){        
        $mes_atual = date("m");
        $ano_atual = date("Y");
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual";
        $params = array(':ano_atual'=> $ano_atual,':mes_atual'=>$mes_atual);
        $this->ExecuteSQL($query,$params);
        return $this->TotalDados();        
    }
    function ChamadosRonilsonAno(){
       $ano_atual = date("Y"); 
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and id_tecnico = 2";
       $params = array(':ano_atual'=>$ano_atual);
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();
    }
    function ChamadosRonilsonMes(){
       $mes_atual = date("m");
       $ano_atual = date("Y");
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual and id_tecnico = 2";
       $params = array(':ano_atual'=>$ano_atual,':mes_atual'=>$mes_atual);
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();
    }
    function ChamadosLindsonAno(){
       $ano_atual = date("Y"); 
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and id_tecnico = 1";
       $params = array(':ano_atual'=>$ano_atual);
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();  
    }
    function ChamadosLindsonMes(){
       $mes_atual = date("m");
       $ano_atual = date("Y");
       $query = "SELECT * from tb_chamados WHERE YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual and id_tecnico = 1";
       $params = array(':ano_atual'=>$ano_atual ,':mes_atual'=>$mes_atual);
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados(); 
       
    }
}
