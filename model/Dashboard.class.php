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
        
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = :ano_atual";
        $params = array(':ano_atual'=> Sistema::AnoAtualBR());
        $this->ExecuteSQL($query,$params);
        return $this->TotalDados();
    }
    
    function FaturamentoMes(){        
        
        $query = "SELECT * FROM {$this->prefix}chamados where YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual";
        $params = array(':ano_atual'=> Sistema::AnoAtualBR(),':mes_atual'=> Sistema::MesAtualBR());
        $this->ExecuteSQL($query,$params);
        return $this->TotalDados();        
    }
    function ChamadosRonilsonAno(){
       
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and id_tecnico = 2";
       $params = array(':ano_atual'=>Sistema::AnoAtualBR());
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();
    }
    function ChamadosRonilsonMes(){
       
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual and id_tecnico = 2";
       $params = array(':ano_atual'=>Sistema::AnoAtualBR(),':mes_atual'=> Sistema::MesAtualBR());
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();
    }
    function ChamadosLindsonAno(){
       
       $query = "SELECT * from {$this->prefix}chamados WHERE YEAR(dt_abertura) = :ano_atual and id_tecnico = 1";
       $params = array(':ano_atual'=>Sistema::AnoAtualBR());
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados();  
    }
    function ChamadosLindsonMes(){
       
       $query = "SELECT * from tb_chamados WHERE YEAR(dt_abertura) = :ano_atual and MONTH(dt_abertura) = :mes_atual and id_tecnico = 1";
       $params = array(':ano_atual'=>Sistema::AnoAtualBR() ,':mes_atual'=> Sistema::MesAtualBR());
       $this->ExecuteSQL($query,$params);
       return $this->TotalDados(); 
       
    }
}
