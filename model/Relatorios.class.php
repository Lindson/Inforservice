<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Relatorios extends Conexao{
    
    function __construct() {
        parent::__construct();
    }
    
    function GetChamados() {
       
        $query = "select * from v_ordensservicos where YEAR(dt_abertura) =";
        $query .= Sistema::AnoAtualBR();
        $query .= " and MONTH(dt_abertura) = ";
        $query .= Sistema::MesAtualBR();
        $query .= " ORDER BY `id_chamado` DESC ";
        $this->ExecuteSQL($query);
        $this->GetListaDados();
       
       
    }
    
        private function GetListaDados() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cod_os' => $lista['id_chamado'],
                'dt_abertura' => Sistema::Fdata($lista['dt_abertura']),
                'cliente' => $lista['cliente'],
                'tipo' => $lista['tipo'],
                'prioridade' => strtoupper($lista['prioridade']),
                'categoria' => strtoupper($lista['categoria']),
                'descricao' => strtoupper($lista['descricao']),
                'tecnico' => $lista['tecnico'],
                'id_status' => $lista['id_status'],
                'status' => $lista['status'],
                'solucao' => $lista['solucao'],
                'usuario' => $lista['usuario'],
                'cor' => $lista['cor']
            );
            $i++;
            
        endwhile;        
    }
    
}